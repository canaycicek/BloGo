<?php

class Category extends Db
{
    public function getCategories()
    {
        $sql = "SELECT * FROM categories";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function createCategory(string $name)
    {
        $sql = "INSERT INTO categories(name) VALUES (?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);
        return true;
    }
}
