<?php

namespace App\Controllers;

// inisialisasi model yang akan digunakan
use App\Models\TandaterimasuratmasukModel;

class Tandaterimasuratmasuk extends BaseController
{

    protected $tandasuratmasuk;
    protected $table = "tandaterimamasuk";

    public function __construct()
    {

        //menggunakan model
        $this->tandasuratmasuk = new TandaterimasuratmasukModel();
        helper('form');
    }

    public function index()
    {

        $tandasuratmasuk = new TandaterimasuratmasukModel();
        $data['tandaterimamasuk']  = $tandasuratmasuk->getData()->getResult();
        echo view('tandaterimasuratmasuk/Suratmasuk', $data);
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

        $simpan = $this->tandasuratmasuk->saveMasuk($data);

        session()->setFlashdata('pesan', 'Data berhasil');
    }
    public function download($id)
    {
        helper('download');
        $tandasuratmasuk = new TandaterimasuratmasukModel();
        $dataBerkas = $tandasuratmasuk->find($id);
        return $this->response->download('public/uploads' . $dataBerkas->tandasuratmasuk, null);
    }
}
