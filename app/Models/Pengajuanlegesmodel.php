<?php


namespace App\Models;

use CodeIgniter\Model;

class Pengajuanlegesmodel extends Model
{

    protected $table = 'pengajuleges';

    //untuk menampilkan data ke halaman pengajuan surat leges
    public function getdata()
    {
        $builder = $this->db->table('pengajuleges');
        return $builder->get();
    }


    public function saveLeges($data)
    {
        $query = $this->db->table('pengajuleges')->insert($data);
        return $query;
    }

    public function download($id)
    {
        $query = $this->db->table('files', array('id' => $id));
        return $query;
    }
}
