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
        $validation = \Config\Services::validation();
        $data = [
            'title' => 'Tambah Anime',
            'validation' => $validation
        ];
        return view('anime/create', $data);
    }

    public function save()
    {

        if( !$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[anime.judul]',
                'errors' => [
                    'required' => 'judul harus diisi',
                    'is_unique' => '{field} Telah ada, gunakan judul lain'
                    ]
                ]
        ]) ){
            $validation = \Config\Services::validation();
            return redirect()->to('http://localhost:8080/Anime/create', null)->withinput()->with('validation', $validation);
        }

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