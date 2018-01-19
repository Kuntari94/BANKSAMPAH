<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setoran_pengepul extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Admin/M_setoran_pengepul');
	}

	public function index(){
		$data['tampil_setoran_pengepul']=$this->M_setoran_pengepul->get_data();
		$data['generatecode']=$this->M_setoran_pengepul->generate_code();
		$view['main']=$this->load->view('Admin/Setoran_pengepul/V_setoran_pengepul',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Transaksi_setoran_pengepul(){
		$data['form_action']=site_url().'/Admin/Setoran_pengepul/Transaksi_proses';
		$data['generatecode']=$this->M_setoran_pengepul->generate_code();
		$view['main']=$this->load->view('Admin/Setoran_pengepul/V_transaksi_setoran_pengepul',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Transaksi_proses(){
		if($_POST){
			$date=date('Y-m-d');
			$data=array(
				'id_pengepul'=>$this->input->post('nama'),
				'nota_transaksi'=>$this->input->post('nota_transaksi'),
				'hari'=>$this->input->post('hari'),
				'tanggal'=>$date
				);
			$exec=$this->M_setoran_pengepul->simpan_data($data);

			$id_transaksi_pengepul=$this->db->insert_id();
			$datas=array(
				'id_transaksi_pengepul'=>$id_transaksi_pengepul,
				'id_sampah'=>$this->input->post('jenis'),
				'berat'=>$this->input->post('berat'),
				'harga'=>$this->input->post('harga')
				);
			$exec1=$this->M_setoran_pengepul->simpan_detail($datas);
			
		}
		redirect ('Admin/Setoran_pengepul/Tambah_setoran_pengepul/'.$id_transaksi_pengepul);
	}

	public function Tambah_setoran_pengepul($id_transaksi_pengepul){
		$data['form_action']=site_url().'/Admin/Setoran_pengepul/Tambah_setoran_proses/'.$id_transaksi_pengepul;
		$data['get_id_transaksi']=$this->M_setoran_pengepul->get_id_transaksi($id_transaksi_pengepul);
		$data['get_transaksi_by_id']=$this->M_setoran_pengepul->get_transaksi_by_id($id_transaksi_pengepul);
		$data['get_all_transaksi_byid']=$this->M_setoran_pengepul->get_all_transaksi_byid($id_transaksi_pengepul);
		$view['main']=$this->load->view('Admin/Setoran_pengepul/V_tambah_transaksi_setoran',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Tambah_setoran_proses($id_transaksi_pengepul){
		if($_POST){
			$data=array(
				'id_transaksi_pengepul'=>$this->input->post('id_transaksi_pengepul'),
				'id_sampah'=>$this->input->post('jenis'),
				'berat'=>$this->input->post('berat'),
				'harga'=>$this->input->post('harga')

				);
			$exec= $this->M_setoran_pengepul->tambah_setoran_pengepul($data);
		}
		redirect ('Admin/Setoran_pengepul/Tambah_setoran_pengepul/'.$id_transaksi_pengepul);
	}
	public function Detail_transaksi($id_transaksi_pengepul){
		$data['get_id_transaksi']=$this->M_setoran_pengepul->get_id_transaksi($id_transaksi_pengepul);
		$data['get_detail']=$this->M_setoran_pengepul->get_detail($id_transaksi_pengepul);
		$data['get_all_transaksi_byid']=$this->M_setoran_pengepul->get_all_transaksi_byid($id_transaksi_pengepul);
		$view['main']=$this->load->view('Admin/Setoran_pengepul/V_detail_setoran_pengepul',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}
}	