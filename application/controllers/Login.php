<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		
		
	}

	public function index()
	{
		if($this->session->userdata('login')) {
		redirect('home','refresh');
		}else{
			$this->load->view('login');
		}
	}

	//Bagian Login

	public function cekLogin()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required|callback_cekDB');
		if ($this->form_validation->run() == FALSE) {
			$this->form_validation->set_message('cekLogin', "Login Gagal, Silahkan Daftar Terlebih dahulu");
			$this->load->view('login');
		} else {
			$messge = array('message' => 'LOGIN BERHASIL','class' => 'alert alert-success fade in');
			$this->session->set_flashdata('sukses_login', $messge);
			redirect('Home','refresh');
		}
	}

	public function cekDB($password)
	{
		$username = $this->input->post('username');
		$hasil = $this->login_model->loginuser($username,$password);
		if($hasil){
			$sess_arr = array();
			foreach ($hasil as $row) {
				$sess_arr = array(
					'id' => $row['id_pembeli'],
					'username' => $row['username_pembeli']
				);
				$this->session->set_userdata('login',$sess_arr);
			}
			return true;
		}else{
			$this->form_validation->set_message('cekDB', "Username/Password Salah");
			return false;
		}

	}

	//bagian Register

	public function register(){
		$this->form_validation->set_rules('nama','nama','trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');	
		$this->form_validation->set_rules('cpassword', 'cpassword', 'trim|required|callback_cekPassword');
		$this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','trim|required');
		$this->form_validation->set_rules('nomer_telepon','nomer_telepon','trim|required');
		$this->form_validation->set_rules('email','email','trim|required|callback_cekEmail');
		$this->form_validation->set_rules('username', 'username', 'trim|required|callback_cekUsername');
		if ($this->form_validation->run() == FALSE) {
			$this->form_validation->set_message('register', "Pendaftaran Gagal, Mohon Pastikan data sudah benar");
			$this->load->view('login');
		} else {
			$this->login_model->insert();
			$messge = array('message' => 'PENDAFTARAN BERHASIL','class' => 'alert alert-success fade in');
			$this->session->set_flashdata('sukses_daftar', $messge);
		
			redirect('login','refresh');
		}
	}

	public function cekUsername($username)
	{
		$hasil = $this->login_model->ambilUsername($username);
		if($hasil){
			$this->form_validation->set_message('cekUsername',"Username Sudah Ada");
			return false;
		}else{

			return true;
		}

	}
	public function cekEmail($email)
	{
		$hasil = $this->login_model->ambilEmail($email);
		if($hasil){
			$this->form_validation->set_message('cekEmail',"Email Sudah Ada");
			return false;
		}else{

			return true;
		}

	}

	public function cekPassword($cpass)
	{
		$password = $this->input->post('password');
		if($cpass!=$password){
			$this->form_validation->set_message('cekPassword',"Password Tidak sama");
			return false;
		}else{
			return true;
		}
	}

	//logout

	public function logout(){
		$this->session->unset_userdata('login');
		$this->session->sess_destroy();
		redirect('home','refresh');
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */