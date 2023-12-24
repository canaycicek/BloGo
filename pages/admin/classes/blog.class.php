<?php
    class Blog extends Db{
        public function getBlogs(){
            $sql = "SELECT * FROM blogs";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public function getBlogById(int $id){
            $sql = "SELECT * FROM blogs WHERE id=$id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt->fetch();
        }
        public function createBlog(string $title, string $shortDescription, string $description, string $url){
            $sql = "INSERT INTO blogs(title,short_description,description,url) VALUES (?,?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$title, $shortDescription, $description, $url]);
            return true;
        }
        public function deleteBlog($id){
            $sql = "DELETE FROM blogs WHERE id=:id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute(['id'=>$id]);
        }
        public function updateBlog(int $id, string $title, string $short_description, string $description, string $category, string $url, bool $is_active){
            $sql = "UPDATE blogs SET title=:title, short_description=:short_description, description=:description, category=:category, url=:url, is_active=:is_active WHERE id=:id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute(['id'=>$id, 'title'=>$title, 'short_description'=>$short_description, 'description'=>$description, 'category'=>$category, 'url'=>$url, 'is_active'=>$is_active]);
            return true;
        }
    }
?>