<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function login($username,$password)
	{
		$this->db->select('id_admin,username_admin,password_admin,foto_admin,level_admin');
		$this->db->from('sanan_admin');
		$this->db->where('username_admin', $username);
		$this->db->where('password_admin', MD5($password));
		$q = $this->db->get();
		if($q->num_rows()==1){
			return $q->result_array();
		}else{
			return false;
		}
	}

	public function ambilUsername($username)
	{
		$this->db->select('username_admin');
		$this->db->from('sanan_admin');
		$this->db->where('username_admin', $username);
		$q = $this->db->get();
		if($q->num_rows()==1){
			return $q->result_array();
		}else{
			return false;
		}
	}

	

}

?>
