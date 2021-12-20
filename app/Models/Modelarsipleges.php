<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelarsipleges extends Model
{
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        return $this->db->table('suratleges')->get();
    }

    public function saveArsipleges($data)
    {
        $query = $this->db->table('suratleges')->insert($data);
        return $query;
    }

    public function editdata($data, $id)
    {
        return $this->db->table('suratleges')->update($data, array('id' => $id));
    }
}
