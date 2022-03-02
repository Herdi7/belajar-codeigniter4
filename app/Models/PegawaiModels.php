<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModels extends Model
{
    protected $table = 'persons';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'produser', 'img'];

    public function search($value)
    {
        return $this->like('name', $value);
    }
}