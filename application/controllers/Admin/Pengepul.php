<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengepul extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Admin/M_pengepul');
	}

	public function index()
	{

		$data['tampil_pengepul']=$this->M_pengepul->get_pengepul();
		$view['main']=$this->load->view('Admin/Pengepul/V_pengepul',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Tambah_pengepul(){
		$data['form_action']=site_url().'/Admin/Pengepul/Tambah_pengepul_proses';
		$view['main']=$this->load->view('Admin/Pengepul/V_tambah_pengepul',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}
	public function Tambah_pengepul_proses(){
		if($_POST){

			$data=array(
			'nama'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			'no_handphone'=>$this->input->post('no_handphone')
				);
		$exec = $this->M_pengepul->Tambah_pengepul($data);

		if($exec){
			$this->session->set_flashdata('sukses','Data berhasil ditambahkan');
			redirect('Admin/Pengepul');

		}else{
			$this->session->set_flashdata('gagal','Data gagal ditambahkan');
			redirect('Admin/Peengepul/Tambah_pengepul');
			}
		}
	}

	public function Edit($id_pengepul){
		$data['form_action']=site_url().'/Admin/Pengepul/Edit_pengepul_proses';
		$data['edit_data_pengepul']=$this->M_pengepul->get_pengepul_by_id($id_pengepul);
		$view['main']=$this->load->view('Admin/Pengepul/V_edit_pengepul',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}
	public function Edit_pengepul_proses(){
		if($_POST){
			$id_pengepul=$this->input->post('id_pengepul');
			$data=array(
				'nama'=>$this->input->post('nama'),
				'alamat'=>$this->input->post('alamat'),
				'no_handphone'=>$this->input->post('no_handphone')
				);
		}
		$exec=$this->M_pengepul->edit_pengepul($data,$id_pengepul);
		if($exec){
			$this->session->set_flashdata('sukses','Data berhasil diubah');
			redirect ('Admin/Pengepul');
		}else{
			$this->session->set_flashdata('gagal','Data gagal diubah');
			redirect ('Admin/Pengepul/Edit');
		}
	}

	public function Delete($id_pengepul){
		$exec=$this->M_pengepul->delete_pengepul($id_pengepul);
		if($exec){
			$this->session->set_flashdata('sukses','Data berhasil dihapus');
		}else{
			$this->session->set_flashdata('gagal','Data gagal dihapus');
		}
		redirect('Admin/Pengepul');

	}

}
