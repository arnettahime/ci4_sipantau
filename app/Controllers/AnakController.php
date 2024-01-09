<?php

namespace App\Controllers;

use App\Models\AnakModel;

class AnakController extends BaseController
{
    public function tambah()
    {
        // Menampilkan formulir tambah data anak
        return view('user/anak/tambah');
    }

    public function simpan()
    {
        // Memproses data yang dikirim dari formulir tambah
        $anakModel = new AnakModel();
        $data = [
            'nama_anak' => $this->request->getPost('nama_anak'),
            'usia_anak' => $this->request->getPost('usia_anak'),
            'id_orangtua' => $this->request->getPost('id_orangtua'),
        ];

        // Simpan data ke database
        $anakModel->insert($data);

        // Redirect ke halaman lain setelah berhasil menyimpan
        return redirect()->to(site_url('user/anak/tambah'));
    }
}
