<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('settings_model');
       
		
	}

	public function index()
	{
        $sessData = $this->session->userdata('login');
        $id = $sessData['id'];
        $data['alamat'] = $this->settings_model->select_alamat($id);
        $data['pembeli'] = $this->settings_model->select_pembeli($id);
		$this->load->view('settings',$data);
	}

}