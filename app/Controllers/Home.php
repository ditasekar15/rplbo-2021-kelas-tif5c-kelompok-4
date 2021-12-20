<?php

namespace App\Controllers;

use App\Models\Modelhome;

class Home extends BaseController
{
    public function __construct()
    {
        $this->Modelhome = new Modelhome();
    }
    public function index()
    {
        $data = array(
            'title' => 'Home',
            'tot_suratmasuk'    => $this->Modelhome->tot_suratmasuk(),
            'tot_suratkeluar'    => $this->Modelhome->tot_suratkeluar(),
            'tot_suratleges'    => $this->Modelhome->tot_suratleges(),
            'tot_user'    => $this->Modelhome->tot_user(),
            'tot_pengajuleges'    => $this->Modelhome->tot_pengajuleges(),
            'tot_pengajumasuk'    => $this->Modelhome->tot_pengajumasuk(),
            'tot_terimaleges'    => $this->Modelhome->tot_terimaleges(),
            'tot_terimamasuk'    => $this->Modelhome->tot_terimamasuk(),

        );
        return view('home', $data);
    }
}
