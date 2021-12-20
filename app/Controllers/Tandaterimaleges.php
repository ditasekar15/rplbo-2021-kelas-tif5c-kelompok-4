<?php

namespace App\Controllers;

// inisialisasi model yang akan digunakan
use App\Models\TandaterimalegesModel;

class Tandaterimaleges extends BaseController
{

    protected $tandaleges;
    protected $table = "tandaterimaleges";

    public function __construct()
    {

        //menggunakan model
        $this->tandaleges = new TandaterimalegesModel();
        helper('form');
    }

    public function index()
    {

        $tandaleges = new TandaterimalegesModel();
        $data['Tandaterimaleges']  = $tandaleges->getData()->getResult();
        echo view('Tandaterimaleges/Suratleges', $data);
    }


    public function save()
    {


        $nama = $this->request->getPost('nama');
        $tanggal = $this->request->getPost('tanggal');
        $keterangan = $this->request->getPost('keterangan');
        $file = $this->request->getFile('file');
        $file->move(ROOTPATH . 'public/uploads');

        $data = [
            'nama' => $nama,
            'tanggal' => $tanggal,
            'keterangan' => $keterangan,
            'file' => $file->getName(),


        ];

        $simpan = $this->tandaleges->saveMasuk($data);

        session()->setFlashdata('pesan', 'Data berhasil');
    }
    public function download($id)
    {
        helper('download');
        $tandaleges = new TandaterimalegesModel();
        $dataBerkas = $tandaleges->find($id);
        return $this->response->download('public/uploads' . $dataBerkas->tandaleges, null);
    }
}
