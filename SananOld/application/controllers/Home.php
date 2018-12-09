<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_model');
		$this->load->model('Produk_model');
	}

	public function index()
	{
		$data['kategori'] = $this->Kategori_model->menu();
		$data['produk'] = $this->Produk_model->produk();
		$this->load->view('index',$data);
	}


}

/* End of file home.php */
/* Location: ./application/controllers/home.php */