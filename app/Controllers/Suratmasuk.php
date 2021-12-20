<?php

namespace App\Controllers;

use App\Models\Modelsuratmasuk;

class Suratmasuk extends BaseController
{

    protected $suratmasuk;
    protected $table = "suratmasuk";

    public function __construct()
    {

        //menggunakan model
        $this->suratmasuk = new Modelsuratmasuk();
        helper('form');
    }


    public function index()
    {
        $suratmasuk = new Modelsuratmasuk();
        $data = [
            'tampildata' => $suratmasuk->tampildata()->getResult()
        ];

        echo view('suratmasuk/suratm', $data);
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

        $simpan = $this->suratmasuk->saveSuratmasuk($data);

        session()->setFlashdata('pesan', 'Data berhasil');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->Modelsuratmasuk->hapusdata($where, 'suratmasuk');
        redirect('Suratmasuk/index');
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
        $this->suratmasuk->editdata($data, $id);
        session()->setFlashdata('pesan', 'Data berhasil');
        redirect('suratmasuk/index');
    }
}
