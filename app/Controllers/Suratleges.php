<?php

namespace App\Controllers;

use App\Models\Modelsuratleges;

class Suratleges extends BaseController
{

    protected $suratmasuk;
    protected $table = "suratleges";

    public function __construct()
    {

        //menggunakan model
        $this->suratleges = new Modelsuratleges();
        helper('form');
    }


    public function index()
    {
        $suratleges = new Modelsuratleges();
        $data = [
            'tampildata' => $suratleges->tampildata()->getResult()
        ];

        echo view('suratleges/suratl', $data);
    }

    public function save()
    {


        $nosurat = $this->request->getPost('nosurat');
        $perihal = $this->request->getPost('perihal');
        $isi = $this->request->getPost('isi');
        $tanggal = $this->request->getPost('tanggal');
        $asalsurat = $this->request->getPost('asalsurat');
        $file = $this->request->getFile('file');
        $file->move(ROOTPATH . 'public/uploads');

        $data = [

            'nosurat' => $nosurat,
            'perihal' => $perihal,
            'isi' => $isi,
            'tanggal' => $tanggal,
            'asalsurat' => $asalsurat,
            'file' => $file->getName(),


        ];

        $simpan = $this->suratleges->saveSuratleges($data);

        session()->setFlashdata('pesan', 'Data berhasil');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->Modelsuratleges->hapusdata($where, 'suratleges');
        redirect('suratleges/index');
    }
    public function edit($id)
    {

        $data = [
            $nosurat = $this->request->getPost('nosurat'),
            $perihal = $this->request->getPost('perihal'),
            $isi = $this->request->getPost('isi'),
            $tanggal = $this->request->getPost('tanggal'),
            $asalsurat = $this->request->getPost('asalsurat'),

        ];
        $this->suratleges->editdata($data, $id);
        session()->setFlashdata('pesan', 'Data berhasil');
        redirect('suratleges/index');
    }
}
