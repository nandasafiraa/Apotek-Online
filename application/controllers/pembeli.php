<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pembeli extends CI_Controller {

	public function index()
	{
		$data['content'] = "v_pembeli";
		$this->load->model('pembeli_model');
		$data['data_pembeli']=$this->pembeli_model->get_pembeli();
		$this->load->view('template_user', $data, FALSE);
	}
public function simpan_pembeli()
{
	$this->form_validation->set_rules('nama_pembeli', 'Nama pembeli', 'trim|required',
array('requaired' => 'nama pembeli harus diisi'));
	if ($this->form_validation->run() == TRUE) {
		$this->load->model('pembeli_model','pem');
		$masuk=$this->pem->masuk_db();
		if($masuk==true){
			$this->session->set_flashdata('pesan', 'sukses masuk');
		}else{
			$this->sesssion->set_flashdata('pesan', 'gagal masuk');
		}
		redirect(base_url('index.php/pembeli'),'refresh');}
	 else {
		$this->session->set_flashdata('pesan', validation_errors());
		redirect(base_url('index.php/pembeli'),'refresh');
	}

}
public function get_detail_pembeli($id_pembeli='')
{
	$this->load->model('pembeli_model');
	$data_detail=$this->pembeli_model->detail_pembeli($id_pembeli);

	echo json_encode($data_detail);
}
 public function update_pembeli()
 {
 	$this->form_validation->set_rules('nama_pembeli', 'Nama pembeli', 'trim|required');
 	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
 	$this->form_validation->set_rules('no telp', 'no telp', 'trim|required');
 	$this->form_validation->set_rules('username', 'username', 'trim|required');
 	$this->form_validation->set_rules('password', 'password', 'trim|required');
 	if ($this->form_validation->run()==false) {
 		$this->session->set_flashdata('pesan', validation_errors());
 		redirect(base_url('index.php/pembeli'),'refresh');
 	}
 else{
 	$this->load->model('pembeli_model');
 	$proses_update=$this->pembeli_model->update_pembeli();
 	if ($proses_update) {
 		$this->session->set_flashdata('pesan', 'sukses update');
 	}
 else{
 	$this->session->set_flashdata('pesan', 'gagal update');
 }
 redirect(base_url('index.php/pembeli'),'refresh');
 }

 }
public function deletePembeli($id_pembeli)
{
	$this->load->model('pembeli_model');
	$prosesDelete = $this->pembeli_model->delete_pembeli($id_pembeli);

	if ($prosesDelete == TRUE) {
		$this->session->set_flashdata('pesan', 'sukses hapus data');
	} else {
		$this->session->set_flashdata('pesan', 'gagal hapus data');
	}
redirect(base_url('index.php/pembeli'),'refresh');

}
	}
/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */