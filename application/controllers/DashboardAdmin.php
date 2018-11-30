<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardAdmin extends CI_Controller {
	public function index()
	{
		//$this->load->view('login_view');
		$emails = $_SESSION["email"];
		$data['pegawai']=  $this->model_pegawai->get_fromEmail($emails)->row_array();
		$data['kehadiran_pegawai_bulan']= $this->model_kehadiran_pegawai->dashboard_kehadiranPegawaiBulan()->result();
		$data['sum_kehadiran_pegawai_bulan']= $this->model_kehadiran_pegawai->sum_kehadiranPegawaiBulan()->result();
		$data['kehadiran_pegawai_tahun']= $this->model_kehadiran_pegawai->dashboard_kehadiranPegawaiTahun()->result();
		$data['sum_kehadiran_pegawai_tahun']= $this->model_kehadiran_pegawai->sum_kehadiranPegawaiTahun()->result();
		$data['peminjaman_inventaris_bulan']= $this->model_peminjaman_inventaris->dashboard_peminjamanInventarisBulan()->result();
		$data['sum_peminjaman_inventaris_bulan']= $this->model_peminjaman_inventaris->sum_peminjamanInventarisBulan()->result();
		$data['peminjaman_inventaris_tahun']= $this->model_peminjaman_inventaris->dashboard_peminjamanInventarisTahun()->result();
		$data['sum_peminjaman_inventaris_tahun']= $this->model_peminjaman_inventaris->sum_peminjamanInventarisTahun()->result();
		$data['peminjaman_ruangMeeting_bulan']= $this->model_peminjaman_ruangMeeting->dashboard_peminjamanRuangMeetingBulan()->result();
		$data['sum_peminjaman_ruangMeeting_bulan']= $this->model_peminjaman_ruangMeeting->sum_peminjamanRuangMeetingBulan()->result();
		$data['peminjaman_ruangMeeting_tahun']= $this->model_peminjaman_ruangMeeting->dashboard_peminjamanRuangMeetingTahun()->result();
		$data['sum_peminjaman_ruangMeeting_tahun']= $this->model_peminjaman_ruangMeeting->sum_peminjamanRuangMeetingTahun()->result();
		//echo $this->db->last_query();
		//die();
		$this->template->load('templateDashboardAdmin','dashboard_admin_view',$data);
	}
	
	function __construct() {
		parent::__construct();
		$this->load->model('model_pegawai');
		$this->load->model('model_kehadiran');
		$this->load->model('model_pagu');
		$this->load->model('model_inventaris');
		$this->load->model('model_ruangMeeting');
		$this->load->model('model_kehadiran_pegawai');
		$this->load->model('model_peminjaman_inventaris');
		$this->load->model('model_peminjaman_ruangMeeting');
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
