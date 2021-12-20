<?php

namespace App\Controllers;

use App\Models\Modelsuratkeluar;

class Suratkeluar extends BaseController
{

    protected $suratkeluar;
    protected $table = "suratkeluar";

    public function __construct()
    {

        //menggunakan model
        $this->suratkeluar = new Modelsuratkeluar();
        helper('form');
    }


    public function index()
    {
        $suratkeluar = new Modelsuratkeluar();
        $data = [
            'tampildata' => $suratkeluar->tampildata()->getResult()
        ];

        echo view('suratkeluar/suratk', $data);
    }

    public function save()
    {


        $nosurat = $this->request->getPost('nosurat');
        $perihal = $this->request->getPost('perihal');
        $kepada = $this->request->getPost('kepada');
        $isi = $this->request->getPost('isi');
        $tanggal = $this->request->getPost('tanggal');
        $file = $this->request->getFile('file');
        $file->move(ROOTPATH . 'public/uploads');

        $data = [

            'nosurat' => $nosurat,
            'perihal' => $perihal,
            'isi' => $isi,
            'tanggal' => $tanggal,
            'kepada' => $kepada,
            'file' => $file->getName(),


        ];

        $simpan = $this->suratkeluar->savesuratkeluar($data);

        session()->setFlashdata('pesan', 'Data berhasil');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->Modelsuratkeluar->hapusdata($where, 'suratkeluar');
        redirect('suratkeluar/index');
    }
    public function edit($id)
    {

        $data = [
            $nosurat = $this->request->getPost('nosurat'),
            $perihal = $this->request->getPost('perihal'),
            $isi = $this->request->getPost('isi'),
            $tanggal = $this->request->getPost('tanggal'),
            $kepada = $this->request->getPost('kepada'),

        ];
        $this->suratkeluar->editdata($data, $id);
        session()->setFlashdata('pesan', 'Data berhasil');
        redirect('suratkeluar/index');
    }
}
