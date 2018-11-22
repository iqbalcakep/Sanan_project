<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getCustomer(){
		$this->db->select('id_customer,nama_lengkap,tgl_lahir,username,password,email,jenis_kelamin,alamat,notelp,foto');
		$this->db->from('tb_customer');
		$query = $this->db->get();
	  if($query->num_rows()>0){
		  return $query->result();
	  }
	}



	public function deleteCustomer($id){
		$this->db->where('id_pembeli',$id);
	   $this->db->delete('sanan_pembeli');
	}

	
        
}

/* End of file Organisasi_model.php */
/* Location: ./application/models/Organisasi_model.php */