<?php

namespace App\Models;

use CodeIgniter\Model;

class Dashboard_model extends Model
{
	
    public function dashboard_tipologi(){ 
		$query = $this->db->query("select tipologi ,count(id) as jumlah_tipologi from tab_tipologi");
	    return $query->getRowArray();
	}
	public function dashboard_masjid(){ 
		$query = $this->db->query("SELECT kategori, count(id) as jumlah_masjid from tab_masjid where kategori = '1'");
	    return $query->getRowArray();
	}
	public function dashboard_kategori(){ 
		$query = $this->db->query("select kategori ,count(id) as jumlah_kategori from tab_kategori");
	    return $query->getRowArray();
	}
	public function dashboard_musholla(){ 
		$query = $this->db->query("SELECT kategori, count(id) as jumlah_musholla from tab_masjid where kategori = '2'");
	    return $query->getRowArray();
	}
}
