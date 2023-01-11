<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

public function get_kategori ()
{
	return $this->db->get('kategori')->result();
}
	
public function masuk_db()
{
	$data_kategori=array(
'nama_kategori'=>$this->input->post('nama_kategori')
	);
	$sql_masuk=$this->db->insert('kategori', $data_kategori);
	return $sql_masuk;
}
}

/* End of file kategori_model.php */
/* Location: ./application/models/kategori_model.php */