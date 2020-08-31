<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }
    public function index()
    {
        //cara manual
        // $db = \Config\Database::connect();
        // $komik  = $db->query("SELECT * FROM komik");

        $komik = $this->komikModel->getKomik();
        $data['title']  = 'komik';
        $data['komik']  = $komik;

        return view('komik/index', $data);
    }

    public function detail($slug)
    {
        $komik = $this->komikModel->getKomik($slug);
        $data = [
            'title' => 'detail',
            'komik' => $komik
        ];

        return view('komik/detail', $data);
    }
}
