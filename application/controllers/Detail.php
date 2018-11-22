<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_model');		
		$this->load->model('Produk_model');
	}

	public function id($id)
	{
		$data['kategori'] = $this->Kategori_model->menu();
		$data['produk'] = $this->Produk_model->produkID($id);
		$data['produkterkait'] = $this->Produk_model->produkterkait();
		$this->load->view('detail_produk',$data);
	}
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */