<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('datatables');
		$this->load->Model('Admin/customer_model');
		
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

		$this->load->view('Admin/customer',$data);
	}
	public function getCustomer(){
		$this->datatables->select('id_pembeli,nama_pembeli,email_pembeli,nomor_telepon_pembeli');
		$this->datatables->from('sanan_pembeli');
		return print_r($this->datatables->generate());
	
}
	public function deleteCustomer($id){
		
		$this->customer_model->deleteCustomer($id);
		
	}

	
	
}
