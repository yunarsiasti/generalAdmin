<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaDinasLuarUser extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('model_pegawai');
		$this->load->model('model_kehadiran');
		$this->load->model('model_pagu');
		$this->load->model('model_inventaris');
		$this->load->model('model_ruangMeeting');
		$this->load->model('model_kehadiran_pegawai');
	}
	
	//DinasLuar//
	function showMasterDinasLuar()
	{
		$emails = $_SESSION["email"];
		$data['nama_pegawai']=  $this->model_pegawai->get_fromEmail($emails)->row_array();
		$data['kehadiran_pegawai']= $this->model_kehadiran_pegawai->tampil_DinasLuarkehadiranPegawai()->result();
		$data['pegawai']= $this->model_pegawai->tampilpegawai()->result();
		$data['jabatan']= $this->model_pegawai->tampiljabatan()->result();
		$data['kehadiran']= $this->model_kehadiran->tampilkehadiran()->result();
		//echo $this->db->last_query();
		//die();
		$this->template->load('templateDashboardUser','report/dinasLuar_user_view',$data);
	}
	
	function simpanDinasLuar()
		{
			if(isset($_POST['submit'])){
				// proses kategori
				$this->model_kehadiran_pegawai->simpan_KehadiranPegawai();
				$this->session->set_flashdata('message', 'Data Berhasil Diinput');
				redirect('KelolaDinasLuarUser/showMasterDinasLuar');
			}
			else{
				$this->template->load('templateDashboardUser','report/dinasLuar_user_view');
			}
	}
}
