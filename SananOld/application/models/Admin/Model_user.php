<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_user extends CI_Model
{

	public function login($username,$password)
	{
		$this->db->select('*');
		$this->db->from('tb_customer');
		$this->db->where('username', $username);
		$this->db->where('password', MD5($password));
		$q = $this->db->get();
		if($q->num_rows()==1){
			return $q->result_array();
		}else{
			return false;
		}
	}



	public function insert() {
    	$data = array(
    			'id_customer' => $this->input->post('id_customer'),
    			'id_customer' => $this->input->post('nama_lengkap'),
    			'tgl_lahir' => $this->input->post('tgl_lahir'),
    			'username' => $this->input->post('username'),
    			'password' => $this->input->post('password'),
    			'email' => $this->input->post('email'),
    			'jenis_kealmin' => $this->input->post('jenis_kealmin'),  			
    			'alamat' => $this->input->post('alamat'),
                'notelp' => $this->input->post('notelp'),
                'foto' => $this->input->post('foto'),
    		);
    	$this->db->insert('tbl_pengunjung', $data);
    }
}