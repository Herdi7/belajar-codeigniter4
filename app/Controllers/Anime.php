<?php

namespace App\Controllers;

use App\Models\AnimeModels;
$session = \Config\Services::session();

class Anime extends BaseController
{
    protected $model;
    protected $session;

    public function __construct()
    {
        $this->model = new AnimeModels;
        $this->session = \Config\Services::session();
        $this->session->start();
    }   

    public function index()
    {
        $anime = $this->model->getAnime();
        $data = [
            "title" => "Anime List",
            "anime" => $anime
        ];
        return view('Anime/listAnime', $data);
    }

    public function detail($slug)
    {
        $anime = $this->model->getAnime($slug);
        $data = [
            "title" => "Detail",
            "anime" => $anime
        ];

        return view('anime/detailAnime', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Anime',
        ];
        return view('anime/create', $data);
    }

    public function save()
    {
        $data = [
            'judul' => $this->request->getVar('judul'),
            'slug' => url_title($this->request->getVar('judul'), '-', true),
            'produser' => $this->request->getVar('produser'),
            'img' => $this->request->getVar('img')
        ];
        
        $this->model->insert($data);

        // set session
        session()->setFlashData('tambah', 'Anime berhasil dimasukkan ke dalam list');
        return redirect()->to('http://localhost:8080/Anime/', null, 'index');
    }

}