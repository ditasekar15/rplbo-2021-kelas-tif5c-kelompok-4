<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeluser extends Model
{
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        return $this->db->table('users')->get();
    }

    public function saveUsers($data)
    {
        $query = $this->db->table('users')->insert($data);
        return $query;
    }

    public function editdata($data, $id)
    {
        return $this->db->table('users')->update($data, array('id' => $id));
    }
}
