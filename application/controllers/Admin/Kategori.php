<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/M_kategori');
	}

	public function index(){
		$data['tampil_kat']=$this->M_kategori->get_kategori();

		$view['main']=$this->load->view('Admin/Kategori/V_kategori',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Tambah_kategori(){
		$data['form_action']=site_url().'/Admin/Kategori/Tambah_kategori_proses';
		$view['main']=$this->load->view('Admin/Kategori/V_tambah_kategori',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}
	public function Tambah_kategori_proses(){
		if($_POST){

			$data=array(
			'nama_kategori'=>$this->input->post('nama_kategori')
				);
		$exec = $this->M_kategori->tambah_kategori($data);

		if($exec){
			$this->session->set_flashdata('sukses','Data berhasil ditambahkan');
			redirect('Admin/Kategori');

		}else{
			$this->session->set_flashdata('gagal','Data gagal ditambahkan');
			redirect('Admin/Kategori/Tambah_kategori');
			}
		}
	}

	public function Edit($id_kategori){
		$data['form_action']=site_url().'/Admin/Kategori/Edit_kategori_proses';
		$data['edit_data_kategori']=$this->M_kategori->get_kategori_by_id($id_kategori);
		$view['main']=$this->load->view('Admin/Kategori/V_edit_kategori',$data,TRUE);
		$this->load->view('Master_admin',$view);

	}	

	public function Edit_kategori_proses(){
		if($_POST){
			$id_kategori=$this->input->post('id_kategori');

			$data=array(
				'nama_kategori'=>$this->input->post('nama_kategori'));
		}
		$exec=$this->M_kategori->edit_kategori($data,$id_kategori);
		if($exec){
			$this->session->set_flashdata('sukses','Data berhasil diubah');
			redirect ('Admin/Kategori');
		}else{
			$this->session->set_flashdata('gagal','Data gagal diubah');
			redirect ('Admin/Kategori/Edit');
		}
	}

	public function Delete($id_kategori){
		$exec=$this->M_kategori->delete_kategori($id_kategori);
		if($exec){
			$this->session->set_flashdata('sukses','Data berhasil dihapus');
		}else{
			$this->session->set_flashdata('gagal','Data gagal dihapus');
		}
		redirect('Admin/Kategori');

	}

}
