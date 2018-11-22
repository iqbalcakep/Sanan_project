<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy extends CI_Controller {

	public function index()
	{
		$this->load->model('Kategori_model');
		$data['kategori'] = $this->Kategori_model->menu();
		$this->load->view('privacy',$data);
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */