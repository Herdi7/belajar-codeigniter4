<?php

namespace App\Controllers;

use App\Models\AnimeModels;

class Anime extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new AnimeModels;
    }   

    public function index()
    {
        $anime = $this->model->findAll();
        $data = [
            "title" => "Siswa",
            "anime" => $anime
        ];
        return view('Anime/listAnime', $data);
    }
}