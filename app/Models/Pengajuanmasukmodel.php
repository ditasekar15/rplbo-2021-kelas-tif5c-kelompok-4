<?php


namespace App\Models;

use CodeIgniter\Model;

class Pengajuanmasukmodel extends Model
{

    protected $table = 'pengajusuratm';

    //untuk menampilkan data ke halaman pengajuan surat leges
    public function getdata()
    {
        $builder = $this->db->table('pengajusuratm');
        return $builder->get();
    }


    public function saveMasuk($data)
    {
        $query = $this->db->table('pengajusuratm')->insert($data);
        return $query;
    }

    public function download($id)
    {
        $query = $this->db->table('files', array('id' => $id));
        return $query;
    }
}
