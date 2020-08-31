<?php

namespace App\Controllers;

use App\Models\M_mahasiswa;

class Mahasiswa extends BaseController
{
    protected $mhs;
    public function __construct()
    {
        $this->mhs = new M_mahasiswa();
    }
    public function index()
    {
        $mahasiswa = $this->mhs->findAll();
        $data['title']  = 'mahasiswa';
        $data['mhs']    = $mahasiswa;
        return view('mahasiswa/index', $data);
    }
}
