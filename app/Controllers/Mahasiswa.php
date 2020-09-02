<?php

namespace App\Controllers;

use App\Models\M_mahasiswa;
use App\Models\MasterModels;

class Mahasiswa extends BaseController
{
    protected $mhs;
    protected $master;

    public function __construct()
    {
        $this->mhs = new M_mahasiswa();
        $this->master = new MasterModels();
    }

    public function index()
    {
        //$mahasiswa = $this->mhs->findAll();

        $data['title']  = 'mahasiswa';
        //$data['mhs']    = $this->mhs->getdata();
        $data['mhs']    = $this->mhs->joinProdi()->getResultArray();
        return view('mahasiswa/index', $data);
    }

    function detail($id)
    {
        $data['mhs']    =  $this->mhs->find($id);
        $data['title']  = 'Edit Mahasiswa';
        $data['prodi']  = $this->master->getProdi();
        return view('mahasiswa/edit', $data);

        //cara CI 3 Masih bisa dipakai
        // $where = ['nim' => $id];
        // $data['title']  = 'Detil Mahasiswa';
        // $data['mhs']    = $this->mhs->getByID($where)->getRowArray();
    }

    function insert()
    {
        $data = [
            'title'         => 'Tambah Mahasiswa',
            'prodi'         => $this->master->getProdi(),
            'validation'    => \Config\Services::validation()
        ];

        return view('mahasiswa/tambah', $data);
    }

    function save()
    {
        $validation =  \Config\Services::validation();
        $data = [
            'nama'      => $data = $this->request->getVar('nama'),
            'alamat'    => $data = $this->request->getVar('alamat'),
            'prodi'     => $data = $this->request->getVar('prodi')
        ];

        if (!$this->validate(
            [
                'nama' => 'required',
                'alamat' => 'required'
            ]
        )) {
            return redirect()->to('/insert_mhs')->withInput()->with('validation', $validation);
        }

        $this->mhs->save($data);
        return redirect()->to('/viewM');
    }

    function rem($id)
    {
        $where = ['nim' => $id];
        $this->mhs->where($where)->delete();
        return redirect()->to('/viewM');
    }

    function update()
    {

        $data = [
            'nama'      => $this->request->getVar('nama'),
            'alamat'    => $this->request->getVar('alamat'),
            'prodi'     => $this->request->getVar('prodi')
        ];

        $where = ['nim' => $this->request->getVar('nim')];

        $this->mhs->update($this->request->getVar('nim'), $data);

        return redirect()->to('/viewM');
    }
}
