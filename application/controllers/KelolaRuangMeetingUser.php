<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaRuangMeetingUser extends CI_Controller {
	
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
		$data['nama_pegawai']=  $this->model_pegawai->get_fromEmail($emails)->row_array();
		$data['peminjaman_ruangMeeting']= $this->model_peminjaman_ruangMeeting->tampil_peminjamanRuangMeeting()->result();
		$data['ketersediaan_ruangMeeting']= $this->model_peminjaman_ruangMeeting->tampil_ketersediaanRuangMeeting()->result();
		$data['pegawai']= $this->model_pegawai->tampilpegawai()->result();
		$data['ruangMeeting']= $this->model_ruangMeeting->tampilruangMeeting()->result();
		//echo $this->db->last_query();
		//die();
		$this->template->load('templateDashboardUser','report/ruangMeeting_user_view',$data);
	}
	
	function simpanPeminjamanRuangMeeting()
		{
			if(isset($_POST['submit'])){
				// proses kategori
				$this->model_peminjaman_ruangMeeting->simpan_PeminjamanRuangMeeting();
				$this->session->set_flashdata('message', 'Data Berhasil Diinput');
				redirect('KelolaRuangMeetingUser/showMasterRuangMeeting');
			}
			else{
				$this->template->load('templateDashboardUser','report/ruangMeeting_user_view');
			}
	}
}
