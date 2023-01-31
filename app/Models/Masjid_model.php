<?php

namespace App\Models;

use CodeIgniter\Model;

class Masjid_model extends Model
{
    protected $table              = 'tab_masjid';
    protected $primaryKey         = 'id';

    public function data_masjid_json(){ 
		$query = $this->db->query("select a.id,a.nama_masjid,a.luas_tanah,a.luas_bangunan,
		a.daya_tampung,a.tgl_resmi,a.alamat,b.provinsi,c.kategori,
		d.tipologi,a.tanggal_masuk from tab_masjid as a 
		left join tab_provinsi as b on a.provinsi = b.id
		left join tab_kategori as c on a.kategori = c.id
		left join tab_tipologi as d on a.tipologi = d.id");
	    return $query->getResult();
	}


	public function pro_add($data)
	{
		$builder = $this->db->table('tab_masjid');
		$builder->insert($data);
	}

	public function masjid_update($id)
	{
		$query = $this->db->query("select * from tab_masjid where id = '$id' ");
		return $query->getResult();
	}

	public function pro_update($data_update)
	{
		$builder = $this->db->table('tab_masjid');
		$builder->where('id', $data_update['id']);
		$builder->update($data_update);
	}

	public function opt_provinsi()
	{
		$query = $this->db->query("select * from tab_provinsi");
		return $query->getResult();
	}

	public function opt_kategori()
	{
		$query = $this->db->query("select * from tab_kategori");
		return $query->getResult();
	}

	public function opt_tipologi()
	{
		$query = $this->db->query("select * from tab_tipologi");
		return $query->getResult();
	}

}