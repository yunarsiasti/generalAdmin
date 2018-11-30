<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaMaster extends CI_Controller {
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
		$this->load->model('model_peminjaman_inventaris');
		$this->load->model('model_peminjaman_ruangMeeting');
	}
	
	//Pegawai//
	function showMasterPegawai()
	{
		$data['pegawai']= $this->model_pegawai->tampilpegawai()->result();
		$data['jabatan']= $this->model_pegawai->tampiljabatan()->result();
		$this->template->load('templateDashboardAdmin','kelola_master/pegawai_view',$data);
	}
	
	function simpanPegawai()
		{
			if(isset($_POST['submit'])){
				// proses kategori
				$this->model_pegawai->simpanPegawai();
				$this->session->set_flashdata('message', 'Data Berhasil Diinput');
				redirect('KelolaMaster/showMasterPegawai');
			}
			else{
				$this->template->load('templateDashboardAdmin','kelola_master/pegawai_view');
			}
	}
	
	function hapusPegawai()
	{
		$id=  $this->uri->segment(3);
		//print($id);die();
		$this->model_pegawai->hapusPegawai($id);
		$this->session->set_flashdata('message', 'Data Berhasil Dihapus');
		redirect('KelolaMaster/showMasterPegawai');
	}
	
	function editPegawai()
	{
		if(isset($_POST['submit'])){
			// proses kategori
			$this->model_pegawai->editPegawai();
			$this->session->set_flashdata('message', 'Data Berhasil Diedit');
			redirect('KelolaMaster/showMasterPegawai');
		}
		else{
			$id=  $this->uri->segment(3);
			$data['record']=  $this->model_pegawai->get_one($id)->row_array();
			$data['jabatan']= $this->model_pegawai->tampiljabatan()->result();
			$id_jabatan = $data['record']['id_jabatan'];
			$data['nama_jabatan']=  $this->model_pegawai->get_namaJabatan($id_jabatan)->row_array();
			$this->template->load('templateDashboardAdmin','kelola_master/edit_pegawai_view',$data);
		}
	}
	
	//Kehadiran//
	function showMasterKehadiran()
	{
		$data['kehadiran']= $this->model_kehadiran->tampilkehadiran()->result();
		$this->template->load('templateDashboardAdmin','kelola_master/kehadiran_view',$data);
	}
	
	function simpanKehadiran()
		{
			if(isset($_POST['submit'])){
				// proses kategori
				$this->model_kehadiran->simpanKehadiran();
				$this->session->set_flashdata('message', 'Data Berhasil Diinput');
				redirect('KelolaMaster/showMasterKehadiran');
			}
			else{
				$this->template->load('templateDashboardAdmin','kelola_master/kehadiran_view');
			}
	}
	
	function hapusKehadiran()
	{
		$id=  $this->uri->segment(3);
		//print($id);die();
		$this->model_kehadiran->hapusKehadiran($id);
		$this->session->set_flashdata('message', 'Data Berhasil Dihapus');
		redirect('KelolaMaster/showMasterKehadiran');
	}
	
	function editKehadiran()
	{
		if(isset($_POST['submit'])){
			// proses kategori
			$this->model_kehadiran->editKehadiran();
			$this->session->set_flashdata('message', 'Data Berhasil Diedit');
			redirect('KelolaMaster/showMasterKehadiran');
		}
		else{
			$id=  $this->uri->segment(3);
			$data['record']=  $this->model_kehadiran->get_one($id)->row_array();
			$this->template->load('templateDashboardAdmin','kelola_master/edit_kehadiran_view',$data);
		}
	}
	
	//Pagu//
	function showMasterPagu()
	{
		$data['pagu']= $this->model_pagu->tampilpagu()->result();
		$data['jabatan']= $this->model_pegawai->tampiljabatan()->result();
		$data['kehadiran']= $this->model_kehadiran->tampilkehadiran()->result();
		//echo"<pre>";print_r($data);echo"</pre>";die();
		$this->template->load('templateDashboardAdmin','kelola_master/pagu_view',$data);
	}
	
	function simpanPagu()
		{
			if(isset($_POST['submit'])){
				//echo"<pre>";print_r($_POST);echo"</pre>";die();
				// proses kategori
				$this->model_pagu->simpanPagu();
				$this->session->set_flashdata('message', 'Data Berhasil Diinput');
				redirect('KelolaMaster/showMasterPagu');
			}
			else{
				$this->template->load('templateDashboardAdmin','kelola_master/pagu_view');
			}
	}
	
	function hapusPagu()
	{
		$id=  $this->uri->segment(3);
		//print($id);die();
		$this->model_pagu->hapusPagu($id);
		$this->session->set_flashdata('message', 'Data Berhasil Dihapus');
		redirect('KelolaMaster/showMasterPagu');
	}
	
	function editPagu()
	{
		if(isset($_POST['submit'])){
			// proses kategori
			$this->model_pagu->editPagu();
			$this->session->set_flashdata('message', 'Data Berhasil Diedit');
			redirect('KelolaMaster/showMasterPagu');
		}
		else{
			$id=  $this->uri->segment(3);
			$data['record']=  $this->model_pagu->get_one($id)->row_array();
			//echo"<pre>";print_r($data);echo"</pre>";
			//echo $this->db->last_query();
			//die();
			
			$data['jabatan']= $this->model_pegawai->tampiljabatan()->result();
			$id_jabatan = $data['record']['id_jabatan'];
			$data['nama_jabatan']=  $this->model_pegawai->get_namaJabatan($id_jabatan)->row_array();
			
			$data['kehadiran']= $this->model_kehadiran->tampilkehadiran()->result();
			$id_kehadiran = $data['record']['id_kehadiran'];
			$data['nama_kehadiran']=  $this->model_kehadiran->get_namaKehadiran($id_kehadiran)->row_array();
			
			$this->template->load('templateDashboardAdmin','kelola_master/edit_pagu_view',$data);
		}
	}
	
	//Inventaris//
	function showMasterInventaris()
	{
		$data['inventaris']= $this->model_inventaris->tampilinventaris()->result();
		$this->template->load('templateDashboardAdmin','kelola_master/inventaris_view',$data);
	}
	
	function simpanInventaris()
		{
			if(isset($_POST['submit'])){
				// proses kategori
				$this->model_inventaris->simpanInventaris();
				$this->session->set_flashdata('message', 'Data Berhasil Diinput');
				redirect('KelolaMaster/showMasterInventaris');
			}
			else{
				$this->template->load('templateDashboardAdmin','kelola_master/inventaris_view');
			}
	}
	
	function hapusInventaris()
	{
		$id=  $this->uri->segment(3);
		//print($id);die();
		$this->model_inventaris->hapusInventaris($id);
		$this->session->set_flashdata('message', 'Data Berhasil Dihapus');
		redirect('KelolaMaster/showMasterInventaris');
	}
	
	function editInventaris()
	{
		if(isset($_POST['submit'])){
			// proses kategori
			$this->model_inventaris->editInventaris();
			$this->session->set_flashdata('message', 'Data Berhasil Diedit');
			redirect('KelolaMaster/showMasterInventaris');
		}
		else{
			$id=  $this->uri->segment(3);
			$data['record']=  $this->model_inventaris->get_one($id)->row_array();
			$this->template->load('templateDashboardAdmin','kelola_master/edit_inventaris_view',$data);
		}
	}
	
	//Ruang Meeting//
	function showMasterRuangMeeting()
	{
		$data['ruang_meeting']= $this->model_ruangMeeting->tampilruangMeeting()->result();
		$this->template->load('templateDashboardAdmin','kelola_master/ruangMeeting_view',$data);
	}
	
	function simpanRuangMeeting()
		{
			if(isset($_POST['submit'])){
				// proses kategori
				$this->model_ruangMeeting->simpanRuangMeeting();
				$this->session->set_flashdata('message', 'Data Berhasil Diinput');
				redirect('KelolaMaster/showMasterRuangMeeting');
			}
			else{
				$this->template->load('templateDashboardAdmin','kelola_master/ruangMeeting_view');
			}
	}
	
	function hapusRuangMeeting()
	{
		$id=  $this->uri->segment(3);
		//print($id);die();
		$this->model_ruangMeeting->hapusRuangMeeting($id);
		$this->session->set_flashdata('message', 'Data Berhasil Dihapus');
		redirect('KelolaMaster/showMasterRuangMeeting');
	}
	
	function editRuangMeeting()
	{
		if(isset($_POST['submit'])){
			// proses kategori
			$this->model_ruangMeeting->editRuangMeeting();
			$this->session->set_flashdata('message', 'Data Berhasil Diedit');
			redirect('KelolaMaster/showMasterRuangMeeting');
		}
		else{
			$id=  $this->uri->segment(3);
			$data['record']=  $this->model_ruangMeeting->get_one($id)->row_array();
			$this->template->load('templateDashboardAdmin','kelola_master/edit_ruangMeeting_view',$data);
		}
	}
	
	//Detail Pegawai//
	function detailPegawai()
	{
		$id=  $this->uri->segment(3);
		$data['pegawai']=  $this->model_pegawai->get_one($id)->row_array();
		$id_jabatan = $data['pegawai']['id_jabatan'];
		$data['nama_jabatan']=  $this->model_pegawai->get_namaJabatan($id_jabatan)->row_array();
		$data['kehadiranPegawai']=  $this->model_kehadiran_pegawai->tampilDetail_kehadiranPegawai($id)->result();
		$data['jumlahCutiKehadiranPegawai']=  $this->model_kehadiran_pegawai->sum_cutiKehadiranPegawai($id)->result();
		$data['sisaCutiKehadiranPegawai']=  $this->model_kehadiran_pegawai->sum_sisaCutiKehadiranPegawai($id)->result();
		$data['jumlahLemburKehadiranPegawai']=  $this->model_kehadiran_pegawai->sum_lemburpegawai($id)->result();
		$data['totalLemburKehadiranPegawai']=  $this->model_kehadiran_pegawai->sum_totallemburpegawai($id)->result();
		$data['jumlahDinasLuarKehadiranPegawai']=  $this->model_kehadiran_pegawai->sum_dinasluarpegawai($id)->result();
		$data['totalDinasLuarKehadiranPegawai']=  $this->model_kehadiran_pegawai->sum_totaldinasluarpegawai($id)->result();
		$data['peminjamanInventaris']=  $this->model_peminjaman_inventaris->tampilDetail_peminjamanInventaris($id)->result();
		$data['peminjamanRuangMeeting']=  $this->model_peminjaman_ruangMeeting->tampilDetail_peminjamanRuangMeeting($id)->result();
		$this->template->load('templateDashboardAdmin','kelola_master/detail_pegawai_view',$data);
	}
}
