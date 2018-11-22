<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

	public function getAllProduk()
	{
		$query = $this->db->query("Select * from sanan_produk LIMIT 1");
		return $query->result_array();
	}
	
	public function produk()
	{
		$query = $this->db->query("Select * from sanan_produk order by id_produk desc LIMIT 4");
		return $query->result_array();
	}

	public function produkterkait()
	{
		//query nya belum
		$query = $this->db->query("Select * from sanan_produk order by id_produk asc LIMIT 4");
		return $query->result_array();
	}	

	public function produkID($id)
	{
        $query = $this->db->query("Select * from sanan_produk where id_produk='$id'");
		return $query->result_array();
	}
}

/* End of file Produk_model.php */
/* Location: ./application/models/Produk_model.php */