<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('user/index');
    }

    public function formats()
    {
        return view('formats/form_ats_page');
    }

    public function tabel_ats()
    {
        return view('tabel_ats/tabel_ats_page');
    }
}
