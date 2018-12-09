<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('datatables');
		$this->load->Model('Admin/produk_model');
		
	}

	public function index()
	{
		if($this->session->userdata('masuk')){
			$sessData = $this->session->userdata('masuk');
			$id = $sessData['id'];
			$data['username'] = $sessData['username'];
			$data['level'] = $sessData['level'];
			$data['foto'] = $sessData['foto'];
			$current_controller = $this->router->fetch_class();
			$this->load->library('acl');
			if(!$this->acl->is_public($current_controller))
			 {
			 	if(!$this->acl->is_allowed($current_controller, $data['level']))
			 	{
			 		redirect('Admin/login/logout','refresh');
			 	}
			 }

		}else{
			redirect('Admin/login','refresh');
		}

		$this->load->view('Admin/produk',$data);
	}
	public function getProduk(){
		$this->datatables->select('p.id_produk,p.nama_produk,k.nama_kategori,p.stok_produk,p.harga_produk,p.foto1');
		$this->datatables->add_column('foto',"<img height='100' width='100'  src='".base_url()."assets/images/produk/$1'>'", 'p.foto1');
        $this->datatables->add_column('action', anchor('Admin/Produk/editProduk/$1','Edit',array('class'=>'btn btn-success btn-sm')), 'p.id_produk');
        $this->datatables->add_column('action2', anchor('Admin/Produk/delteProduk/$1','Hapus',array('class'=>'btn btn-warning btn-sm')), 'p.id_produk');
        $this->datatables->from('sanan_produk as p');
        $this->datatables->join('sanan_kategori as k','p.id_kategori = k.id_kategori');
		return print_r($this->datatables->generate());
	
}

public function editProduk($id){
    $sessData = $this->session->userdata('masuk');
    $data['username'] = $sessData['username'];
    $data['level'] = $sessData['level'];
    $data['foto'] = $sessData['foto'];
    $data['kategori'] = $this->produk_model->getKategori();
    $data['produk'] = $this->produk_model->getProduk($id);
    $this->load->view('Admin/editProduk',$data);
}

	public function addAdmin(){
		$hasil = $this->admin_model->getAI();
		foreach($hasil as $h){
			$id_baru = $h->id + 1;
		}
		$sessData = $this->session->userdata('masuk');
			$id = $sessData['id'];
        $this->admin_model->addAdmin($id,$id_baru);
	}

	public function deleteAdmin($id){
		$sessData = $this->session->userdata('masuk');
			$ids = $sessData['id'];
		if($ids==$id){
			$messge = array('message' => 'Maaf Anda Tidak Bisa Menghapus Dirisendiri','class' => 'alert alert-warning fade in');
			$this->session->set_flashdata('error_delete', $messge);
			redirect('Admin/Admin','refresh');
		}else{
			$this->admin_model->deleteAdmin($id);
		}

    }
	
	
	public function addProduk(){
		$sessData = $this->session->userdata('masuk');
		$data['username'] = $sessData['username'];
		$data['level'] = $sessData['level'];
		$data['foto'] = $sessData['foto'];
		$data['kategori'] = $this->produk_model->getKategori();
		$this->load->view('Admin/addProduk',$data);
	}

	public function addProduka(){
		$this->form_validation->set_rules('nama','nama','trim|required');
		$this->form_validation->set_rules('id_kategori', 'id_kategori', 'trim|required');	
		$this->form_validation->set_rules('stok', 'stok', 'trim|required');	
		$this->form_validation->set_rules('harga', 'harga', 'trim|required');	
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');	
		$this->form_validation->set_rules('foto1', 'foto1', 'trim|required');	
		$this->form_validation->set_rules('foto2', 'foto2', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->form_validation->set_message('addProduka', "Gagal, Mohon Pastikan data sudah benar");
			$sessData = $this->session->userdata('masuk');
		$data['username'] = $sessData['username'];
		$data['level'] = $sessData['level'];
		$data['foto'] = $sessData['foto'];
		$data['kategori'] = $this->produk_model->getKategori();
		$this->load->view('Admin/addProduk',$data);
		} else {
			$config['upload_path']          = './assets/images/produk';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000000;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;
	 
			$this->load->library('upload');
			$this->upload->initialize($config);
			if ( $this->upload->do_upload('foto1')){
				$foto1=$this->upload->data('file_name');
				if($this->upload->do_upload('foto2')){
					$foto2=$this->upload->data('file_name');
					$this->produk_model->addProduka($foto1,$foto2);
				redirect('Admin/produk','refresh');
				}else{
					$messge = array('message' => $this->upload->display_errors(),'class' => 'alert alert-success fade in');
				$this->session->set_flashdata('error_upload', $messge);
				redirect('Admin/produk','refresh');
				
				}
			}else{
				$messge = array('message' => $this->upload->display_errors(),'class' => 'alert alert-success fade in');
				$this->session->set_flashdata('error_upload', $messge);
				redirect('Admin/produk','refresh');
				
			}
			
		}
	}

	public function editProdukData(){
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('id_kategori', 'id_kategori', 'required');
        $this->form_validation->set_rules('stok', 'Email', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
         
        if ($this->form_validation->run() == FALSE)
        {
			$this->form_validation->set_message('editProdukData', "Mohon Periksan Terlebih Dahulu");
			$this->load->view('Admin/editProduk');
        }
        else
        {
            $id=$this->input->post('id_produk');
			$this->produk_model->editProduk($id);
			redirect('Admin/Produk','refresh');
		}
		
	}
	public function editFotoa(){
		$config['upload_path']          = './assets/images/produk';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 
		$this->load->library('upload');
		$this->upload->initialize($config);
		if ( $this->upload->do_upload('foto1')){
            $id=$this->input->post('id_produk');
			$img=$this->upload->data('file_name');
			$this->produk_model->editFotoa($id,$img);
			redirect('Admin/produk','refresh');
			
		}else{
            $messge = array('message' => $this->upload->display_errors(),'class' => 'alert alert-success fade in');
			$this->session->set_flashdata('error_upload', $messge);
			redirect('Admin/produk','refresh');
			
		}
    }
    
    public function editFotob(){
		$config['upload_path']          = './assets/images/produk';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 
		$this->load->library('upload');
		$this->upload->initialize($config);
		if ( $this->upload->do_upload('foto2')){
            $id=$this->input->post('id_produk');
			$img=$this->upload->data('file_name');
			$this->produk_model->editFotob($id,$img);
			redirect('Admin/produk','refresh');
			
		}else{
            $messge = array('message' => $this->upload->display_errors(),'class' => 'alert alert-success fade in');
			$this->session->set_flashdata('error_upload', $messge);
			redirect('Admin/produk','refresh');
			
		}
	}
		
	
}
