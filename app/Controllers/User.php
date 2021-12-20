<?php

namespace App\Controllers;

use App\Models\Modeluser;

class User extends BaseController
{

    protected $users;
    protected $table = "users";

    public function __construct()
    {

        //menggunakan model
        $this->users = new Modeluser();
        helper('form');
    }


    public function index()
    {
        $users = new Modeluser();
        $data = [
            'tampildata' => $users->tampildata()->getResult()
        ];

        echo view('user/user', $data);
    }

    public function save()
    {


        $userid = $this->request->getPost('userid');
        $usernama = $this->request->getPost('usernama');
        $userpassword = $this->request->getPost('userpassword');
        $userlevelid = $this->request->getPost('userlevelid');

        $data = [

            'userid' => $userid,
            'usernama' => $usernama,
            'userpassword' => $userpassword,
            'userlevelid' => $userlevelid,


        ];

        $simpan = $this->users->saveUsers($data);

        session()->setFlashdata('pesan', 'Data berhasil');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->Modeluser->hapusdata($where, 'users');
        redirect('user/index');
    }
    public function edit($id)
    {

        $data = [
            $userid = $this->request->getPost('userid'),
            $usernama = $this->request->getPost('usernama'),
            $userpassword = $this->request->getPost('userpassword'),
            $userlevelid = $this->request->getPost('userlevelid'),

        ];
        $this->users->editdata($data, $id);
        session()->setFlashdata('pesan', 'Data berhasil');
        redirect('user/index');
    }
}
