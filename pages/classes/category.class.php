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
    public function getCategoriesByIsActive()
    {
        $sql = "SELECT * FROM categories WHERE is_active=1 && deletedAdd IS NULL";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getCategoryById(int $id)
    {
        $sql = "SELECT * FROM categories WHERE id=:id";

        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }
    public function createCategory(string $name)
    {
        try {

            // Kategori oluşturma sorgusu burada yapılır
            $sql = "INSERT INTO categories(name) VALUES (?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$name]);

            echo "Kategori başarıyla oluşturuldu.";

        } catch (PDOException $e) {
            // Hata durumunda daha ayrıntılı bir hata mesajı almak için aşağıdaki satırı ekleyebilirsiniz
            echo "Hata: " . $e->getMessage();
        }
        
        return true;
    }
    public function deleteCategory(int $id)
    {
        $sql = "UPDATE categories SET deletedAdd=CURRENT_TIMESTAMP() WHERE id=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(['id' => $id]);
    }

    public function updateCategory(int $id, string $name, bool $is_active)
    {
        $sql = "UPDATE categories SET name=:name, is_active=:is_active WHERE id=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([
            'id' => $id, 'name' => $name, 'is_active' => $is_active
        ]);
        return true;
    }

    public function updateCategoryByDeleted(int $id, $deletedAdd)
    {
        $sql = "UPDATE categories SET deletedAdd=:deletedAdd WHERE id=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(['id' => $id, 'deletedAdd' => $deletedAdd]);
        return true;
    }
}
