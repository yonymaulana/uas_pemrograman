<?php

namespace App\Controllers;
use Config\Services;
use App\Models\Masjid_model;

class Masjid extends BaseController
{
    public function index()
    {
        $data = [
            'location'     => 'masjid'
        ];

        return view('masjid', $data);
    }

    public function data_masjid_json(){  
        $m_masjid        = new Masjid_model();
        $rs = $m_masjid->data_masjid_json();
        $data = array();
		$no = 1;
		
		foreach($rs as $r) {	
		$id = $r->id;  
		$nama_masjid= $r->nama_masjid;
		$luas_tanah= $r->luas_tanah;
		$luas_bangunan= $r->luas_bangunan;
		$daya_tampung= $r->daya_tampung;
		$tgl_resmi= $r->tgl_resmi;
		$alamat= $r->alamat;
		$provinsi= $r->provinsi	;
		$kategori= $r->kategori;
		$tipologi= $r->tipologi;
		$tanggal_masuk= $r->tanggal_masuk	;

        $onclick = "return confirm('Anda Yakin Ingin Menghapus Data Ini ?')";

		$btn = '<a  href="'.base_url().'/masjid/edit/'.$id.'" data-toggle="tooltip" 
                data-placement="top" title="" data-original-title="Edit">
                <i class="bi bi-pencil text-success" >Edit</i></a> ||
				<a href="'.base_url().'/masjid/delete/'.$id.'" data-toggle="tooltip" 
                data-placement="top" title="" data-original-title="Delete" 
                onclick="'.$onclick.'"><i class="bi bi-trash text-danger">Delete</i>
                </a>
				';
			 $data[] = array(
				$no,
                $nama_masjid,
                $luas_tanah,
                $luas_bangunan,
                $daya_tampung,
                $tgl_resmi,
				$alamat,
				$provinsi,
				$kategori,
				$tipologi,
				$tanggal_masuk,
				$btn
			 );
			 $no++;
		}

		$output = array(
			   "data" => $data
		  );
		echo json_encode($output);
	}

    public function add()
	{
        $m_masjid        = new Masjid_model();
		$data = [
			'location'    => 'masjid',
			'opt_provinsi'   => $m_masjid->opt_provinsi(),
			'opt_kategori'   => $m_masjid->opt_kategori(),
			'opt_tipologi'   => $m_masjid->opt_tipologi()
		];
		return view('masjid_add', $data);
	}

    public function pro_add()
	{
        $m_masjid        = new Masjid_model();
		$data = [
			'id' => $this->request->getPost('id'),
			'nama_masjid' => $this->request->getPost('nama_masjid'),
			'luas_tanah' => $this->request->getPost('luas_tanah'),
			'luas_bangunan' => $this->request->getPost('luas_bangunan'),
			'daya_tampung' => $this->request->getPost('daya_tampung'),
			'tgl_resmi' => $this->request->getPost('tgl_resmi'),
			'alamat' => $this->request->getPost('alamat'),
			'provinsi' => $this->request->getPost('provinsi'),
			'kategori' => $this->request->getPost('kategori'),
			'tipologi' => $this->request->getPost('tipologi'),
			'tanggal_masuk' => date('Y-m-d')
		];

		$sqlinsert = $m_masjid->pro_add($data);
        $session = \Config\Services::session();
		$session->setFlashdata('sukses', 'Data telah ditambah');
		return redirect()->to(base_url('masjid'));
	}


	public function edit($id)
	{
        $m_masjid        = new Masjid_model();
		$masjid = $m_masjid->masjid_update($id);
		$data = [
			'location'    => 'masjid',
			'masjid'    => $masjid,
			'opt_provinsi'   => $m_masjid->opt_provinsi(),
			'opt_kategori'   => $m_masjid->opt_kategori(),
			'opt_tipologi'   => $m_masjid->opt_tipologi()
		];
		return view('masjid_edit', $data);
	}


	public function pro_edit()
	{
        $m_masjid        = new Masjid_model();
		$data_update= [
			'id' => $this->request->getPost('id'),
			'nama_masjid' => $this->request->getPost('nama_masjid'),
			'luas_tanah' => $this->request->getPost('luas_tanah'),
			'luas_bangunan' => $this->request->getPost('luas_bangunan'),
			'daya_tampung' => $this->request->getPost('daya_tampung'),
			'tgl_resmi' => $this->request->getPost('tgl_resmi'),
			'alamat' => $this->request->getPost('alamat'),
			'provinsi' => $this->request->getPost('provinsi'),
			'kategori' => $this->request->getPost('kategori'),
			'tipologi' => $this->request->getPost('tipologi'),
			'tanggal_masuk' => date('Y-m-d')
		];

		$sqlupdate = $m_masjid->pro_update($data_update);
        $session = \Config\Services::session();
		$session->setFlashdata('sukses', 'Data telah diubah');
		return redirect()->to(base_url('masjid'));
	}


	public function delete($id)
	{
       
        $m_masjid        = new Masjid_model();
		$data              = [ 'id' => $id ];
		$delete = $m_masjid->delete($data);
        $session = \Config\Services::session();
		$session->setFlashdata('sukses', 'Data Berhasil Dihapus');
		return redirect()->to(base_url('masjid'));
	}
}