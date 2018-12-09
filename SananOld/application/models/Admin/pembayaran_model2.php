<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class pembayaran_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function getAllPembayaran()
    {
        $query = $this->db->get('tb_pembayaran');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function save($data)
    {
      $this->db->insert('tb_pembayaran', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_pembayaran', $id);
        $this->db->delete('tb_pembayaran');
    }

    public function update($data)
    {
        $this->db->where('id_pembayaran', $data['id_pembayaran']);
        $this->db->update('tb_pembayaran', $data);
    }

    public function insertPembayaran() {
        $data = array(
                'id_pembayaran' => $this->input->post('id_pembayaran'),
                'id_order' => $this->input->post('id_order'),
                'nama_pengirim' => $this->input->post('nama_pengirim'),
                'norek_pengirim' => $this->input->post('norek_pengirim'),
                'bank_pengirim' => $this->input->post('bank_pengirim'),
                'nominal_kiriman' => $this->input->post('nominal_kiriman'),
                'tgl_transfer' => $this->input->post('tgl_transfer'),
                'bukti_pengiriman' => $this->upload->data('file_name'),
                'status_pembayaran' => 'Belum',
                );
        $this->db->insert('tb_pembayaran', $data);
    }

    public function getidorder()
    {
        $this->db->where('status_order','Diterima');
        $query = $this->db->get('tb_order');
        if($query->num_rows()>0){
            return $query->result();
        }
    }
}
        
?>