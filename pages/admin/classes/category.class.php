<?php

    class Category extends Db{
        public function getCategories(){
            $sql = "SELECT * FROM categories";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        // public function getCategoriesByBlogId($id){
        //     $sql = "SELECT categories.name, blogs.id FROM categories INNER JOIN blogs ON categories.name=blogs.categories_id";
        //     $stmt = $this->connect()->prepare($sql);
        //     $stmt->execute();
        //     return $stmt->fetchAll();
        // }
    }

?>