<?php

class User extends Db
{
    public function getUsers()
    {
        $sql = "SELECT u.id,u.name,u.username,u.email,r.rol_name
        FROM users u INNER JOIN roles r ON u.rol_id=r.id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getRoles()
    {
        $sql = "SELECT * FROM roles";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getUserById(int $id)
    {
        $sql = "SELECT u.id,u.name,u.username,u.email,u.rol_id,r.id,r.rol_name
        FROM users u INNER JOIN roles r ON u.rol_id=r.id WHERE u.id=:id";

        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }
    public function getUserByUsername(string $username)
    {
        $sql = "SELECT u.id,u.name,u.username,u.email,u.rol_id,r.id,r.rol_name
        FROM users u INNER JOIN roles r ON u.rol_id=r.id WHERE u.username=:username";

        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        return $stmt->fetch();
    }
    public function deleteUser(int $id)
    {
        $sql = "DELETE FROM users WHERE id=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(['id' => $id]);
    }
    public function createUser(string $name, string $username, string $email, $password, string $repassword)
    {
        $sql = "INSERT INTO users(name,username,email,password,repassword) VALUES (?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $username, $email, $password, $repassword]);
        return true;
    }
    public function updateUser(int $id, $rol_id)
    {
        $sql = "UPDATE users SET rol_id=:rol_id WHERE id=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(['id' => $id, 'rol_id' => $rol_id]);
        return true;
    }
    private function checkUsernameExists($username)
    {
        $sql = "SELECT COUNT(*) as count FROM users WHERE username = :username";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['count'] > 0;
    }
    public function authenticateUser(string $username, $rawPassword)
    {
        if(!$this->checkUsernameExists($username)){
            return false;
        }else{
            $sql = "SELECT username, password FROM users WHERE username = :username";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->execute();
    
            // User found
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $storedHash = $row['password'];

            // Girilen parolayı kontrol et
            if (password_verify($rawPassword, $storedHash)) {
                // Login success
                return true;
            } else {
                // Wrong password
            }
        }
    }
    public function isLoggedin()
    {
        if (isset($_COOKIE["loggedIn"]) && $_COOKIE["loggedIn"]){
            return true;
        }
    }
    public function isBloger()
    {
        if (($this->isLoggedin() && isset($_COOKIE["userType"])) && ($_COOKIE["userType"] == "admin" || $_COOKIE["userType"] == "bloger")){
            return true;
        }
    }
    public function isAdmin()
    {
        if ($this->isLoggedin() && isset($_COOKIE["userType"]) && $_COOKIE["userType"] == "admin"){
            return true;
        }
    }
    
}
