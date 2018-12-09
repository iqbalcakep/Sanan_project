<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('datatables');
		$this->load->Model('Admin/admin_model');
		
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

		$this->load->view('Admin/admin',$data);
	}
	public function getAdmin(){
		$this->datatables->select('nama_admin,username_admin,alamat_admin,email_admin,notelp_admin,level_admin,id_admin,foto_admin');
		$this->datatables->add_column('foto',"<img height='100' width='100'  src='".base_url()."assets/images/admin/$1'>'", 'foto_admin');
		$this->datatables->add_column('action', anchor('Admin/Admin/deleteAdmin/$1','Hapus',array('class'=>'btn btn-success btn-sm')), 'id_admin');
		$this->datatables->from('sanan_admin');
		return print_r($this->datatables->generate());
	
}

	public function addAdmin(){
		$hasil = $this->admin_model->getAI();
		foreach($hasil as $h){
			$id_baru = $h->id + 1;
		}
		$sessData = $this->session->userdata('masuk');
			$id = $sessData['id'];
        $this->admin_model->addAdmin($id,$id_baru);
	}

	public function deleteAdmin($id){
		$sessData = $this->session->userdata('masuk');
			$ids = $sessData['id'];
		if($ids==$id){
			$messge = array('message' => 'Maaf Anda Tidak Bisa Menghapus Dirisendiri','class' => 'alert alert-warning fade in');
			$this->session->set_flashdata('error_delete', $messge);
			redirect('Admin/Admin','refresh');
		}else{
			$this->admin_model->deleteAdmin($id);
		}
		
	}
	public function editAdmin(){
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('notelp', 'Nomor Telepon', 'required');
         
        if ($this->form_validation->run() == FALSE)
        {
			$this->form_validation->set_message('cekLogin', "Mohon Periksan Terlebih Dahulu");
			$this->load->view('Admin/editAdmin');
        }
        else
        {
			$sessData = $this->session->userdata('masuk');
			$id = $sessData['id'];
			$this->admin_model->editAdmin($id);
			redirect('Admin/dashboard','refresh');
		}
		
	}
	public function editFoto(){
		$config['upload_path']          = './assets/images/admin/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 
		$this->load->library('upload');
		$this->upload->initialize($config);
 
		if ( $this->upload->do_upload('fotoku')){
			$img=$this->upload->data('file_name');
			$sessData = $this->session->userdata('masuk');
			$id = $sessData['id'];
			$this->admin_model->editFoto($id,$img);
			redirect('Admin/dashboard','refresh');
			
		}else{
			$error = array('error' => $this->upload->display_errors());
			
		}
	}
		
	
}
