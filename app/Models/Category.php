<?php declare(strict_types=1);

namespace App\Models;

use App\Model;

class Category extends Model
{
    public function create(array $data): int
    {
        $this->db->prepare(
            'INSERT INTO product_categories (name) VALUES (:name)'
        )->execute([
            ':name' => $data['name'],
        ]);

        return (int) $this->db->lastInsertId();
    }

    public function update(array $data): void
    {
        $data = [
            'name' => $data['name'],
            'id' => $data['category_id'],
        ];

        $this->db->prepare(
            "UPDATE product_categories
            SET name=:name WHERE id=:id "
        )->execute($data);
    }

    public function delete(int $categoryId): void
    {
        $this->db->prepare(
            "DELETE FROM product_categories WHERE id=?"
        )->execute([$categoryId]);
    }

    public function findAll(): array
    {
        $stm = $this->db->query(
            'SELECT * FROM product_categories ORDER BY created_at ASC '
        );

        return $stm->fetchAll() ?: [];
    }

    public function findById(int $categoryId): array
    {
        $stm = $this->db->prepare(
            'SELECT * FROM product_categories WHERE id = ?'
        );
        $stm->execute([$categoryId]);

        $user = $stm->fetch();

        return $user ?: [];
    }
}