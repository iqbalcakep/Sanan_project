<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kategori_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function getAllkategori()
    {
        $query = $this->db->get('tb_kategori');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function getabout()
    {
        $this->db->where('id_about','1');
        $query = $this->db->get('tb_about');
        if($query->num_rows()>0){
            return $query->result();
        }
    }
     public function getabout2()
    {
        $this->db->where('id_about','2');
        $query = $this->db->get('tb_about');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function getlokasi()
    {
        $this->db->where('id_about','3');
        $query = $this->db->get('tb_about');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function getkontak()
    {
        $this->db->where('id_about','4');
        $query = $this->db->get('tb_about');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function getprofil()
    {
        $this->db->where('id_about','5');
        $query = $this->db->get('tb_about');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function pilihSemua(){
        $this->db->select('id_biaya,harga,jml_hari,kategori,keterangan');
        $this->db->from('tb_biaya as');
        $q = $this->db->get();
		return $q->result();
		

    }

    public function pilihuser($id){
        $this->db->from('tb_customer');
        $this->db->where('id_customer',$id);
        $q = $this->db->get();
		return $q->result();
    }
}
        
?>