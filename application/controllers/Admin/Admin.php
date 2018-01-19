<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent ::__construct();
		$this->load->model('Admin/M_admin');
	}

	public function index()
	{
		$this->load->view('Master_admin');
	}

	public function Daftar_admin(){
		$data['tampil_admin']=$this->M_admin->get_admin();
		$view['main']=$this->load->view('Admin/Admin/V_daftar_admin',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Tambah_admin(){
		$data['form_action']=site_url().'/Admin/Admin/Tambah_admin_proses';
		$view['main']=$this->load->view('Admin/Admin/V_tambah_Admin',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Tambah_admin_proses(){
		if($_POST){
			$username=$this->input->post('username');
			$password1=$this->input->post('password1');
			$password2=$this->input->post('password2');
			$hak_akses=$this->input->post('hak_akses');
			if($password1 != $password2){
				$this->session->set_flashdata('gagal','Password yang dimasukkan tidak sama');
			redirect ('Admin/Admin/Daftar_admin');
			
		}else{
			//cek password
			$data=array(
				'username'=>$this->input->post('username'),
				'password'=>md5($password2),
				'hak_akses'=>$this->input->post('hak_akses')
				);
			
			$exec= $this->M_admin->tambah_admin($data);
	
		$this->session->set_flashdata('sukses','Data berhasil ditambahkan');
		redirect ('Admin/Admin/Daftar_admin');
			}
			}
	}
	public function Edit_admin($id_admin){
		$data['form_action']=site_url().'/Admin/Admin/Edit_admin_proses';
		$data['edit_data_admin']=$this->M_admin->get_admin_by_id($id_admin);
		$view['main']=$this->load->view('Admin/Admin/V_edit_admin',$data,TRUE);
		$this->load->view('Master_admin',$view);
	}

	public function Edit_admin_proses(){
		if($_POST){
			$id_admin=$this->input->post('id_admin');
			$username=$this->input->post('username');
			$password1=$this->input->post('password1');
			$password2=$this->input->post('password2');
			$hak_akses=$this->input->post('hak_akses');
			if($password1 != $password2){
				$this->session->set_flashdata('gagal','Password yang dimasukkan tidak sama');
			redirect ('Admin/Admin/Daftar_admin');
			
		}else{
		
			//input
			$id_admin=$this->input->post('id_admin');

			$data=array(
				'username'=>$this->input->post('username'),
				'password'=>md5($password2),
				'hak_akses'=>$this->input->post('hak_akses')
				);

		}
	
		$exec= $this->M_admin->edit_admin($data,$id_admin);
		if($exec){
			$this->session->set_flashdata('sukses','Data berhasil diubah');
			redirect ('Admin/Admin/Daftar_admin');
		}
		else{
			$this->session->set_flashdata('gagal','Data gagal diubah');
			redirect ('Admin/Admin/Edit_admin');
			}
		}
	}

	public function Delete($id_admin){
		$exec = $this->M_admin->delete_admin($id_admin);
		if($exec){
			$this->session->set_flashdata('sukses','Data berhasil dihapus');
		}else{
			$this->session->set_flashdata('gagal','Data gagal dihapus');
		}redirect('Admin/Admin/Daftar_admin');

	}
}
