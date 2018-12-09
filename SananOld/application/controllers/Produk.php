<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_model');
		$this->load->model('Produk_model');
	}

	public function index()
	{
		$data['kategori'] = $this->Kategori_model->menu();
		$data['produk'] = $this->Produk_model->getAllProduk();
		$this->load->view('produk',$data);
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */