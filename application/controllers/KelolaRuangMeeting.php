<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaRuangMeeting extends CI_Controller {
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
		$this->load->model('model_peminjaman_ruangMeeting');
	}
	
	//RuangMeeting//
	function showMasterRuangMeeting()
	{
		$emails = $_SESSION["email"];
		$data['detailpegawai']=  $this->model_pegawai->get_fromEmail($emails)->row_array();
		$data['peminjaman_ruangMeeting']= $this->model_peminjaman_ruangMeeting->tampil_peminjamanRuangMeeting()->result();
		$data['ketersediaan_ruangMeeting']= $this->model_peminjaman_ruangMeeting->tampil_ketersediaanRuangMeeting()->result();
		$data['pegawai']= $this->model_pegawai->tampilpegawai()->result();
		$data['ruangMeeting']= $this->model_ruangMeeting->tampilruangMeeting()->result();
		//echo $this->db->last_query();
		//die();
		$this->template->load('templateDashboardAdmin','report/ruangMeeting_view',$data);
	}
	
	function simpanPeminjamanRuangMeeting()
		{
			if(isset($_POST['submit'])){
				// proses kategori
				$this->model_peminjaman_ruangMeeting->simpan_PeminjamanRuangMeeting();
				$this->session->set_flashdata('message', 'Data Berhasil Diinput');
				redirect('KelolaRuangMeeting/showMasterRuangMeeting');
			}
			else{
				$this->template->load('templateDashboardAdmin','report/ruangMeeting_view');
			}
	}
	
	function hapusPeminjamanRuangMeeting()
	{
		$id=  $this->uri->segment(3);
		//print($id);die();
		$this->model_peminjaman_ruangMeeting->hapusPeminjamanRuangMeeting($id);
		$this->session->set_flashdata('message', 'Data Berhasil Dihapus');
		redirect('KelolaRuangMeeting/showMasterRuangMeeting');
	}
	
	function editPeminjamanRuangMeetingSetuju()
	{
		$dataa['id']=  $this->uri->segment(3);
		$dataa['status']= "Setuju";
		$this->model_peminjaman_ruangMeeting->editPeminjamanRuangMeeting($dataa);
		//echo $this->db->last_query();
		//die();
		$this->session->set_flashdata('message', 'Data Berhasil Diedit');
		redirect('KelolaRuangMeeting/showMasterRuangMeeting');
	}
	
	function editPeminjamanRuangMeetingTidakSetuju()
	{
		$dataa['id']=  $this->uri->segment(3);
		$dataa['status']= "TidakSetuju";
		$this->model_peminjaman_ruangMeeting->editPeminjamanRuangMeeting($dataa);
		//echo $this->db->last_query();
		//die();
		$this->session->set_flashdata('message', 'Data Berhasil Diedit');
		redirect('KelolaRuangMeeting/showMasterRuangMeeting');
	}
	
	function editPeminjamanRuangMeetingMenunggu()
	{
		$dataa['id']=  $this->uri->segment(3);
		$dataa['status']= "Menunggu";
		$this->model_peminjaman_ruangMeeting->editPeminjamanRuangMeeting($dataa);
		//echo $this->db->last_query();
		//die();
		$this->session->set_flashdata('message', 'Data Berhasil Diedit');
		redirect('KelolaRuangMeeting/showMasterRuangMeeting');
	}
}
