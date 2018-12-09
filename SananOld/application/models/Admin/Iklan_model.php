<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Iklan_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function pilihbykategori($idkat){
        $this->db->select('id_iklan,judul,lokasi,deskripsi,foto,foto2');
        $this->db->from('tb_iklan');
        $this->db->where('id_biaya',$idkat);
        $query = $this->db->get();
            return $query->result();
        
    }

    public function pilihbyid($idiklan){
        $this->db->select('i.id_iklan,i.judul,i.lokasi,i.deskripsi,i.foto,i.foto2,b.jml_hari,b.harga');
        $this->db->from('tb_iklan as i');
        $this->db->join('tb_biaya as b','i.id_biaya = b.id_biaya');
        $this->db->where('id_iklan',$idiklan);
        $query = $this->db->get();
            return $query->result();
    }


}

?>