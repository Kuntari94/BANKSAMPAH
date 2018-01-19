<?php

class M_kategori extends CI_Model 
{

	public $table ='t_kategori';


function get_kategori(){
	return $this->db->get('t_kategori')->result();
}

function tambah_kategori($data){
	return $this->db->insert('t_kategori',$data);
}

function get_kategori_by_id($id_kategori){
	$this->db->where('id_kategori',$id_kategori);
	return $this->db->get('t_kategori')->row();
}

function edit_kategori($data,$id_kategori){
	$this->db->where('id_kategori',$id_kategori);
	return $this->db->update('t_kategori',$data);
}

function delete_kategori($id_kategori){
	$this->db->where('id_kategori',$id_kategori);
	return $this->db->delete('t_kategori');
}

}