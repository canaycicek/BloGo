<?php

class User extends Db
{
    public function createUser(string $name, string $username, string $email, $password, string $repassword)
    {
        $sql = "INSERT INTO users(name,username,email,password,repassword) VALUES (?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $username, $email, $password, $repassword]);
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
    public function checkUserStatus()
    {
        if (!isset($_COOKIE['userLogin'])) {
            
            header("Location:". $_ENV["URL_PREFIX"]. "/pages/front/auth/login.php");
            exit();
        }
    }
    public function isLoggedin()
    {
        if (isset($_COOKIE["loggedin"]) && $_COOKIE["loggedin"] == true){
            return true;
        }else{
            return false;
        }
    }
    public function isAdmin()
    {
        if (isLoggedin() && isset($_COOKIE["userType"]) && $_COOKIE["userType"] == "admin"){
            return true;
        }else{
            return false;
        }
    }
}
