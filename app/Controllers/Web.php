<?php

namespace App\Controllers;

class Web extends BaseController
{
    protected $helpers = ['url'];

    public function index()
    {
        $data['judul'] = "Halaman Depan";
        return view('v_header', $data).
        view('v_index', $data).
        view('v_footer', $data);
    }
    public function about()
    {
        $data['judul'] = "Halaman About";

        echo view('v_header', $data);
        echo view('v_about', $data);
        echo view('v_footer', $data);
    }
}