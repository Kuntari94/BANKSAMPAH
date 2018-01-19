<?php

class M_admin extends CI_Model{

	public $table='t_admin';

function get_admin(){
	return $this->db->get('t_admin')->result();

	}
function tambah_admin($data){
	return $this->db->insert('t_admin',$data);
}

function delete_admin($id_admin){
	$this->db->where('id_admin',$id_admin);
	return $this->db->delete('t_admin');
}

function get_admin_by_id($id_admin){
	$this->db->where('id_admin',$id_admin);
	return $this->db->get('t_admin')->row();
}

function edit_admin($data,$id_admin){
	$this->db->where('id_admin',$id_admin);
	return $this->db->update('t_admin',$data);
}
}	

?>