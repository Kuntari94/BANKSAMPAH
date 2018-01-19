<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saldo_minimum extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Admin/M_saldo_minimum');
	}

	public function index(){
		$data['tampil_saldo']=$this->M_saldo_minimum->get_saldo();
		$view['main']=$this->load->view('Admin/Saldo_minimum/V_saldo_minimum',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Edit($id_min_saldo){
		$data['form_action']=site_url().'/Admin/Saldo_minimum/Edit_saldo_proses';
		$data['edit_data_saldo']=$this->M_saldo_minimum->get_saldo_by_id($id_min_saldo);
		$view['main']=$this->load->view('Admin/Saldo_minimum/V_edit_saldo',$data,TRUE);
		$this->load->view('Master_admin',$view);

	}	

	public function Edit_saldo_proses(){
		if($_POST){
			$id_min_saldo=$this->input->post('id_min_saldo');

			$data=array(
				'min_saldo'=>$this->input->post('min_saldo'));
		}
		$exec=$this->M_saldo_minimum->edit_saldo($data,$id_min_saldo);
		if($exec){
			$this->session->set_flashdata('sukses','Data berhasil diubah');
			redirect ('Admin/Saldo_minimum');
		}else{
			$this->session->set_flashdata('gagal','Data gagal diubah');
			redirect ('Admin/Saldo_minimum/Edit');
		}
	}

}