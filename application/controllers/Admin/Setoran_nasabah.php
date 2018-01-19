		<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setoran_nasabah extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Admin/M_setoran');
		$this->load->model('Admin/M_sampah');
	}

	public function index(){
		$data['tampil_setoran']=$this->M_setoran->get_data();
		$data['kodeunik']=$this->M_setoran->code_otomatis();
		$view['main']=$this->load->view('Admin/Setoran_nasabah/V_setoran_nasabah',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Transaksi_setoran(){
		$data['form_action']=site_url().'/Admin/Setoran_nasabah/Transaksi_proses/';
		$data['kodeunik']=$this->M_setoran->code_otomatis();
		$view['main']=$this->load->view('Admin/Setoran_nasabah/V_transaksi_setoran_nasabah',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Transaksi_proses(){
		
		if($_POST){
			$date= date('Y-m-d');
			
			
			$data=array(

				'id_nasabah'=>$this->input->post('nomor_rekening'),
				'nota_transaksi'=>$this->input->post('nota_transaksi'),
				'tanggal_transaksi'=>$date,
				'hari'=>$this->input->post('hari')
				
				);
			$exec=$this->M_setoran->simpan_setoran($data);

				
			$id_transaksi=$this->db->insert_id();
			$datas=array(
				'id_sampah'=>$this->input->post('jenis'),
		
				'id_transaksi'=>$id_transaksi,
				'berat'=>$this->input->post('berat')
				);	
			$exec1=$this->M_setoran->simpan_detail_setoran($datas);		
			
		}
	
		redirect ('Admin/Setoran_nasabah/Tambah_setoran/'.$id_transaksi);

	}

	public function Tambah_setoran($id_transaksi){
		$data['form_action']=site_url().'/Admin/Setoran_nasabah/Tambah_setoran_proses/'.$id_transaksi;
		$data['get_id_transaksi']=$this->M_setoran->get_id_transaksi($id_transaksi);
		$data['get_transaksi_by_id']=$this->M_setoran->get_transaksi_by_id($id_transaksi);
		$data['get_nasabah']=$this->M_setoran->get_data_rek_by_id($id_transaksi);
		$data['get_transaksi_nasabah']=$this->M_setoran->get_transaksi_nasabah($id_transaksi);
		$data['get_hitung']=$this->M_setoran->get_hitung($id_transaksi);
		// $data['get_kategori']=$this->M_k->get_kategori();
		$view['main']=$this->load->view('Admin/Setoran_nasabah/V_transaksi_tambah_setoran',$data,TRUE);

		$this->load->view('Master_admin',$view);
	}

	public function Tambah_setoran_proses($id_transaksi){
		
		if ($_POST){
			// print_r($this->input->post('jenis'));
			//$get_hitung=$this->M_setoran->get_hitung($id_transaksi);
			// $harga_beli=$this->input->post('jenis');
			//$harga_beli=$get_hitung->harga_beli;
			$berat=$this->input->post('berat');
			//cari harga beli

			$harga_beli = $this->M_sampah->get_harga_beli_by_jenis($this->input->post('jenis'));

			// print_r($harga_beli);
			// exit();

			$jumlah=$harga_beli*$berat;
			

			$data =array(
				'id_sampah' =>$this->input->post('jenis'),
				'id_transaksi'=>$this->input->post('id_transaksi'),
				'berat'=>$this->input->post('berat'),
				'jumlah'=>$jumlah
				);			
					
			$exec = $this->M_setoran->tambah_setoran($data);

			
		}
		redirect ('Admin/Setoran_nasabah/Tambah_setoran/'.$id_transaksi);
	}

	public function Detail_transaksi($id_transaksi){
		$data['get_id_transaksi']=$this->M_setoran->get_id_transaksi($id_transaksi);
		$data['get_nota'] =$this->M_setoran->get_nota($id_transaksi);
		$data['get_transaksi_nasabah']=$this->M_setoran->get_transaksi_nasabah($id_transaksi);
		$view['main']=$this->load->view('Admin/Setoran_nasabah/V_detail_transaksi',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}

/**public function Coba_tampil($id_transaksi){
		
		$data['get_id_transaksi']=$this->M_setoran->get_id_transaksi($id_transaksi);
		$data['get_transaksi_by_id']=$this->M_setoran->get_transaksi_by_id($id_transaksi);
		$data['get_nasabah']=$this->M_setoran->get_data_rek_by_id($id_transaksi);
		$data['get_transaksi_nasabah']=$this->M_setoran->get_transaksi_nasabah($id_transaksi);
		$view['main']=$this->load->view('Admin/Setoran_nasabah/V_coba_tampil',$data,TRUE);

		$this->load->view('Master_admin',$view);
	}**/

}