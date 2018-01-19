<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarikan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Admin/M_tarikan');
	}

	public function index(){
		$data['tampil_tarikan']=$this->M_tarikan->get_data();
		$view['main']=$this->load->view('Admin/Tarikan/V_tarikan',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Transaksi_tarikan(){
		$data['form_action']=site_url().'/Admin/Tarikan/Detail_transaksi_tarikan';
		$data['kdtarik']=$this->M_tarikan->nota_tarikan();
		//$data['getdata']=$this->M_tarikan->get_data_by_id($id_nasabah);
		$view['main']=$this->load->view('Admin/Tarikan/V_transaksi_tarikan',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Detail_transaksi_tarikan(){

		$view['main']=$this->load->view('Admin/Tarikan/V_Detail_tarikan',@$view,TRUE);
		$this->load->view('Master_admin',$view);

	}
}