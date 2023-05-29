<?php declare(strict_types=1);

namespace App\Models;

use App\Model;

class User extends Model
{
    public function findAll(): array
    {
        $stm = $this->db->query(
            'SELECT * FROM users ORDER BY created_at ASC '
        );

        return $stm->fetchAll() ?: [];
    }

    public function findById(int $userId): array
    {
        $stm = $this->db->prepare(
            'SELECT * FROM users WHERE id = ?'
        );
        $stm->execute([$userId]);

        $user = $stm->fetch();

        return $user ?: [];
    }

    public function findByEmail(string $email)
    {
        $stm = $this->db->prepare(
            'SELECT * FROM users WHERE email = ?'
        );
        $stm->execute([$email]);

        $row = $stm->fetch();

        return $row ?: null;
    }
}