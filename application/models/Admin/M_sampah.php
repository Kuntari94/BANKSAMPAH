<?php 
class M_sampah extends CI_Model{
	public $table='t_sampah';
	public $table2='t_kategori';

	
	function get_sampah(){
	 $this->db->select('*');
	 $this->db->from('t_sampah');
	 $this->db->join('t_kategori','t_kategori.id_kategori = t_sampah.id_kategori');
	 return $this->db->get()->result();
	}

	function tambah_sampah($data){
	 return $this->db->insert('t_sampah',$data);
	}

	function get_sampah_by_id($id_sampah){
		$this->db->where('id_sampah',$id_sampah);	
		return $this->db->get('t_sampah')->row();
	}

	function get_harga_beli_by_jenis($jenis)
	{

		$this->db->select('harga_beli');
        $this->db->like('jenis','16');	
		/*return*/ print_r($this->db->get('t_sampah')->row());
		exit();
	}
	
	function edit_sampah($data,$id_sampah){
		$this->db->where('id_sampah',$id_sampah);
		return $this->db->update('t_sampah',$data);
	}

	function delete_sampah($id_sampah){
		$this->db->where('id_sampah',$id_sampah);
		return $this->db->delete('t_sampah');
	}
}

?>