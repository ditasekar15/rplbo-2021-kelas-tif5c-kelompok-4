<?php

namespace App\Controllers;

// inisialisasi model yang akan digunakan
use App\Models\Pengajuanlegesmodel;

class Pengajuanleges extends BaseController
{

    protected $mleges;
    protected $table = "pengajuleges";

    public function __construct()
    {

        //menggunakan model
        $this->mleges = new Pengajuanlegesmodel();
        helper('form');
    }

    public function index()
    {

        $mleges = new Pengajuanlegesmodel();
        $data['pengajuanleges']  = $mleges->getData()->getResult();
        echo view('pengajuanleges/get', $data);
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

        $simpan = $this->mleges->saveLeges($data);

        session()->setFlashdata('pesan', 'Data berhasil');
    }
    public function download($file)
    {
        helper('download');
        $mleges = new Pengajuanlegesmodel();
        $dataBerkas = $mleges->find($file);
        return $this->response->download('public/uploads' . $dataBerkas->mleges);
    }
}
