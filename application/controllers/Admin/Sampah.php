<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sampah extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/M_sampah');
	}

	public function index(){
		
		$this->load->view('Master_admin');
	}

	public function List_sampah(){
		
		$data['tampil_sampah']=$this->M_sampah->get_sampah();

		$view['main']=$this->load->view('Admin/Sampah/V_sampah',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Tambah_sampah()
	{
		$data['form_action']=site_url().'/Admin/Sampah/Tambah_sampah_proses';	
		$view['main']=$this->load->view('Admin/Sampah/V_tambah_sampah',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}
	public function Tambah_sampah_proses()
	{
		if($_POST){
			$data=array(
				'id_kategori' =>$this->input->post('id_kategori') ,
				'jenis'=>$this->input->post('jenis'),
				'satuan'=>$this->input->post('satuan'),
				'harga_beli'=>$this->input->post('harga'),
				'harga_jual'=>$this->input->post('harga_jual')
				 );
			$exec = $this->M_sampah->tambah_sampah($data);

			if($exec){
				$this->session->set_flashdata('sukses','Data berhasil ditambahkan');
				redirect('Admin/Sampah/List_sampah');
			}else{
				$this->session->set_flashdata('gagal','Data gagal ditambahkan');
				redirect('Admin/Sampah/Tambah_sampah');
			}
		}
	}
	public function Edit_sampah($id_sampah){
		$data['form_action']=site_url().'/Admin/Sampah/Edit_sampah_proses';
		$data['edit_data_sampah']=$this->M_sampah->get_sampah_by_id($id_sampah);
		$view['main']=$this->load->view('Admin/Sampah/V_edit_sampah',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Edit_sampah_proses(){
		if($_POST){
			$id_sampah = $this->input->post('id_sampah');

			$data= array(
				'id_kategori' =>$this->input->post('id_kategori'),
				'jenis'=>$this->input->post('jenis'),
				'satuan'=>$this->input->post('satuan'),
				'harga_beli'=>$this->input->post('harga'),
				'harga_jual'=>$this->input->post('harga_jual')
				);
		}
			$exec = $this->M_sampah->edit_sampah($data,$id_sampah);

			if($exec){
				$this->session->set_flashdata('sukses','Data berhasil diubah');
				redirect('Admin/Sampah/List_sampah');
			}else{
				$this->session->set_flashdata('gagal','Data gagal diubah');
				redirect('Admin/Sampah/Edit_sampah');
			}
	}

	public function Delete($id_sampah){
		$del = $this->M_sampah->delete_sampah($id_sampah);
		if($del){
			$this->session->set_flashdata('sukses','Data berhasil dihapus');
		}else{
			$this->session->set_flashdata('gagal','Data gagal dihapus');
		}
		redirect('Admin/Sampah/List_sampah');
	}
}