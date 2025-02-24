<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PegawaiController extends BaseController
{
    protected $modelPegawai;

    public function __construct()
    {
        $this->modelPegawai = new PegawaiModel();
    }

    public function index()
    {
        $data['pegawai'] = $this->modelPegawai->findAll();
        return view('pegawai/index', $data);
    }

    public function show($id)
    {
        //
    }

    // untuk menampilkan form tambah data   
    public function create()
    {
        return view('pegawai/create');
    }

    // untuk menyimpan data
    public function store()
    {
        $data = [
            'nama_pegawai' => $this->request->getPost('nama_pegawai'),
            'deskripsi_pegawai' => $this->request->getPost('deskripsi_pegawai'),
        ];

        $this->modelPegawai->save($data);
        return redirect()->to('pegawai');
    }

    public function edit($id)
    {
        // kalau findAll kan menampikan semua kalau find(id) itu menampilkan ID nya
        $data['pegawai'] = $this->modelPegawai->find($id);
        return view('pegawai/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'id' => $id,
            'nama_pegawai' => $this->request->getPost('nama_pegawai'),
            'deskripsi_pegawai' => $this->request->getPost('deskripsi_pegawai'),
        ];

        $this->modelPegawai->save($data);
        return redirect()->to('pegawai');
    }

    public function delete($id)
    {
        $this->modelPegawai->delete($id);
        return redirect()->to('pegawai');
    }
}
