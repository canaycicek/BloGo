<?php
class Blog extends Db
{
    public function getBlogs()
    {
        $sql = "SELECT b.id,b.title,b.url,b.image_url,b.is_active,c.name
        FROM blogs b INNER JOIN categories c ON b.category_id=c.id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getBlogById(int $id)
    {
        $sql = "SELECT b.id,b.title,b.short_description,b.description,b.category_id,b.image_url,b.url,b.is_active,b.dateAdded,c.id,c.name FROM blogs b INNER JOIN categories c ON b.category_id = c.id WHERE b.id = :id";

        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }
    public function getBlogsByDate()
    {
        try {
            $sql = "SELECT * FROM blogs WHERE is_active=1 ORDER BY dateAdded DESC";

            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
    
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Hata: " . $e->getMessage();
        }
    }
    public function getBlogsByCategory($categoryId)
    {
        try {
            $sql = "SELECT * FROM blogs WHERE is_active=1 AND category_id=$categoryId ORDER BY dateAdded DESC";

            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
    
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Hata: " . $e->getMessage();
        }
    }
    public function createBlog(string $title, string $shortDescription, string $description, $category_id, string $image_url, string $url)
    {
        $sql = "INSERT INTO blogs(title,short_description,description,category_id,image_url,url) VALUES (?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title, $shortDescription, $description, $category_id, $image_url, $url]);
        return true;
    }
    public function deleteBlog(int $id)
    {
        $sql = "DELETE FROM blogs WHERE id=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(['id' => $id]);
    }
    public function updateBlog(
        int $id,
        string $title,
        string $short_description,
        string $description,
        string $category_id,
        string $image_url,
        string $url,
        bool $is_active
    ) {
        $sql = "UPDATE blogs SET title=:title,short_description=:short_description,description=:description, category_id=:category_id, image_url=:image_url, url=:url, is_active=:is_active WHERE id=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([
            'id' => $id,
            'title' => $title,
            'short_description' => $short_description,
            'description' => $description,
            'category_id' => $category_id,
            'image_url' => $image_url,
            'url' => $url,
            'is_active' => $is_active
        ]);
        return true;
    }
}
