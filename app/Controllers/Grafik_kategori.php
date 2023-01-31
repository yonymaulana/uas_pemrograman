<?php

namespace App\Controllers;
use Config\Services;
use App\Models\Grafik_model;

class Grafik_kategori extends BaseController
{
    public function index()
    {
        $data = [
            'location'     => 'grafik_kategori'
        ];

        return view('grafik_kategori', $data);
    }

    public function grafik_kategori_json(){  
        $m_grafik        = new Grafik_model();
        $rs = $m_grafik->grafik_kategori_json();
        $data = array();
		$no = 1;
		
		foreach($rs as $r) {	
		$kategori = $r->kategori;  
		$jumlah_masjid = $r->jumlah_masjid;
		
			 $data[] = array(
				"kategori" => $kategori,
                "jumlah_masjid" => $jumlah_masjid
			 );
			 $no++;
		}

		$output = array(
			   "data" => $data
		  );
		echo json_encode($data);
	}


}