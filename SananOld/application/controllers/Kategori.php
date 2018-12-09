<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_model');
	}

	public function index()
	{
		
	}

}

/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */