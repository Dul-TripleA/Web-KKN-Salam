<?php

namespace App\Controllers;

use App\Models\PerangkatDesaModel;

class About extends BaseController
{
    protected $perangkatDesa;
    public function __construct()
    {
        $this->perangkatDesa = new PerangkatDesaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin Panel | About Panel'
        ];

        return view('admin/v_dashboard.php', $data);
    }

    public function Desa_Salam()
    {
        $data = [
            'title' => 'About Desa Salam',
            'anggota' => $this->perangkatDesa->findAll()
        ];

        return view('user/v_about', $data);
    }
}

