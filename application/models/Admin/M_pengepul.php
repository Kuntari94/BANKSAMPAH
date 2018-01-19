<?php

class M_pengepul extends CI_Model{

	public $table = 't_pengepul';

function get_pengepul(){
	return $this->db->get('t_pengepul')->result();
}

function tambah_pengepul($data){
	return $this->db->insert('t_pengepul',$data);
}

function delete_pengepul($id_pengepul){
	$this->db->where('id_pengepul',$id_pengepul);
	return $this->db->delete('t_pengepul');
}

function get_pengepul_by_id($id_pengepul){
	$this->db->where('id_pengepul',$id_pengepul);
	return $this->db->get('t_pengepul')->row();
}

function edit_pengepul($data,$id_pengepul){
	$this->db->where('id_pengepul',$id_pengepul);
	return $this->db->update('t_pengepul',$data);
}
}
