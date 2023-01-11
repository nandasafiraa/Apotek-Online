<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pembeli_model extends CI_Model {

public function get_pembeli ()
{
	return $this->db->get('pembeli')->result();
}
	
public function masuk_db()
{
	$data_pembeli=array(
'nama_pembeli'=>$this->input->post('nama_pembeli'),
'alamat'=>$this->input->post('alamat'),
'no_telp'=>$this->input->post('no_telp'),
'username'=>$this->input->post('username'),
'password'=>$this->input->post('password'),
	);
	$sql_masuk=$this->db->insert('pembeli', $data_pembeli);
	return $sql_masuk;
}
public function detail_pembeli($id_pembeli='')
{
return $this->db->where('id_pembeli',$id_pembeli)->get('pembeli')->row();
}
public function update_pembeli()
{
	$dt_up_barang=array(
		'nama_pembeli'=>$this->input->post('nama_pembeli'),
		'alamat'=>$this->input->post('alamat'),
		'no_telp'=>$this->input->post('no_telp'),
		'username'=>$this->input->post('username'),
		'password'=>$this->input->post('password'),
	);
	return $this->db->where('id_pembeli',$this->input->post('id_pembeli'))->update('pembeli', $dt_up_pembeli);
}
public function delete_pembeli($id_pembeli)
{
	$delete = $this->db->where('id_pembeli', $id_pembeli)->delete('pembeli');
	return $delete;
}
}

/* End of file Barang_model.php */
/* Location: ./application/models/Barang_model.php */