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
            "anime" => $anime,
            "animeId" => (int)$anime['id']
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
                ],
                'img' => [
                    'rules' => 'max_size[img, 2048]|mime_in[img,image/png,image/jpg]|ext_in[img,jpg,jpeg,png]|is_image[img]',
                    'errors' => [
                        'max_size' => 'file yang diupload terlalu besar',
                        'mime_in' => 'file yang anda masukkan bukanlah gambar',
                        'ext_in' => 'hanya dapat memasukkan file yang memiliki ekstensi jpg, jpeg dan png',
                        'is_image' => 'anda harus memasukkan gambar'
                    ]
                ],
        ]) ){
            return redirect()->to('http://localhost:8080/Anime/create', null)->withinput();
        }
        
        $imgFile = $this->request->getFile('img');
        if ($imgFile->getError() == 4) {
            $imgName = 'default.jpg';
        } else {
            $imgName = $imgFile->getRandomName('img');
            $imgFile->move('img/', $imgName);
        }

        $data = [
            'judul' => $this->request->getVar('judul'),
            'slug' => url_title($this->request->getVar('judul'), '-', true),
            'produser' => $this->request->getVar('produser'),
            'img' => $imgName
        ];
        
        $this->model->insert($data);

        // set session
        session()->setFlashData('tambah', 'Anime berhasil dimasukkan ke dalam list');
        return redirect()->to('http://localhost:8080/Anime/', null, 'index');
    }
    
    public function delete($id)
    {
        $anime = $this->model->getAnime($this->request->getPost('slug'));
        if( file_exists('img/'. $anime['img']) ) {
            if($anime['img'] != 'default.jpg'){
                unlink('img/'. $anime['img']);
            } 
        }
        $this->model->delete($id);
        return redirect()->to('http://localhost:8080/Anime/', null, 'index');
    }

    public function edit($slug)
    {
        $validation = \Config\Services::validation();
        $data = [
            'title' => 'Ubah Anime',
            'validation' => $validation,
            'anime' => $this->model->getAnime($slug)
        ];

        return view('anime/edit', $data);
    }

    public function update($id)
    {
        $dataLama = $this->model->getAnime($this->request->getVar('slug'));
        if( $dataLama['judul'] == $this->request->getVar('judul')){
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[anime.judul]';
        }
        if( !$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => 'judul harus diisi',
                    'is_unique' => '{field} Telah ada, gunakan judul lain'
                    ]
                ],
            'img' => [
                'rules' => 'max_size[img, 2048]|mime_in[img,image/png,image/jpg]|ext_in[img,jpg,jpeg,png]|is_image[img]',
                'errors' => [
                    'max_size' => 'file yang diupload terlalu besar',
                    'mime_in' => 'file yang anda masukkan bukanlah gambar',
                    'ext_in' => 'hanya dapat memasukkan file yang memiliki ekstensi jpg, jpeg dan png',
                    'is_image' => 'anda harus memasukkan gambar'
                ]
            ]
        ]) ){
            return redirect()->to('http://localhost:8080/Anime/edit/'. $this->request->getVar('slug'))->withinput();
        }
        
        $imgLama = $this->request->getVar('imgLama');
        $img = $this->request->getFile('img');
        // jika image di ubah
        if( $img->getError() == 4 ){
            $imgName = $imgLama;
        } else {
            $imgName = $img->getRandomName();
            if( $imgLama != 'default.jpg' ) {
                if( file_exists('img/'. $imgLama) ){                    
                    unlink('img/'. $imgLama );
                }
                $imgName = $img->getRandomName();
                $img->move('img', $imgName);
            }
        }
        
        $data = [
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => url_title($this->request->getVar('judul'), '-', true),
            'produser' => $this->request->getVar('produser'),
            'img' => $imgName
        ];
        
        $this->model->save($data);

         // set session
         session()->setFlashData('tambah', 'Anime berhasil diubah');
         return redirect()->to('http://localhost:8080/Anime/', null, 'index');
     }
}
