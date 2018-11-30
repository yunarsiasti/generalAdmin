<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaInventarisUser extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('model_pegawai');
		$this->load->model('model_kehadiran');
		$this->load->model('model_pagu');
		$this->load->model('model_inventaris');
		$this->load->model('model_ruangMeeting');
		$this->load->model('model_peminjaman_inventaris');
	}
	
	//Inventaris//
	function showMasterInventaris()
	{
		$emails = $_SESSION["email"];
		$data['nama_pegawai']=  $this->model_pegawai->get_fromEmail($emails)->row_array();
		$data['peminjaman_inventaris']= $this->model_peminjaman_inventaris->tampil_peminjamanInventaris()->result();
		$data['pegawai']= $this->model_pegawai->tampilpegawai()->result();
		$data['inventaris']= $this->model_inventaris->tampilinventaris()->result();
		//echo $this->db->last_query();
		//die();
		$this->template->load('templateDashboardUser','report/inventaris_user_view',$data);
	}
	
	function simpanPeminjamanInventaris()
		{
			if(isset($_POST['submit'])){
				// proses kategori
				$this->model_peminjaman_inventaris->simpan_PeminjamanInventaris();
				$this->session->set_flashdata('message', 'Data Berhasil Diinput');
				redirect('KelolaInventarisUser/showMasterInventaris');
			}
			else{
				$this->template->load('templateDashboardUser','report/inventaris_user_view');
			}
	}
}
