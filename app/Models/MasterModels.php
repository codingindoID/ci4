<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterModels extends Model
{
    // protected $table      = 'tb_prodi';
    // protected $primaryKey = 'id';
    protected $db;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
    }

    function getProdi()
    {
        $table = $this->db->table('tb_prodi');
        return  $table->get()->getResultArray();
        // return $this->findAll();
    }
}
