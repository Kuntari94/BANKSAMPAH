<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *s
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
		public function __construct()
	{
		parent::__construct();

		// $this->load->model('m_login');
		// session_start();
	}

	public function index(){
		$view['main']=$this->load->view('Login/V_login',@$view,TRUE);
		$this->load->view('Master_login',$view);
	}


	public function Proses_cek()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$cek = $this->db->query("SELECT username, password, hak_akses FROM t_admin WHERE username='$username' AND password='$password'");
		
		if($cek->num_rows() > 0) {

			$sesi = array(
						'login_admin' => TRUE,
						'username' => $cek->row()->username, 
						'password' => $cek->row()->password,
			);

			$this->session->set_userdata($sesi);

			if ($this->session->userdata('login_admin') == TRUE) {

				$this->session->set_flashdata('info-sukses','Selamat Datang di Sistem Informasi Bank Sampah Gemah Ripah Bantul');
				redirect('Admin/Admin');
				}
				else {

					$this->session->set_flashdata('info-gagal','Username atau Password yang anda masukkan salah');
					redirect('Login/Login');
				}
	}
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$cek= $this->db->query("SELECT username, password FROM t_nasabah WHERE username='$username' AND password='$password'");
	if($cek->num_rows() > 0) {

			$sesi = array(
						'login_nasabah' => TRUE,
						'username' => $cek->row()->username, 
						'password' => $cek->row()->password,
			);

			$this->session->set_userdata($sesi);

			if ($this->session->userdata('login_nasabah') == TRUE) {

				$this->session->set_flashdata('info-sukses','Selamat Datang di Sistem Informasi Bank Sampah Gemah Ripah Bantul');
				redirect('Nasabah/Nasabah');
				}
				else {

					$this->session->set_flashdata('info-gagal','Username atau Password yang anda masukkan salah');
					redirect('Login/Login');
				}
		}

	else {
			$this->session->set_flashdata('info-gagal','Username atau Password yang anda masukkan salah !');
			redirect('Login/Login');
		}
	}

	function Logout() 
	{
		$this->session->sess_destroy();

		redirect('Home/Home');	
	}

}