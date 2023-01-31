<?php

namespace App\Controllers;
use Config\Services;
use App\Models\Grafik_model;

class Grafik_tglresmi extends BaseController
{
    public function index()
    {
        $data = [
            'location'     => 'grafik_tglresmi'
        ];

        return view('grafik_tglresmi', $data);
    }

    public function grafik_tanggalresmi_json(){  
        $m_grafik        = new Grafik_model();
        $rs = $m_grafik->grafik_tanggalresmi_json();
        $data = array();
		$no = 1;
		
		foreach($rs as $r) {	
		$tgl_resmi = $r->tgl_resmi;  
		$jumlah = $r->jumlah;
		
			 $data[] = array(
				"tgl_resmi" => $tgl_resmi,
                "jumlah" => $jumlah
			 );
			 $no++;
		}

		$output = array(
			   "data" => $data
		  );
		echo json_encode($data);
	}


}