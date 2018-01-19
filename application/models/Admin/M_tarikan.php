<?php
class M_tarikan extends CI_Model{
	public $table='t_nasabah';
	public $tabel1='t_transaksi_tarikan';


	function get_data(){

	 	$this->db->select('*');
	 	$this->db->from('t_transaksi_tarikan');
	 	$this->db->join('t_nasabah','t_transaksi_tarikan.id_nasabah = t_nasabah.id_nasabah');
		return $this->db->get()->result();
	}

	function nota_tarikan(){
		$this->db->select('Right(t_transaksi_tarikan.nota_tarikan,3)kode',FALSE);
		$this->db->order_by('nota_tarikan','DESC');
		$this->db->limit(1);
		$query=$this->db->get('t_transaksi_tarikan');
		if($query->num_rows()>0){
			$data=$query->row();
			$kode=intval($data->kode)+1;
		}
		else{
			$kode=1;
		}
		$kodemax= str_pad($kode,4,"0",STR_PAD_LEFT);
		$kodejadi="T".$kodemax;
		return $kodejadi;
	}

	function get_data_by_id($id_nasabah){
		$this->db->select('nama,alamat,saldo');
		$this->db->from('t_nasabah');
		$this->db->where('id_nasabah',$id_nasabah);
		return $this->db->get('t_nasabah')->row();
	}
}