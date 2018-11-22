<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pembayaran_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getJumlah($tgl1,$tgl2,$bulan,$tahun){
		$this->db->select('count(id_pembayaran)as total,tgl_bayar');
		$this->db->from('tb_pembayaran');
		$this->db->group_by('tgl_bayar'); 
		$this->db->where('DAY(tgl_bayar) BETWEEN "'.$tgl1.'" and "'.$tgl2.'"');
		$this->db->where('MONTH(tgl_bayar)',$bulan);
		$this->db->where('YEAR(tgl_bayar)',$tahun);	
		if($q = $this->db->get()){	
			return $q->result();
		}else{
			return "Total Data Kosong";
		}
     }

	public function getPesananDetail($tgl1,$tgl2,$bulan,$tahun){
		$this->db->select('p.id_pembayaran,c.nama_lengkap,p.nama_pengirim,p.norek_pengirim,p.nominal_kiriman,b.harga');
		$this->db->from('tb_pembayaran as p');
		$this->db->join('tb_order as o', 'p.id_order = o.id_order');
		$this->db->join('tb_customer as c', 'o.id_customer = c.id_customer');
		$this->db->join('tb_biaya as b', 'o.id_biaya = b.id_biaya');
		$this->db->where('DAY(tgl_bayar) BETWEEN "'.$tgl1.'" and "'.$tgl2.'"');
		$this->db->where('MONTH(tgl_bayar)',$bulan);
		$this->db->where('YEAR(tgl_bayar)',$tahun);
		if($q = $this->db->get()){	
			return $q->result();
		}else{
			return "Error Data Kosong";
		}

	}



	public function updateBayar($id){
		$data = array('status_pembayaran' => "Lunas");
		$this->db->where('id_pembayaran',$id);
		$this->db->update('tb_pembayaran', $data);
	}

	


        
}

/* End of file Organisasi_model.php */
/* Location: ./application/models/Organisasi_model.php */