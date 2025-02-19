<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table            = 'pegawai';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_pegawai', 'jabatan_id', 'alamat_pegawai', 'nomor_telepon'];

    // Fungsinya ketika ingin menampilkan data pegawai dan juga menampilkan jabatannya sekaligus
    public function getPegawaiWithJabatan()
    {
        return $this->select('pegawai.*, jabatan.nama_jabatan, jabatan.deskripsi_jabatan')
            ->join('jabatan', 'jabatan_id = pegawai.jabatan_id')->findAll();
    }
}
