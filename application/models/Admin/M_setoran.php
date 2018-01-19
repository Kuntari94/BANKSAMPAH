<?php
class M_setoran extends CI_Model{
	public $table='t_nasabah';
	public $tabel1='t_transaksi_setor';
	public $tabel2='t_detail_setoran';

	function get_data(){

	 	$this->db->select('*');
	 	$this->db->from('t_transaksi_setor');
	 	$this->db->join('t_nasabah','t_transaksi_setor.id_nasabah = t_nasabah.id_nasabah');
	 	$this->db->join('t_detail_setoran','t_transaksi_setor.id_transaksi=t_detail_setoran.id_transaksi');
		$this->db->group_by('t_transaksi_setor.nota_transaksi');
		return $this->db->get()->result();
	}

	function simpan_setoran($data){
		return $this->db->insert('t_transaksi_setor',$data);
	

	}
	function simpan_detail_setoran($datas){
		return $this->db->insert('t_detail_setoran',$datas);
	}

	function get_id_transaksi($id_transaksi){
	
	$this->db->where('id_transaksi',$id_transaksi);
	return $this->db->get('t_transaksi_setor')->row();
	}

	function get_transaksi_by_id($id_transaksi){
		$this->db->select('*');
		$this->db->where('id_transaksi',$id_transaksi);
			return $this->db->get('t_transaksi_setor')->row();
	}

	function get_nota($id_transaksi){
		$this->db->select('nota_transaksi, nomor_rekening, nama,hari,tanggal_transaksi');
		$this->db->from('t_transaksi_setor');
		$this->db->join('t_detail_setoran','t_transaksi_setor.id_transaksi=t_detail_setoran.id_transaksi');
		$this->db->join('t_nasabah','t_transaksi_setor.id_nasabah=t_nasabah.id_nasabah');
		$this->db->where('t_detail_setoran.id_transaksi',$id_transaksi);
		$this->db->limit(1);
		return $this->db->get()->result();
	}

	function get_data_rek_by_id($id_transaksi){
		$this->db->select('nomor_rekening');
		$this->db->from('t_nasabah');
		$this->db->join('t_transaksi_setor', 't_transaksi_setor.id_nasabah = t_nasabah.id_nasabah');
		$this->db->where('id_transaksi',$id_transaksi);
		return $this->db->get()->row();
	}

	function get_transaksi_nasabah($id_transaksi){
		$this->db->select('*');
		$this->db->from('t_transaksi_setor');
		$this->db->join('t_nasabah','t_nasabah.id_nasabah = t_transaksi_setor.id_nasabah');
		$this->db->join('t_detail_setoran','t_detail_setoran.id_transaksi=t_transaksi_setor.id_transaksi');
		$this->db->join('t_sampah','t_detail_setoran.id_sampah=t_sampah.id_sampah');
		$this->db->where('t_transaksi_setor.id_transaksi',$id_transaksi);
				return $this->db->get()->result();
	}

	function get_hitung($id_transaksi){
		$this->db->select('berat,harga_beli');
		$this->db->from('t_detail_setoran');
		$this->db->join('t_sampah','t_detail_setoran.id_sampah=t_sampah.id_sampah');
		$this->db->group_by('jenis');
		$this->db->where('id_transaksi',$id_transaksi);
		return $this->db->get()->row();

	}

	function tambah_setoran($data){
		return $this->db->insert('t_detail_setoran',$data);
	}

	function code_otomatis(){
		$this->db->select('Right(t_transaksi_setor.nota_transaksi,3) as kode',FALSE);
		$this->db->order_by('nota_transaksi','DESC');
		$this->db->limit(1);
		$query=$this->db->get('t_transaksi_setor');
		if($query->num_rows()>0){
			$data=$query->row();
			$kode=intval($data->kode)+1;
		}
		else{
			$kode=1;
		}
		$kodemax= str_pad($kode,4,"0",STR_PAD_LEFT);
		$kodejadi="S".$kodemax;
		return $kodejadi;
	}

	
}
