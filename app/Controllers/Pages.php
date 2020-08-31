<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data['title']  = 'home';
        return view('pages/home', $data);
    }

    public function about()
    {
        $data['title']  = 'about';
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data['title']  = 'contact';
        return view('pages/contact', $data);
    }
}
