<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapororder extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	
        $this->load->library('datatables');
        $this->load->Model('Admin/order_model');
	
		
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

		$this->load->view('Admin/lapororder',$data);
    }
    
    
        function json(){
         
			$this->datatables->select('tb_order.id_order,tb_customer.nama_lengkap,tb_iklan.judul,tb_order.tgl_order,tb_order.status_order');
	
            $this->datatables->from('tb_order');
            $this->datatables->join('tb_customer', 'tb_order.id_customer = tb_customer.id_customer');
            $this->datatables->join('tb_iklan', 'tb_order.id_iklan = tb_iklan.id_iklan');
    
            return print_r($this->datatables->generate());
        
	}

	function detail(){
		$tgl1 = $this->input->post('tgl1');
		$tgl2 = $this->input->post('tgl2');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		redirect('Admin/Lapororder/cetak/'.$tgl1.'/'.$tgl2.'/'.$bulan.'/'.$tahun,'refresh');

	}


	
	public function cetak($tgl1,$tgl2,$bulan,$tahun){
		include_once APPPATH . '/third_party/fpdf.php';
		$hasil = 0;
		$pdf = new FPDF('l','mm','A5');
        
        $pdf->AddPage();
        
        $pdf->SetFont('Arial','B',16);
        
        $pdf->Cell(190,7,'LAPORAN TRANSAKSI BULANAN',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'JPI COMPANY',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,5,'Id Order',1,0);
		$pdf->Cell(40,5,'Customer',1,0);
		$pdf->Cell(40,5,'Iklan',1,0);
		$pdf->Cell(40,5,'Tanggal Order',1,0);
        $pdf->Cell(27,5,'Status Order',1,1);
        $pdf->SetFont('Arial','',10);
		$barang = $this->order_model->getPesananDetail($tgl1,$tgl2,$bulan,$tahun);
		if(!is_array($barang)){
			$pdf->Cell(27,5,$barang,1,1);
		}else{
        foreach ($barang as $row){
			$pdf->Cell(20,5,$row->id_order,1,0);
			$pdf->Cell(40,5,$row->nama_lengkap,1,0);
			$pdf->Cell(40,5,$row->judul,1,0);
            $pdf->Cell(40,5,$row->tgl_order,1,0);
            $pdf->Cell(27,5,$row->status_order,1,1); 	
		}
	}
		$total = $this->order_model->getJumlah($tgl1,$tgl2,$bulan,$tahun);
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
