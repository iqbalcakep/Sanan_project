<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_Model extends CI_Model
{

	public function loginuser($username,$password)
	{
		$this->db->select('*');
		$this->db->from('sanan_pembeli');
		$this->db->where('username_pembeli', $username);
		$this->db->where('password_pembeli', MD5($password));
		$q = $this->db->get();
		if($q->num_rows()==1){
			return $q->result_array();
		}else{
			return false;
		}
	}

	public function ambilUsername($username)
	{
		$this->db->select('username_pembeli');
		$this->db->from('sanan_pembeli');
		$this->db->where('username_pembeli', $username);
		$q = $this->db->get();
		if($q->num_rows()==1){
			return $q->result_array();
		}else{
			return false;
		}
	}

	public function ambilEmail($email)
	{
		$this->db->select('email_pembeli');
		$this->db->from('sanan_pembeli');
		$this->db->where('email_pembeli', $email);
		$q = $this->db->get();
		if($q->num_rows()==1){
			return $q->result_array();
		}else{
			return false;
		}
	}


	public function insert() {
    	$data = array(
    			'nama_pembeli' => $this->input->post('nama'),
    			'username_pembeli' => $this->input->post('username'),
    			'password_pembeli' => MD5($this->input->post('password')),
    			'jenis_kelamin_pembeli' => $this->input->post('jenis_kelamin'),
    			'email_pembeli' => $this->input->post('email'),
    			'nomor_telepon_pembeli' => $this->input->post('nomer_telepon'),
    		);
    	$this->db->insert('sanan_pembeli', $data);
    }
}