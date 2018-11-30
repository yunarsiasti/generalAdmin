<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardUser extends CI_Controller {
	public function index()
	{
		//$this->load->view('login_view');
		//$emails = $this->session->flashdata('email');
		//$this->session->set_flashdata('email', $emails);
		//print($_SESSION["email"]);die();
		$emails = $_SESSION["email"];
		//$data['pegawai']= $this->model_pegawai->tampilpegawai()->result();
		$data['pegawai']=  $this->model_pegawai->get_fromEmail($emails)->row_array();
		$data['jabatan']= $this->model_pegawai->tampiljabatan()->result();
		$data['kehadiran']= $this->model_kehadiran->tampilkehadiran()->result();
		$this->template->load('templateDashboardUser','dashboard_user_view',$data);
		//$this->template->load('templateDashboardUser','dashboard_user_view');
	}
	
	function __construct() {
		parent::__construct();
		$this->load->model('model_pegawai');
		$this->load->model('model_kehadiran');
		$this->load->model('model_pagu');
		$this->load->model('model_inventaris');
		$this->load->model('model_ruangMeeting');
		$this->load->model('model_kehadiran_pegawai');
	}
	
	//Absen//
	function showMasterLembur()
	{
		$data['pegawai']= $this->model_pegawai->tampilpegawai()->result();
		$data['jabatan']= $this->model_pegawai->tampiljabatan()->result();
		$data['kehadiran']= $this->model_kehadiran->tampilkehadiran()->result();
		$this->template->load('templateDashboardUser','dashboard_user_view',$data);
	}
	
	function simpanKehadiran()
		{
			if(isset($_POST['submit'])){
				// proses kategori
				$this->model_kehadiran_pegawai->simpan_KehadiranPegawai();
				$this->session->set_flashdata('message', 'Data Berhasil Diinput');
				redirect('KelolaLemburUser/showMasterLembur');
			}
			else{
				$this->template->load('templateDashboardUser','dashboard_user_view');
			}
	}
	
	function login()
	{
		if(isset($_POST['submit'])){
			
			// proses login disini
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$hasil= $this->model_pegawai->login($email,$password);
			if($hasil==0){
				redirect('Login');
			}else{
				if($hasil==1 OR $hasil==2 OR $hasil==3)
				{
					redirect('DashboardAdmin');
				}
				else{
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
		redirect('auth/login');
	}
}
