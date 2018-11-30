<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaCuti extends CI_Controller {
	//public function index()
	//{
	//	//$this->load->view('login_view');
	//	$this->template->load('templateDashboardAdmin','kelola_master/pegawai_view');
	//}
	
	function __construct() {
		parent::__construct();
		$this->load->model('model_pegawai');
		$this->load->model('model_kehadiran');
		$this->load->model('model_pagu');
		$this->load->model('model_inventaris');
		$this->load->model('model_ruangMeeting');
		$this->load->model('model_kehadiran_pegawai');
	}
	
	//CutiMelahirkan//
	function showMasterCutiMelahirkan()
	{
		$emails = $_SESSION["email"];
		$data['detailpegawai']=  $this->model_pegawai->get_fromEmail($emails)->row_array();
		$data['kehadiran_pegawai']= $this->model_kehadiran_pegawai->tampil_CutiMelahirkankehadiranPegawai()->result();
		$data['pegawai']= $this->model_pegawai->tampilpegawai()->result();
		$data['jabatan']= $this->model_pegawai->tampiljabatan()->result();
		$data['kehadiran']= $this->model_kehadiran->tampilkehadiran()->result();
		$this->template->load('templateDashboardAdmin','report/cuti_melahirkan_view',$data);
	}
	
	function simpanCutiMelahirkan()
		{
			if(isset($_POST['submit'])){
				// proses kategori
				$this->model_kehadiran_pegawai->simpan_KehadiranPegawai();
				$this->session->set_flashdata('message', 'Data Berhasil Diinput');
				//echo $this->db->last_query();
				//die();
				redirect('KelolaCuti/showMasterCutiMelahirkan');
			}
			else{
				$this->template->load('templateDashboardAdmin','report/cuti_view');
			}
	}
	
	//Cuti//
	function showMasterCuti()
	{
		$emails = $_SESSION["email"];
		$data['detailpegawai']=  $this->model_pegawai->get_fromEmail($emails)->row_array();
		$data['kehadiran_pegawai']= $this->model_kehadiran_pegawai->tampil_CutikehadiranPegawai()->result();
		$data['pegawai']= $this->model_pegawai->tampilpegawai()->result();
		$data['jabatan']= $this->model_pegawai->tampiljabatan()->result();
		$data['kehadiran']= $this->model_kehadiran->tampilkehadiran()->result();
		//echo $this->db->last_query();
		//die();
		$this->template->load('templateDashboardAdmin','report/cuti_view',$data);
	}
	
	function simpanCuti()
		{
			if(isset($_POST['submit'])){
				// proses kategori
				$this->model_kehadiran_pegawai->simpan_KehadiranPegawai();
				$this->session->set_flashdata('message', 'Data Berhasil Diinput');
				redirect('KelolaCuti/showMasterCuti');
			}
			else{
				$this->template->load('templateDashboardAdmin','report/cuti_view');
			}
	}
	
	function hapusCuti()
	{
		$id=  $this->uri->segment(3);
		//print($id);die();
		$this->model_kehadiran_pegawai->hapusKehadiranPegawai($id);
		$this->session->set_flashdata('message', 'Data Berhasil Dihapus');
		redirect('KelolaCuti/showMasterCuti');
	}
	
	function editCutiSetuju()
	{
		$dataa['id']=  $this->uri->segment(3);
		$dataa['status']= "Setuju";
		$this->model_kehadiran_pegawai->editKehadiranPegawai($dataa);
		//echo $this->db->last_query();
		//die();
		$this->session->set_flashdata('message', 'Data Berhasil Diedit');
		redirect('KelolaCuti/showMasterCuti');
	}
	
	function editCutiTidakSetuju()
	{
		$dataa['id']=  $this->uri->segment(3);
		$dataa['status']= "TidakSetuju";
		$this->model_kehadiran_pegawai->editKehadiranPegawai($dataa);
		//echo $this->db->last_query();
		//die();
		$this->session->set_flashdata('message', 'Data Berhasil Diedit');
		redirect('KelolaCuti/showMasterCuti');
	}
	
	function editCutiMenunggu()
	{
		$dataa['id']=  $this->uri->segment(3);
		$dataa['status']= "Menunggu";
		$this->model_kehadiran_pegawai->editKehadiranPegawai($dataa);
		//echo $this->db->last_query();
		//die();
		$this->session->set_flashdata('message', 'Data Berhasil Diedit');
		redirect('KelolaCuti/showMasterCuti');
	}
}
