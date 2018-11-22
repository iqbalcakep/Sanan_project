<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}


	public function getAdmin($id){
		$this->db->select('id_admin,nama_admin,password_admin,username_admin,email_admin,notelp_admin,alamat_admin,foto_admin');
		$this->db->from('sanan_admin');
		$this->db->where('id_admin',$id);
		$query = $this->db->get();
	  if($query->num_rows()>0){
		  return $query->result_array();
	  }
	}

	public function addAdmin($id,$id_baru){
		$username = $this->input->post('username_admin');
		$password = MD5($username);
		$data = array('id_admin'=>$id_baru,'nama_admin' => $this->input->post('nama_admin'), 'alamat_admin' => $this->input->post('alamat_admin'),'username_admin' => $this->input->post('username_admin') ,
		'email_admin' => $this->input->post('email_admin'),'notelp_admin' => $this->input->post('notelp_admin'),'level_admin'=>'admin','foto_admin' => 'img.jpg','password' => $password);
        $this->db->insert('sanan_admin', $data);
	}

	public function deleteAdmin(){
		$id = $this->input->post('username_admin');
		$this->db->where('username_admin',$id);
	   $this->db->delete('sanan_admin');
	}

        
}

/* End of file Organisasi_model.php */
/* Location: ./application/models/Organisasi_model.php */