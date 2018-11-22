<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Login extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->Model('Admin/user_model');
		}
	
		public function index()
		{
			$this->load->view('Admin/login_view');
		}
	
	

	public function cekLogin()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required|callback_cekDb');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Admin/login_view');
		} else {
			redirect('Admin/dashboard','refresh');
		}
	}

	public function cekDb($password)
	{
		$username = $this->input->post('username');
		$hasil = $this->user_model->login($username,$password);
		if($hasil){
			$sess_arr = array();
			foreach ($hasil as $row) {
				$sess_arr = array(
					'id' => $row['id_admin'],
					'username' => $row['username_admin'],
					'level' => $row['level_admin'],
					'foto' =>  $row['foto_admin']
				);
				$this->session->set_userdata('masuk',$sess_arr);
			}
			
			return true;
		}else{
			$this->form_validation->set_message('cekDb', "Login Gagal");
			return false;
		}

	}

	public function logout()
	{
		$this->session->unset_userdata('masuk');
		$this->session->sess_destroy();
		redirect('Admin/login','refresh');
	}

	public function cekUsername($username)
	{
		$hasil = $this->user_model->ambilUsername($username);
		if($hasil){
			$this->form_validation->set_message('cekUsername',"Username Sudah Ada");
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
}
	
	/* End of file login.php */
	/* Location: ./application/controllers/login.php */

 ?>