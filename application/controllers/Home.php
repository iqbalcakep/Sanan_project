<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function produk()
	{
		$this->load->view('produk');
	}

	public function produk2()
	{
		$this->load->view('produk2');
	}

	public function layanan()
	{
		$this->load->view('layanan');
	}

	public function detail()
	{
		$this->load->view('detail_produk');
	}

	public function pembayaran()
	{
		$this->load->view('pembayaran');
	}

	public function keranjang()
	{
		$this->load->view('keranjang');
	}

	public function tentang()
	{
		$this->load->view('tentang');
	}

	public function email()
	{
		$this->load->view('email');
	}

	public function faqs()
	{
		$this->load->view('faqs');
	}

	public function privacy()
	{
		$this->load->view('privacy');
	}

	public function login()
	{
		$this->load->view('login');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */