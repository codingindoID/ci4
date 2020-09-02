<?php

namespace App\Models;

use CodeIgniter\Model;

class M_mahasiswa extends Model
{
    //cara bawaan ci4
    protected $table      = 'tb_mahasiswa';
    protected $primaryKey = 'nim';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'alamat', 'prodi'];

    //cara manual
    // protected $db;
    // public function __construct()
    // {
    //     $this->db = \Config\Database::connect();
    // }

    function getdata()
    {
        //$this->select('nama');
        //return $this->get()->getResultArray();
        //return $this->get()->getRowArray();
        return $this->findAll();
    }

    function joinProdi()
    {
        $this->join('tb_prodi', 'tb_prodi.id=tb_mahasiswa.prodi');
        return $this->get();
    }

    function getByID($where)
    {
        $this->where($where);
        return $this->get();
    }
}
