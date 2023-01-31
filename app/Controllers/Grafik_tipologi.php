<?php

namespace App\Controllers;
use Config\Services;
use App\Models\Grafik_model;

class Grafik_tipologi extends BaseController
{
    public function index()
    {
        $data = [
            'location'     => 'grafik_tipologi'
        ];

        return view('grafik_tipologi', $data);
    }

    public function grafik_tipologi_json(){  
        $m_grafik        = new Grafik_model();
        $rs = $m_grafik->grafik_tipologi_json();
        $data = array();
		$no = 1;
		
		foreach($rs as $r) {	
		$tipologi = $r->tipologi;  
		$jumlah_masjid = $r->jumlah_masjid;
		
			 $data[] = array(
				"tipologi" => $tipologi,
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