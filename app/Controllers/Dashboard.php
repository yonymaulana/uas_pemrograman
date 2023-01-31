<?php

namespace App\Controllers;
use Config\Services;
use App\Models\Dashboard_model;

class Dashboard extends BaseController
{
    public function index()
    {
        $m_dashboard        = new Dashboard_model();
        $data = [
            'location'     => 'dashboard',
            'total_tipologi' => $m_dashboard->dashboard_tipologi(),
            'total_masjid' => $m_dashboard->dashboard_masjid(),
            'total_kategori' => $m_dashboard->dashboard_kategori(),
            'total_musholla' => $m_dashboard->dashboard_musholla()
        ];
        return view('dashboard', $data);
    }
}