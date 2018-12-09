<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->library('datatables');
        $this->load->Model('Admin/order_model');
       
		
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

		$this->load->view('Admin/order',$data);
    }
    
    
        function json(){
         
			$this->datatables->select('tb_order.id_order,tb_customer.nama_lengkap,tb_iklan.judul,tb_order.tgl_order');
			$this->datatables->add_column('action', anchor('Admin/Order/konfirmasi/$1','Konfirmasi',array('class'=>'btn btn-success btn-sm')), 'tb_order.id_order');
            $this->datatables->from('tb_order');
            $this->datatables->join('tb_customer', 'tb_order.id_customer = tb_customer.id_customer');
            $this->datatables->join('tb_iklan', 'tb_order.id_iklan = tb_iklan.id_iklan');
            $this->datatables->where('status_order','belum');
            return print_r($this->datatables->generate());
        
	}

	function jsonlain(){
         
		$this->datatables->select('tb_order.id_order,tb_customer.nama_lengkap,tb_iklan.judul,tb_order.tgl_order,tb_order.status_order');
		$this->datatables->from('tb_order');
		$this->datatables->join('tb_customer', 'tb_order.id_customer = tb_customer.id_customer');
		$this->datatables->join('tb_iklan', 'tb_order.id_iklan = tb_iklan.id_iklan');
		$this->datatables->where('status_order','Diterima');
		return print_r($this->datatables->generate());
	
}



	
	function konfirmasi($id){
		$this->order_model->updateBayar($id);
		redirect('Admin/Order','refresh');
	}


		
	
}
