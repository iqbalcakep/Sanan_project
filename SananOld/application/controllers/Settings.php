<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('settings_model');
<<<<<<< HEAD
        $this->load->model('Kategori_model');
=======
       if(!$this->session->userdata('login')){
           redirect('login');
       }
>>>>>>> Admin
		
	}

	public function index()
	{
        $sessData = $this->session->userdata('login');
        $id = $sessData['id'];
		$data['kategori'] = $this->Kategori_model->menu();
        $data['pembeli'] = $this->settings_model->select_pembeli($id);
        $data['alamat'] = $this->settings_model->select_alamat($id);
		$this->load->view('settings',$data);
	}

	public function tambahalamat() {
		$sessData = $this->session->userdata('login');
        $id = $sessData['id'];

    	$data = array( 
    			'id_pembeli' => $id,
    			'nama_alamat' => $this->input->post('nama_alamat'),
    			'provinsi' => $this->input->post('provinsi'),
    			'kota' => $this->input->post('kota'),
    			'kecamatan' => $this->input->post('kecamatan'),
    			'kode_pos' => $this->input->post('kode_pos'),
    			'alamat_lengkap' => $this->input->post('alamat_lengkap'),
    			'nama_penerima' => $this->input->post('nama_penerima'),
    			'nomer_telepon_penerima' => $this->input->post('nomor_telepon_penerima')
    		);
    	$this->db->insert('sanan_alamat_pengiriman', $data);
    }

	public function update($id)
	{
		$this->load->model('settings_model');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		
		$data['pembeli'] = $this->settings_model->select_pembeli($id);

		if($this->form_validation->run() == FALSE) {
			$this->load->view('settings',$data);
		}
		else{
			$this->settings_model->UpdateAkun($id);
			echo "<script> alert('Data Berhasil Diupdate'); window.location.href='../../settings';
			</script>";
		}
	}
}