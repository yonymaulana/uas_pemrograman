<?php

namespace App\Models;

use CodeIgniter\Model;

class Grafik_model extends Model
{
	

    public function grafik_kategori_json(){ 
		$query = $this->db->query("select c.kategori,count(a.kategori) as jumlah_masjid from tab_masjid as a
		left join tab_kategori as c on a.kategori = c.id group by kategori");
	    return $query->getResult();
	}

	public function grafik_tipologi_json(){ 
		$query = $this->db->query("select d.tipologi,count(a.tipologi) as jumlah_masjid from tab_masjid as a
		left join tab_tipologi as d on a.tipologi = d.id group by tipologi");
	    return $query->getResult();
	}

	public function grafik_provinsi_json(){ 
		$query = $this->db->query("select b.provinsi,count(a.provinsi) as jumlah_masjid from tab_masjid as a
		left join tab_provinsi as b on a.provinsi = b.id group by provinsi");
	    return $query->getResult();
	}

	public function grafik_tanggalresmi_json(){ 
		$query = $this->db->query("select YEAR (tgl_resmi) as tgl_resmi ,count(id) as jumlah from tab_masjid group by year (tgl_resmi)");
	    return $query->getResult();
	}
   
	public function grafik_tanggaldata_json(){ 
		$query = $this->db->query("select YEAR (tanggal_masuk) as tgl_data ,count(id) as jumlah from tab_masjid group by year (tanggal_masuk)");
	    return $query->getResult();
	}
}