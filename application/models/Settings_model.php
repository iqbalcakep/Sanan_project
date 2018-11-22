<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings_model extends CI_Model
{
    public function select_pembeli($id){
        $this->db->select('*');
        $this->db->from('sanan_pembeli');
        $this->db->where('id_pembeli',$id);
        $q = $this->db->get();
		if($q->num_rows()==1){
			return $q->result();
		}else{
			return false;
		}
    }

    public function select_alamat($id){
        $this->db->select('*');
        $this->db->from('sanan_alamat_pengiriman');
        $this->db->where('id_pembeli',$id);
        $q = $this->db->get();
		if($q->num_rows()>=1){
			return $q->result();
		}else{
			return false;
		}
    }

    public function updateAkun($id)
    {
        
        $object = array(
            'nama_pembeli' => $this->input->post('nama'),
            'username_pembeli' => $this->input->post('username'),
            'jenis_kelamin_pembeli' => $this->input->post('jenis_kelamin'),
            'email_pembeli' => $this->input->post('email'),
            'nomor_telepon_pembeli' => $this->input->post('nomor_telepon')
        );

        $this->db->where('id_pembeli', $id);
        $this->db->update('sanan_pembeli', $object);
    }

}