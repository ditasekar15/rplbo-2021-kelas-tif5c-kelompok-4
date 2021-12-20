<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelsuratkeluar extends Model
{
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        return $this->db->table('suratkeluar')->get();
    }

    public function saveSuratkeluar($data)
    {
        $query = $this->db->table('suratkeluar')->insert($data);
        return $query;
    }

    public function editdata($data, $id)
    {
        return $this->db->table('suratkeluar')->update($data, array('id' => $id));
    }
}
