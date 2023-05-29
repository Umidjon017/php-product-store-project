<?php declare(strict_types=1);

namespace App\Models;

use App\Model;

class Authentication extends Model
{
    public function signUp(array $data): int
    {
        $stm = $this->db->prepare(
            'INSERT INTO users(username, password, email, role_id)
                VALUES (:username, :password, :email, :roleId)'
        );

        $stm->execute([
            ':username' => $data['username'],
            ':password' => $data['password'],
            ':email'    => $data['email'],
            ':roleId'   => $data['role_id'],
        ]);

        return (int) $this->db->lastInsertId();
    }
}