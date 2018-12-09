<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

	public function menu()
	{
		$this->db->select('*');
		$this->db->from('sanan_kategori');
		$q = $this->db->get();
		return $q->result_array();
	}
}

/* End of file Kategori_model.php */
/* Location: ./application/models/Kategori_model.php */