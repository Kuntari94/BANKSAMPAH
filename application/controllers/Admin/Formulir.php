<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulir extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/M_formulir');
	}

	public function index(){
		
		$this->load->view('Master_admin');
	}

	public function Input_formulir(){

		$data['form_action']=site_url().'/Admin/Formulir/Input_formulir_proses';
		$data['items']= $this->M_formulir->buatRandomString();
		$data['rekunik']=$this->M_formulir->code_rek();
	
		$view['main']=$this->load->view('Admin/Formulir/V_input_formulir',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Input_formulir_proses(){


		if($_POST){
			$date = date('Y-m-d');
		
			$randomString=$this->M_formulir->buatRandomString();
			$var = $randomString;
			$items= strval($var);
			
			$nomor_rekening=$this->M_formulir->code_rek();
			$data=array(
				'nama'=>$this->input->post('nama'),
				'nomor_rekening'=>$nomor_rekening,
				'tgl_lahir'=>$this->input->post('tgl_lahir'),
				'tempat_lahir'=>$this->input->post('tempat_lahir'),
				'alamat'=>$this->input->post('alamat'),
				'pekerjaan'=>$this->input->post('pekerjaan'),
				'alasan'=>$this->input->post('alasan'),
				'no_hp'=>$this->input->post('no_hp'),
				'pendidikan'=>$this->input->post('pendidikan'),
				'username'=>$nomor_rekening,
				'password'=>$randomString,
				'join_date'=>$date
				);
			
			$create=$this->M_formulir->input_formulir($data);
		
			if($create){
				$this->session->set_flashdata('sukses','Data berhasil ditambahkan');
			}else{
				$this->session->set_flashdata('gagal','Data gagal ditambahkan');
			}
			redirect('Admin/Nasabah');
		}
	}


}
