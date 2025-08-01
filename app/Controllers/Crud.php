<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Crud extends BaseController
{
    protected $db;
    public function __construct()
    {
        $this->db = new MahasiswaModel();
    }
    public function index()
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->findAll();

        return view('crud/index', $data);
    }
    public function tambah()
    {
        log_message('debug', 'METHOD TAMBAH DIJALANKAN');
        if ($this->request->getMethod() === 'post') {

            $data = [
                'nim' => $this->request->getPost('nim'),
                'nama' => $this->request->getPost('nama'),
                'prodi' => $this->request->getPost('prodi'),
                'universitas' => $this->request->getPost('universitas'),
                'no_hp' => $this->request->getPost('no_hp'),
            ];

            $this->db->insert($data);

            return redirect()->to(base_url('/crud'));
        } else {
            return view('crud/tambah');
        }
    }
    public function simpan()
    {
        $data = [
            'nama'       => $this->request->getPost('nama'),
            'nim'        => $this->request->getPost('nim'),
            'prodi'      => $this->request->getPost('prodi'),
            'universitas' => $this->request->getPost('universitas'),
            'no_hp'      => $this->request->getPost('no_hp'),
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('tb_mahasiswa');
        $builder->insert($data);

        return redirect()->to('/crud')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($nim)
    {
        $data = $this->db->where('nim', $nim)->first();

        if (!$data) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data dengan NIM $nim tidak ditemukan");
        }

        return view('crud/edit', ['edit' => $data]);
    }
    public function update()
    {
        $oldNim = $this->request->getPost('old_nim');  // disimpan sebagai hidden input di form
        $data = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'prodi' => $this->request->getPost('prodi'),
            'universitas' => $this->request->getPost('universitas'),
            'no_hp' => $this->request->getPost('no_hp'),
        ];

        $this->db->update($data, ['nim' => $oldNim]);

        return redirect()->to(base_url('/crud'));
    }
    public function delete($nim)
    {
        $this->db->where('nim', $nim)->delete();
        return redirect()->to('/crud')->with('success', 'Data berhasil dihapus.');
    }
    public function editan()
    {
        $nim = $_POST['nim'];
        $prodi = $_POST['prodi'];
        $universitas = $_POST['universitas'];
        $newNim = $_POST['newNim'];
        $newProdi = $_POST['newProdi'];
        $newUniversitas = $_POST['newUniversitas'];

        $this->db->table('tb_mahasiswa')
            ->where([
                'nim' => $nim,
                'prodi' => $prodi,
                'universitas' => $universitas
            ])
            ->set('nim', $newNim)
            ->set('prodi', $newProdi)
            ->set('universitas', $newUniversitas)
            ->update();

        return redirect()->to(base_url('/crud'));
    }
}
