<?php
class M_setoran_pengepul extends CI_Model{
	public $table='t_pengepul';
	public $tabel1='t_transaksi_pengepul';
	public $tabel2='t_detail_pengepul';
	public $tabel3='t_sampah';

	function get_data(){

	 	$this->db->select('*');
	 	$this->db->from('t_transaksi_pengepul');
	 	$this->db->join('t_pengepul','t_transaksi_pengepul.id_pengepul = t_pengepul.id_pengepul');
	 	$this->db->join('t_detail_pengepul','t_transaksi_pengepul.id_transaksi_pengepul =t_detail_pengepul.id_transaksi_pengepul');
	 	$this->db->group_by('t_transaksi_pengepul.nota_transaksi');
		return $this->db->get()->result();
	}

	function generate_code(){
		$this->db->select('Right(t_transaksi_pengepul.nota_transaksi,3) as kode',FALSE);
		$this->db->order_by('nota_transaksi','ASC');
		$this->db->limit(1);
		$query=$this->db->get('t_transaksi_pengepul');
		if($query->num_rows()>0){
			$data=$query->row();
			$kode=intval($data->kode)+1;
		}
		else{
			$kode=1;
		}
		$kodemax= str_pad($kode,4,"0",STR_PAD_LEFT);
		$kodejadi="P".$kodemax;
		return $kodejadi;
	}

	function simpan_data($data){
		return $this->db->insert('t_transaksi_pengepul',$data); 
	}

	function simpan_detail($datas){
		return $this->db->insert('t_detail_pengepul',$datas);
	}

	function tambah_setoran_pengepul($data){
		return $this->db->insert('t_detail_pengepul',$data);
	}

	function get_id_transaksi($id_transaksi_pengepul){
		$this->db->where('id_transaksi_pengepul',$id_transaksi_pengepul);
		return $this->db->get('t_transaksi_pengepul')->row();
	}

	function get_transaksi_by_id($id_transaksi_pengepul){
		$this->db->select('*');
		$this->db->from('t_transaksi_pengepul a');
		$this->db->join('t_pengepul b','a.id_pengepul=b.id_pengepul');
		$this->db->where('a.id_transaksi_pengepul',$id_transaksi_pengepul);
		return $this->db->get('t_transaksi_pengepul')->row();
	}

	function get_all_transaksi_byid($id_transaksi_pengepul){
		$this->db->select('*');
		$this->db->from('t_transaksi_pengepul a');
		$this->db->join('t_detail_pengepul b','a.id_transaksi_pengepul=b.id_transaksi_pengepul'	);
		$this->db->join('t_sampah c','b.id_sampah=c.id_sampah');
		$this->db->where('a.id_transaksi_pengepul',$id_transaksi_pengepul);
		return $this->db->get()->result();
	}

	function get_detail($id_transaksi_pengepul){
		$this->db->select('*');
		$this->db->from('t_transaksi_pengepul a');
		$this->db->join('t_detail_pengepul b','a.id_transaksi_pengepul=b.id_transaksi_pengepul');
		$this->db->join('t_pengepul d','a.id_pengepul=d.id_pengepul');
		$this->db->join('t_sampah c','b.id_sampah=c.id_sampah');

		$this->db->where('b.id_transaksi_pengepul',$id_transaksi_pengepul);
		$this->db->limit(1);
		return $this->db->get()->result();

	}
}