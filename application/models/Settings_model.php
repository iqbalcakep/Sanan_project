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

}