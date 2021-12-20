<?php


namespace App\Models;

use CodeIgniter\Model;

class TandaterimasuratmasukModel extends Model
{

    protected $table = 'tandaterimamasuk';

    //untuk menampilkan data ke halaman pengajuan surat leges
    public function getdata()
    {
        $builder = $this->db->table('tandaterimamasuk');
        return $builder->get();
    }


    public function saveMasuk($data)
    {
        $query = $this->db->table('tandaterimamasuk')->insert($data);
        return $query;
    }

    public function download($id)
    {
        $query = $this->db->table('files', array('id' => $id));
        return $query;
    }
}
