<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produk_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function addProduka($foto1,$foto2){
		$data = array(
			'nama_produk' => $this->input->post('nama'),
			'id_kategori' => $this->input->post('id_kategori'),
			'stok_produk' => $this->input->post('stok'),
			'harga_produk' => $this->input->post('harga'),
			'deskripsi_produk' => $this->input->post('deskripsi'),
			'foto1' => $foto1,
			'foto2' => $foto2,
		);
	$this->db->insert('sanan_produk', $data);
	}

	public function getProduk($id){
		$this->db->select('p.id_produk,p.nama_produk,k.id_kategori,k.nama_kategori,p.stok_produk,p.deskripsi_produk,p.harga_produk,p.foto1,p.foto2');
        $this->db->from('sanan_produk as p');
		$this->db->join('sanan_kategori as k','p.id_kategori = k.id_kategori');
		$this->db->where('p.id_produk',$id);
		$query = $this->db->get();
	  if($query->num_rows()>0){
		  return $query->result_array();
	  }
	}

	public function getKategori(){
		$this->db->select('id_kategori,nama_kategori');
		$this->db->from('sanan_kategori');
		$query = $this->db->get();
	  if($query->num_rows()>0){
		  return $query->result_array();
	  }

	}


	public function editFotoa($id,$img){
		$data = array('foto1' => $img);
		$this->db->where('id_produk',$id);
		$this->db->update('sanan_produk', $data);
	}

	public function editFotob($id,$img){
		$data = array('foto2' => $img);
		$this->db->where('id_produk',$id);
		$this->db->update('sanan_produk', $data);
	}


	public function deleteProduk($id){
		$this->db->where('id_pembeli',$id);
	   $this->db->delete('sanan_pembeli');
	}

	public function editProduk($id){
		$data = array('nama_produk' => $this->input->post('nama'), 'id_kategori' => $this->input->post('id_kategori'),'stok_produk' => $this->input->post('stok') ,
		'harga_produk' => $this->input->post('harga'),'deskripsi_produk' => $this->input->post('deskripsi'));
		$this->db->where('id_produk',$id);
		$this->db->update('sanan_produk', $data);
	}

	
        
}

/* End of file Organisasi_model.php */
/* Location: ./application/models/Organisasi_model.php */