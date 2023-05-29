<?php declare(strict_types=1);

namespace App\Models;

use App\Model;

class Invoice extends Model
{
    public function getAll(): array
    {
        $stm = $this->db->query(
            'SELECT * FROM magemastery_invoice ORDER BY created_at DESC '
        );

        return $stm->fetchAll();
    }
}