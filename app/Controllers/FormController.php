<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class FormController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function submit()
    {
        $nama       = $this->request->getPost('nama');
        $nim        = $this->request->getPost('nim');
        $kelas      = $this->request->getPost('kelas');
        $matakuliah = $this->request->getPost('matakuliah');
        $dosen      = $this->request->getPost('dosen');
        $asisten    = $this->request->getPost('asisten');

        $data = [
            'nama'       => $nama,
            'nim'        => $nim,
            'kelas'      => $kelas,
            'matakuliah' => $matakuliah,
            'dosen'      => $dosen,
            'asisten'    => $asisten
        ];

        // Tampilkan hasil ke view hasil.php
        return view('hasil', $data);
    }
    public function process_form()
    {
        $data = [
            'nama'       => $this->request->getPost('nama'),
            'nim'        => $this->request->getPost('nim'),
            'kelas'      => $this->request->getPost('kelas'),
            'matakuliah' => $this->request->getPost('matakuliah'),
            'dosen'      => $this->request->getPost('dosen'),
            'asisten'    => $this->request->getPost('asisten')
        ];

        return view('hasil', $data);
    }
}