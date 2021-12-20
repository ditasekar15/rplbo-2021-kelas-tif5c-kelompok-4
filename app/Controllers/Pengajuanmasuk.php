<?php

namespace App\Controllers;

// inisialisasi model yang akan digunakan
use App\Models\Pengajuanmasukmodel;

class Pengajuanmasuk extends BaseController
{

    protected $msurat;
    protected $table = "pengajusuratm";

    public function __construct()
    {

        //menggunakan model
        $this->msurat = new Pengajuanmasukmodel();
        helper('form');
    }

    public function index()
    {

        $msurat = new Pengajuanmasukmodel();
        $data['pengajuanmasuk']  = $msurat->getData()->getResult();
        echo view('pengajuanmasuk/get', $data);
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

        $simpan = $this->msurat->saveMasuk($data);

        session()->setFlashdata('pesan', 'Data berhasil');
    }
    public function download($id)
    {
        helper('download');
        $msurat = new Pengajuanmasukmodel();
        $dataBerkas = $msurat->find($id);
        return $this->response->download('public/uploads' . $dataBerkas->msurat, null);
    }
}
