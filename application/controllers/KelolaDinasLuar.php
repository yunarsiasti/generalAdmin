<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaDinasLuar extends CI_Controller {
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
	
	//UploadFile//
	function upload_dinasLuar()
	{
		$this->template->load('templateDashboardAdmin','report/upload_dinasLuar_view');
	}
	function upload_file()
	{
		$config['upload_path']		= './assets/uploads/';
		$config['allowed_types']	= 'gif|jpg|png';
		$config['max_size']			= 100;
		$config['max_width']		= 1024;
		$config['max_height']		= 768;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$this->session->set_flashdata('message', 'Upload Gagal');
			redirect('KelolaDinasLuar/showMasterDinasLuar');
		}else{
			$this->session->set_flashdata('message', 'Upload Berhasil');
			redirect('KelolaDinasLuar/showMasterDinasLuar');
		}
	}
	
	//DinasLuar//
	function showMasterDinasLuar()
	{
		$emails = $_SESSION["email"];
		$data['detailpegawai']=  $this->model_pegawai->get_fromEmail($emails)->row_array();
		$data['kehadiran_pegawai']= $this->model_kehadiran_pegawai->tampil_DinasLuarkehadiranPegawai()->result();
		$data['pegawai']= $this->model_pegawai->tampilpegawai()->result();
		$data['jabatan']= $this->model_pegawai->tampiljabatan()->result();
		$data['kehadiran']= $this->model_kehadiran->tampilkehadiran()->result();
		//echo $this->db->last_query();
		//die();
		$this->template->load('templateDashboardAdmin','report/dinasLuar_view',$data);
	}
	
	function simpanDinasLuar()
		{
			if(isset($_POST['submit'])){
				// proses kategori
				$this->model_kehadiran_pegawai->simpan_KehadiranPegawai();
				$this->session->set_flashdata('message', 'Data Berhasil Diinput');
				redirect('KelolaDinasLuar/showMasterDinasLuar');
			}
			else{
				$this->template->load('templateDashboardAdmin','report/dinasLuar_view');
			}
	}
	
	function hapusDinasLuar()
	{
		$id=  $this->uri->segment(3);
		//print($id);die();
		$this->model_kehadiran_pegawai->hapusKehadiranPegawai($id);
		$this->session->set_flashdata('message', 'Data Berhasil Dihapus');
		redirect('KelolaDinasLuar/showMasterDinasLuar');
	}
	
	function editDinasLuarSetuju()
	{
		$dataa['id']=  $this->uri->segment(3);
		$dataa['status']= "Setuju";
		$this->model_kehadiran_pegawai->editKehadiranPegawai($dataa);
		//echo $this->db->last_query();
		//die();
		$this->session->set_flashdata('message', 'Data Berhasil Diedit');
		redirect('KelolaDinasLuar/showMasterDinasLuar');
	}
	
	function editDinasLuarTidakSetuju()
	{
		$dataa['id']=  $this->uri->segment(3);
		$dataa['status']= "TidakSetuju";
		$this->model_kehadiran_pegawai->editKehadiranPegawai($dataa);
		//echo $this->db->last_query();
		//die();
		$this->session->set_flashdata('message', 'Data Berhasil Diedit');
		redirect('KelolaDinasLuar/showMasterDinasLuar');
	}
	
	function editDinasLuarMenunggu()
	{
		$dataa['id']=  $this->uri->segment(3);
		$dataa['status']= "Menunggu";
		$this->model_kehadiran_pegawai->editKehadiranPegawai($dataa);
		//echo $this->db->last_query();
		//die();
		$this->session->set_flashdata('message', 'Data Berhasil Diedit');
		redirect('KelolaDinasLuar/showMasterDinasLuar');
	}
}
