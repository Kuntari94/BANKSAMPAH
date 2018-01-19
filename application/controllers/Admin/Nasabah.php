<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nasabah extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Admin/M_nasabah');
	}

	public function index(){
		$data['tampil_nasabah']=$this->M_nasabah->get_data();
		$view['main']=$this->load->view('Admin/Nasabah/V_nasabah',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Edit($id_nasabah){
		$data['form_action']=site_url().'/Admin/Nasabah/Edit_proses';
		$data['edit_data_nasabah']=$this->M_nasabah->get_nasabah_by_id($id_nasabah);
		$view['main']=$this->load->view('Admin/Nasabah/V_edit_nasabah',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Edit_proses(){
		if($_POST){
			$id_nasabah=$this->input->post('id_nasabah');
			$data=array(
				'nama'=>$this->input->post('nama'),
				'nomor_rekening'=>$this->input->post('nomor_rekening'),
				'tgl_lahir'=>$this->input->post('tgl_lahir'),
				'tempat_lahir'=>$this->input->post('tempat_lahir'),
				'alamat'=>$this->input->post('alamat'),
				'pekerjaan'=>$this->input->post('pekerjaan'),
				'alasan'=>$this->input->post('alasan'),
				'no_hp'=>$this->input->post('no_hp'),
				'pendidikan'=>$this->input->post('pendidikan'),
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password')
				);
		}
		$exec=$this->M_nasabah->edit_nasabah($data,$id_nasabah);
		if($exec){
			$this->session->set_flashdata('sukses','Data berhasil diubah');
			redirect('Admin/Nasabah');
		}else{
			$this->session->set_flashdata('gagal','Data gagal diubah');
			redirect('Admin/Nasabah/Edit');
		}

	}

	public function Detail($id_nasabah){
		$data['data_nasabah']=$this->M_nasabah->get_data_id($id_nasabah);
		$view['main']=$this->load->view('Admin/Nasabah/V_detail_nasabah',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Delete($id_nasabah){
		$del=$this->M_nasabah->delete_nasabah($id_nasabah);
		if($del){
			$this->session->set_flashdata('sukses','Data berhasil di hapus');
		}else{
			$this->session->set_flashdata('gagal','Data gagal dihapus');
		}redirect ('Admin/Nasabah');

	}


}