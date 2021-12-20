<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelsuratleges extends Model
{
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        return $this->db->table('suratleges')->get();
    }

    public function saveSuratleges($data)
    {
        $query = $this->db->table('suratleges')->insert($data);
        return $query;
    }

    public function editdata($data, $id)
    {
        return $this->db->table('suratleges')->update($data, array('id' => $id));
    }
}
