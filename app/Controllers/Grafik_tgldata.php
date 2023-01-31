<?php

namespace App\Controllers;
use Config\Services;
use App\Models\Grafik_model;

class Grafik_tgldata extends BaseController
{
    public function index()
    {
        $data = [
            'location'     => 'grafik_tgldata'
        ];

        return view('grafik_tgldata', $data);
    }

    public function grafik_tanggaldata_json(){  
        $m_grafik        = new Grafik_model();
        $rs = $m_grafik->grafik_tanggaldata_json();
        $data = array();
		$no = 1;
		
		foreach($rs as $r) {	
		$tgl_data = $r->tgl_data;  
		$jumlah = $r->jumlah;
		
			 $data[] = array(
				"tgl_data" => $tgl_data,
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