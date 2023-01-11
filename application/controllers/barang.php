<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang extends CI_Controller {

	public function index()
	{
		$data['content'] = "v_barang";
		$this->load->model('barang_model');
		$data['data_barang']=$this->barang_model->get_barang();
		$this->load->model('kategori_model');
		$data['data_kategori']=$this->kategori_model->get_kategori();
		$this->load->view('template', $data, FALSE);
	}
public function simpan_barang()
{
	$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required',
array('requaired' => 'nama barang harus diisi'));
	if ($this->form_validation->run() == TRUE) {
		$this->load->model('barang_model','kat');
		$masuk=$this->kat->masuk_db();
		if($masuk==true){
			$this->session->set_flashdata('pesan', 'sukses masuk');
		}else{
		//	$this->sesssion->set_flashdata('pesan', 'gagal masuk');
		}
		redirect(base_url('index.php/barang'),'refresh');}
	 else {
		$this->session->set_flashdata('pesan', validation_errors());
		redirect(base_url('index.php/barang'),'refresh');
	}

}
public function get_detail_barang($id_barang='')
{
	$this->load->model('barang_model');
	$data_detail=$this->barang_model->detail_barang($id_barang);

	echo json_encode($data_detail);
}
 public function update_barang()
 {
 	$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required');
 	$this->form_validation->set_rules('harga', 'harga', 'trim|required');
 	$this->form_validation->set_rules('stok', 'stok', 'trim|required');
 	$this->form_validation->set_rules('id_kategori', 'id_kategori', 'trim|required');
 	if ($this->form_validation->run()==false) {
 		$this->session->set_flashdata('pesan', validation_errors());
 		redirect(base_url('index.php/barang'),'refresh');
 	}
 else{
 	$this->load->model('barang_model');
 	$proses_update=$this->barang_model->update_barang();
 	if ($proses_update) {
 		$this->session->set_flashdata('pesan', 'sukses update');
 	}
 else{
 	$this->session->set_flashdata('pesan', 'gagal update');
 }
 redirect(base_url('index.php/barang'),'refresh');
 }

 }
public function deleteBarang($id_barang)
{
	$this->load->model('barang_model');
	$prosesDelete = $this->barang_model->delete_barang($id_barang);

	if ($prosesDelete == TRUE) {
		$this->session->set_flashdata('pesan', 'sukses hapus data');
	} else {
		$this->session->set_flashdata('pesan', 'gagal hapus data');
	}
redirect(base_url('index.php/barang'),'refresh');

}
	}
/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */