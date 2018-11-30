<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		//$this->load->view('login_view');
		$this->template->load('templateLogin','login_view');
	}
	
	function __construct() {
		parent::__construct();
		$this->load->model('model_pegawai');
	}
	
	function login()
	{
		if(isset($_POST['submit'])){
			
			// proses login disini
			session_start();
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$hasil= $this->model_pegawai->login($email,$password);
			if($hasil==0){
				redirect('Login');
			}else{
				if($hasil==1 OR $hasil==2 OR $hasil==3 OR $hasil==5)
				{
					$_SESSION["email"] = $email;
					redirect('DashboardAdmin');
				}
				else{
					//$this->session->set_flashdata('email', $email);
					$_SESSION["email"] = $email;
					redirect('DashboardUser');
				}
			}
		}
		else{
			//chek_session_login();
			$this->template->load('templateLogin','login_view');
		}
	}
	
	
	function logout()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}
}
