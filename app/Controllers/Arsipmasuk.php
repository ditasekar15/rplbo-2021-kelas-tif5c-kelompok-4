<?php

namespace App\Controllers;

use App\Models\Modelarsipmasuk;

class Arsipmasuk extends BaseController
{

    protected $arsipmasuk;
    protected $table = "suratmasuk";

    public function __construct()
    {

        //menggunakan model
        $this->arsipmasuk = new Modelarsipmasuk();
        helper('form');
    }


    public function index()
    {
        $arsipmasuk = new Modelarsipmasuk();
        $data = [
            'tampildata' => $arsipmasuk->tampildata()->getResult()
        ];

        echo view('arsipmasuk/arsipm', $data);
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

        $simpan = $this->arsipmasuk->saveArsipmasuk($data);

        session()->setFlashdata('pesan', 'Data berhasil');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->Modelarsipmasuk->hapusdata($where, 'arsipmasuk');
        redirect('arsipmasuk/index');
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
        $this->arsipmasuk->editdata($data, $id);
        session()->setFlashdata('pesan', 'Data berhasil');
        redirect('arsipmasuk/index');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['arsipmasuk'] = $this->Modelarsipmasuk->get_keyword($keyword);
    }
}
