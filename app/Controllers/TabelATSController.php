<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class TabelATSController extends Controller
{
    public function index()
    {
        // Tampilkan halaman tabel ATS
        return view('tabel_ats/tabel_ats_page');
    }

    public function processForm()
    {
        return redirect()->to('/tabel_ats/confirmation');
    }
}
