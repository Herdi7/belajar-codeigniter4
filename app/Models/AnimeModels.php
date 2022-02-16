<?php

namespace App\Models;

use CodeIgniter\Model;

class AnimeModels extends Model
{
    protected $table = 'anime';
    protected $createdField  = 'create_at';
    protected $updatedField  = 'update_at';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'produser', 'img'];

    public function getAnime($slug = false)
    {
        if ( $slug == false ) {
            return $this->findAll();
        } 
        return $this->where('slug', $slug)->first();
    }
}