<?php
class M_nasabah extends CI_Model{
	public $table='t_nasabah';

	function get_data(){
		return $this->db->get('t_nasabah')->result();
	}
	function delete_nasabah($id_nasabah){
		$this->db->where('id_nasabah',$id_nasabah);
		return $this->db->delete('t_nasabah');
	}

	function get_nasabah_by_id($id_nasabah){
	$this->db->where('id_nasabah',$id_nasabah);
	return $this->db->get('t_nasabah')->row();	
	}

	function edit_nasabah($data,$id_nasabah){
		$this->db->where('id_nasabah',$id_nasabah);
		return $this->db->update('t_nasabah',$data);
	}

	function get_data_id($id_nasabah){
	$this->db->where('id_nasabah',$id_nasabah);
	return $this->db->get('t_nasabah')->result();	
	}
}
?>