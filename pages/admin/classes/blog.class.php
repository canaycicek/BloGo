<?php
class Blog extends Db
{
    public function getBlogs()
    {
        $sql = "SELECT b.id,b.title,b.url,b.is_active,c.name
        FROM blogs b INNER JOIN categories c ON b.category_id=c.id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getBlogById(int $id)
    {
        $sql = "SELECT b.id,b.title,b.short_description,b.description,b.url,b.is_active,c.id,c.name FROM blogs b INNER JOIN categories c ON b.category_id = c.id WHERE b.id = :id";
        
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }
    public function createBlog(string $title, string $shortDescription, string $description, $category_id, string $url)
    {
        $sql = "INSERT INTO blogs(title,short_description,description,category_id,url) VALUES (?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title, $shortDescription, $description, $category_id, $url]);
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
        string $url,
        bool $is_active
    ) {
        $sql = "UPDATE blogs SET title=:title,
         short_description=:short_description,
          description=:description, category_id=:category_id, url=:url, is_active=:is_active WHERE id=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([
            'id' => $id, 'title' => $title,
            'short_description' => $short_description,
            'description' => $description, 'category_id' => $category_id, 'url' => $url, 'is_active' => $is_active
        ]);
        return true;
    }
}
