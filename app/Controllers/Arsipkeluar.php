<?php

namespace App\Controllers;

use App\Models\Modelarsipkeluar;

class Arsipkeluar extends BaseController
{

    protected $arsipkeluar;
    protected $table = "suratkeluar";

    public function __construct()
    {

        //menggunakan model
        $this->arsipkeluar = new Modelarsipkeluar();
        helper('form');
    }


    public function index()
    {
        $arsipkeluar = new Modelarsipkeluar();
        $data = [
            'tampildata' => $arsipkeluar->tampildata()->getResult()
        ];

        echo view('arsipkeluar/arsipk', $data);
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

        $simpan = $this->arsipkeluar->saveArsipkeluar($data);

        session()->setFlashdata('pesan', 'Data berhasil');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->Modelarsipkeluar->hapusdata($where, 'arsipkeluar');
        redirect('arsipkeluar/index');
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
        $this->arsipkeluar->editdata($data, $id);
        session()->setFlashdata('pesan', 'Data berhasil');
        redirect('arsipkeluar/index');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['arsipkeluar'] = $this->Modelarsipkeluar->get_keyword($keyword);
    }
}
