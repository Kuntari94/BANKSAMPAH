<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_tabungan extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Admin/M_kategori');
	}

	public function index(){
		
		$view['main']=$this->load->view('Admin/Buku_tabungan/V_buku_tabungan',@$view,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Detail_tabungan(){
		$view['main']=$this->load->view('Admin/Buku_tabungan/V_detail_tabungan',@$view,TRUE);
		$this->load->view('Master_admin',$view);
	}

}
