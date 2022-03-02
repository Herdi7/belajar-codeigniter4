<?php

namespace App\Controllers;

use App\Models\PegawaiModels;

$session = \Config\Services::session();

class Pegawai extends BaseController
{ 

    protected $model;
    protected $session;
    protected $pagination;

    public function __construct()
    {
        $this->model = new PegawaiModels;
        $this->session = \Config\Services::session();
        $this->session->start();

    }   
    
    public function index()
    {
        $page = $this->request->getVar('page');
        $perPage = 7;
        $i = 1;
        $model = $this->model;

        // paginasi untuk searching 
        if( !is_null($this->request->getVar('btn-cari')) ) {
            $model = $this->model->search($this->request->getVar('input-cari'));
        }

        // menjadikan penumeran lebih fleksibel
        if( !is_null($page) ) {
            $page = (int)$page;
            $i = ($perPage * $page) - $perPage + 1;
        }
        $data = [
            "title"     => "List Pegawai",
            "pegawai"   => $model->paginate($perPage),
            'pager'     => $this->model->pager,
            'i'         => $i
        ];
        return view('pegawai/listPegawai', $data);
    }

}