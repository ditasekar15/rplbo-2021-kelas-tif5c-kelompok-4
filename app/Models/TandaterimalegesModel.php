<?php


namespace App\Models;

use CodeIgniter\Model;

class TandaterimalegesModel extends Model
{

    protected $table = 'tandaterimaleges';

    //untuk menampilkan data ke halaman pengajuan surat leges
    public function getdata()
    {
        $builder = $this->db->table('tandaterimaleges');
        return $builder->get();
    }


    public function saveMasuk($data)
    {
        $query = $this->db->table('tandaterimaleges')->insert($data);
        return $query;
    }

    public function download($id)
    {
        $query = $this->db->table('files', array('id' => $id));
        return $query;
    }
}
