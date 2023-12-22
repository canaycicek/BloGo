<?php
    class Blog extends Db{
        public function getBlogs(){
            $sql = "SELECT * FROM blogs";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public function createBlog(string $title, string $shortDescription, string $description, string $url){
            $sql = "INSERT INTO blogs(title,short_description,description,url) VALUES (?,?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$title, $shortDescription, $description, $url]);
            return true;
        }
    }
?>