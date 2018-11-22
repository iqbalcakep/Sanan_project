<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getAI(){
		$this->db->select_max('id_admin');
		$this->db->from('sanan_admin');
		$q = $this->db->get();
		if($q->num_rows()>0){
			return $q->result();
		}

	}

	public function getAdmin($id){
		$this->db->select('id_admin,nama_admin,username_admin,email_admin,notelp_admin,alamat_admin,foto_admin,level_admin');
		$this->db->from('sanan_admin');
		$query = $this->db->get();
	  if($query->num_rows()>0){
		  return $query->result();
	  }
	}

	public function addAdmin($id,$id_baru){
		$username = $this->input->post('username');
		$password = MD5($username);
		$data = array('id_admin'=>$id_baru,'nama' => $this->input->post('nama'), 'alamat_admin' => $this->input->post('alamat'),'username_admin' => $this->input->post('username') ,
		'email' => $this->input->post('email_admin'),'notelp' => $this->input->post('notelp'),'level_admin'=>'admin','foto_admin' => 'img.jpg','password' => $password);
        $this->db->insert('sanan_admin', $data);
	}

	public function deleteAdmin($id){
		$this->db->where('$id_admin',$id);
		$this->db->where('level_admin !=','developer');
	   $this->db->delete('sanan_admin');
	}

	public function editAdmin($id){
		$data = array('nama_admin' => $this->input->post('nama'), 'alamat_admin' => $this->input->post('alamat'),'username_admin' => $this->input->post('username') ,
		'email_admin' => $this->input->post('email'),'notelp_admin' => $this->input->post('notelp'));
		$this->db->where('id_admin',$id);
		$this->db->update('sanan_admin', $data);
	}

	public function editFoto($id,$img){
		$data = array('foto_admin' => $img);
		$this->db->where('id_admin',$id);
		$this->db->update('sanan_admin', $data);
	}

        
}

/* End of file Organisasi_model.php */
/* Location: ./application/models/Organisasi_model.php */