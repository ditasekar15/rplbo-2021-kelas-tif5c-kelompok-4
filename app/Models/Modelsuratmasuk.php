<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelsuratmasuk extends Model
{
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        return $this->db->table('suratmasuk')->get();
    }

    public function saveSuratmasuk($data)
    {
        $query = $this->db->table('suratmasuk')->insert($data);
        return $query;
    }

    public function editdata($data, $id)
    {
        return $this->db->table('suratmasuk')->update($data, array('id' => $id));
    }
}
