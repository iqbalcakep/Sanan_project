<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->Model('Admin/dashboard_model');
	
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$sessData = $this->session->userdata('masuk');
		$id = $sessData['id'];
		$data['username'] = $sessData['username'];
		$data['level'] = $sessData['level'];
		$data['foto'] = $sessData['foto'];
	if($this->session->userdata('masuk')){
		
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
	$data['admin'] = $this->dashboard_model->getAdmin($id);
	$this->load->view('Admin/dashboard',$data);
		
	}

	public function editAdmin(){
		$sessData = $this->session->userdata('masuk');
		$id = $sessData['id'];
		$data['username'] = $sessData['username'];
		$data['level'] = $sessData['level'];
		$data['foto'] = $sessData['foto'];
		$data['admin'] = $this->dashboard_model->getAdmin($id);
		$this->load->view('Admin/editAdmin',$data);
	}
}
