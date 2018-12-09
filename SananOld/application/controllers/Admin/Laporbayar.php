<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporbayar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	
        $this->load->library('datatables');
        $this->load->Model('Admin/pembayaran_model');
	
		
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

		$this->load->view('Admin/laporbayar',$data);
    }
    
	function json(){
         
		$this->datatables->select('p.id_pembayaran,c.nama_lengkap,p.nama_pengirim,p.norek_pengirim,p.nominal_kiriman,b.harga');
		$this->datatables->from('tb_pembayaran as p');
		$this->datatables->join('tb_order as o', 'p.id_order = o.id_order');
		$this->datatables->join('tb_customer as c', 'o.id_customer = c.id_customer');
		$this->datatables->join('tb_biaya as b', 'o.id_biaya = b.id_biaya');
		$array = array('o.status_order' => 'Diterima');
		$this->datatables->where($array);
		return print_r($this->datatables->generate());
	
}
	function detail(){
		$tgl1 = $this->input->post('tgl1');
		$tgl2 = $this->input->post('tgl2');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		redirect('Admin/Laporbayar/cetak/'.$tgl1.'/'.$tgl2.'/'.$bulan.'/'.$tahun,'refresh');

	}


	
	public function cetak($tgl1,$tgl2,$bulan,$tahun){
		include_once APPPATH . '/third_party/fpdf.php';
		$hasil = 0;
		$pdf = new FPDF('l','mm','A5');
        
        $pdf->AddPage();
        
        $pdf->SetFont('Arial','B',16);
        
        $pdf->Cell(190,7,'LAPORAN PEMBAYARAN BULANAN',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'JPI COMPANY',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,5,'Id',1,0);
		$pdf->Cell(30,5,'Customer',1,0);
		$pdf->Cell(30,5,'Pengirim',1,0);
		$pdf->Cell(40,5,'Nomer Rekening',1,0);
		$pdf->Cell(40,5,'Nominal',1,0);
		$pdf->Cell(30,5,'harga',1,1);
        $pdf->SetFont('Arial','',10);
		$barang = $this->pembayaran_model->getPesananDetail($tgl1,$tgl2,$bulan,$tahun);
		if(!is_array($barang)){
			$pdf->Cell(27,5,$barang,1,1);
		}else{
			//$this->datatables->select('p.id_pembayaran,c.nama_lengkap,p.nama_pengirim,p.norek_pengirim,p.nominal_kiriman,b.harga');
        foreach ($barang as $row){
			$pdf->Cell(20,5,$row->id_pembayaran,1,0);
			$pdf->Cell(30,5,$row->nama_lengkap,1,0);
			$pdf->Cell(30,5,$row->nama_pengirim,1,0);
			$pdf->Cell(40,5,$row->norek_pengirim,1,0);
            $pdf->Cell(40,5,$row->nominal_kiriman,1,0);
			$pdf->Cell(30,5,$row->harga,1,1);
		}
	}
		$total = $this->pembayaran_model->getJumlah($tgl1,$tgl2,$bulan,$tahun);
		if(!is_array($total)){
			$pdf->Cell(27,5,$total,1,1);
		}else{
		foreach($total as $t){
			$hasil = $t->total;
		}
	}
		$pdf->Cell(190,7,'Total Pesanan :'.$hasil,0,1,'C');
        $pdf->Output();
	
	}


		
	
}
