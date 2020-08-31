<?php

namespace App\Models;

use CodeIgniter\Model;

class M_mahasiswa extends Model
{
    protected $table      = 'tb_mahasiswa';
    protected $primaryKey = 'nim';
    protected $useTimestamps = true;
}
