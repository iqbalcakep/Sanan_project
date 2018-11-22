<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getJumlah($tgl1,$tgl2,$bulan,$tahun){
		$this->db->select('count(id_order)as total,tgl_order');
		$this->db->from('tb_order');
		$this->db->group_by('tgl_order'); 
		$this->db->where('DAY(tgl_order) BETWEEN "'.$tgl1.'" and "'.$tgl2.'"');
		$this->db->where('MONTH(tgl_order)',$bulan);
		$this->db->where('YEAR(tgl_order)',$tahun);	
		if($q = $this->db->get()){	
			return $q->result();
		}else{
			return "Total Data Kosong";
		}
     }

	public function getPesananDetail($tgl1,$tgl2,$bulan,$tahun){
		$this->db->select('tb_order.id_order,tb_customer.nama_lengkap,tb_iklan.judul,tb_order.tgl_order,tb_order.status_order');
		$this->db->from('tb_order');
		$this->db->join('tb_customer', 'tb_order.id_customer = tb_customer.id_customer');
		$this->db->join('tb_iklan', 'tb_order.id_iklan = tb_iklan.id_iklan');
		$this->db->where('DAY(tgl_order) BETWEEN "'.$tgl1.'" and "'.$tgl2.'"');
		$this->db->where('MONTH(tgl_order)',$bulan);
		$this->db->where('YEAR(tgl_order)',$tahun);
		if($q = $this->db->get()){	
			return $q->result();
		}else{
			return "Error Data Kosong";
		}

	}


	public function updateBayar($id){
		$data = array('status_order' => "Diterima");
		$this->db->where('id_order',$id);
		$this->db->update('tb_order', $data);
	}

	

        
}

/* End of file Organisasi_model.php */
/* Location: ./application/models/Organisasi_model.php */