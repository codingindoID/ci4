<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table      = 'tb_komik';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;

    public function getKomik($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        $where = array(
            'slug'  => $slug
        );
        return $this->where($where)->first();
    }
}
