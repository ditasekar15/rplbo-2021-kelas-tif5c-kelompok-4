<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelhome extends Model
{
    public function tot_suratmasuk()
    {
        return $this->db->table('suratmasuk')->countAll();
    }

    public function tot_suratkeluar()
    {
        return $this->db->table('suratkeluar')->countAll();
    }

    public function tot_suratleges()
    {
        return $this->db->table('suratleges')->countAll();
    }
    public function tot_user()
    {
        return $this->db->table('users')->countAll();
    }

    public function tot_pengajuleges()
    {
        return $this->db->table('pengajuleges')->countAll();
    }

    public function tot_pengajumasuk()
    {
        return $this->db->table('pengajusuratm')->countAll();
    }

    public function tot_terimaleges()
    {
        return $this->db->table('tandaterimaleges')->countAll();
    }

    public function tot_terimamasuk()
    {
        return $this->db->table('tandaterimamasuk')->countAll();
    }
}
