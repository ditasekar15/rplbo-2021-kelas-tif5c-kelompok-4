<?php

namespace App\Controllers;

use App\Models\Modelarsipleges;

class Arsipleges extends BaseController
{

    protected $arsipleges;
    protected $table = "suratleges";

    public function __construct()
    {

        //menggunakan model
        $this->arsipleges = new Modelarsipleges();
        helper('form');
    }


    public function index()
    {
        $arsipleges = new Modelarsipleges();
        $data = [
            'tampildata' => $arsipleges->tampildata()->getResult()
        ];

        echo view('arsipleges/arsipl', $data);
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

        $simpan = $this->arsipleges->saveArsipleges($data);

        session()->setFlashdata('pesan', 'Data berhasil');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->Modelarsipleges->hapusdata($where, 'arsipleges');
        redirect('arsipleges/index');
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
        $this->arsipleges->editdata($data, $id);
        session()->setFlashdata('pesan', 'Data berhasil');
        redirect('arsipleges/index');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['arsipleges'] = $this->Modelarsipleges->get_keyword($keyword);
    }
}
