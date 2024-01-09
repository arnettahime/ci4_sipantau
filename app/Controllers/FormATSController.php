<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class FormATSController extends Controller
{
    public function index()
    {
        // Tampilkan halaman formulir
        return view('formats/form_ats_page');
    }

    public function processForm()
    {
        // Logika pemrosesan formulir akan ditangani di sini
        // Misalnya, menyimpan data ke database atau mengirim email

        // Redirect atau tampilkan halaman konfirmasi
        return redirect()->to('/formats/confirmation');
    }
}
