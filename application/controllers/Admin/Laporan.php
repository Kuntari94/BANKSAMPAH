<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Admin/M_kategori');
	}

	public function Laporan_harian(){
		$view['main']=$this->load->view('Admin/Laporan/V_laporan_harian',@$view,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Laporan_pengepul(){
		$view['main']=$this->load->view('Admin/Laporan/V_laporan_pengepul',@$view,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Laporan_bulanan(){
		$view['main']=$this->load->view('Admin/Laporan/V_laporan_bulanan',@$view,TRUE);
		$this->load->view('Master_admin',$view);
	}
}
