<?php

namespace App\Controllers;

class Komik extends BaseController
{
    public function index()
    {
        $data['title']  = 'komik';
        return view('komik/index', $data);
    }
}
