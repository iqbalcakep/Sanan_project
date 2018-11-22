<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->library('datatables');
        $this->load->Model('Admin/pembayaran_model');
       
		
	}

	public function index()
	{
		if($this->session->userdata('masuk')){
			$sessData = $this->session->userdata('masuk');
			$id = $sessData['id'];
			$data['username'] = $sessData['username'];
			$data['level'] = $sessData['level'];
			$data['foto'] = $sessData['foto'];
			$current_controller = $this->router->fetch_class();
			$this->load->library('acl');
			if(!$this->acl->is_public($current_controller))
			 {
			 	if(!$this->acl->is_allowed($current_controller, $data['level']))
			 	{
			 		redirect('Admin/login/logout','refresh');
			 	}
			 }

		}else{
			redirect('Admin/login','refresh');
		}

		$this->load->view('Admin/pembayaran',$data);
    }
    
    
        function json(){
         
			$this->datatables->select('p.id_pembayaran,c.nama_lengkap,p.nama_pengirim,p.norek_pengirim,p.nominal_kiriman,b.harga');
			$this->datatables->add_column('foto',"<img height='100' width='100'  src='".base_url()."assets/images/$1'>'", 'p.bukti_pengiriman');
			$this->datatables->add_column('action', anchor('Admin/Pembayaran/konfirmasi/$1','Konfirmasi',array('class'=>'btn btn-success btn-sm')), 'p.id_pembayaran');
            $this->datatables->from('tb_pembayaran as p');
            $this->datatables->join('tb_order as o', 'p.id_order = o.id_order');
            $this->datatables->join('tb_customer as c', 'o.id_customer = c.id_customer');
            $this->datatables->join('tb_biaya as b', 'o.id_biaya = b.id_biaya');
            $array = array('o.status_order' => 'Diterima', 'p.status_pembayaran' => 'belum');
            $this->datatables->where($array);
            return print_r($this->datatables->generate());
        
	}

	function jsonlain(){
        $this->datatables->select('p.id_pembayaran,c.nama_lengkap,p.nama_pengirim,p.norek_pengirim,p.nominal_kiriman,b.harga,p.bukti_pengiriman');
		$this->datatables->add_column('foto',"<img height='100' width='100' src='".base_url()."assets/images/$1'>", 'p.bukti_pengiriman');
        $this->datatables->from('tb_pembayaran as p');
        $this->datatables->join('tb_order as o', 'p.id_order = o.id_order');
        $this->datatables->join('tb_customer as c', 'o.id_customer = c.id_customer');
        $this->datatables->join('tb_biaya as b', 'o.id_biaya = b.id_biaya');
        $array = array('o.status_order' => 'Diterima', 'p.status_pembayaran' => 'Lunas');
        $this->datatables->where($array);
        return print_r($this->datatables->generate());
	
}



	
	function konfirmasi($id){
		$this->pembayaran_model->updateBayar($id);
		redirect('Admin/Pembayaran','refresh');
	}


		
	
}
