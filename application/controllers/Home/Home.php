<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		//$view['main']=$this->load->view('Home/V_home',@$view,TRUE);
		$this->load->view('Master_ui');

	}

	public function Login(){
		$view['main']=$this->load->view('Login/V_login',@$view,TRUE);
		$this->load->view('Master_home',$view);
	}
}
