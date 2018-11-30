<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaInventaris extends CI_Controller {
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
		$this->load->model('model_peminjaman_inventaris');
	}
	
	//Inventaris//
	function showMasterInventaris()
	{
		$emails = $_SESSION["email"];
		$data['detailpegawai']=  $this->model_pegawai->get_fromEmail($emails)->row_array();
		$data['peminjaman_inventaris']= $this->model_peminjaman_inventaris->tampil_peminjamanInventaris()->result();
		$data['pegawai']= $this->model_pegawai->tampilpegawai()->result();
		$data['inventaris']= $this->model_inventaris->tampilinventaris()->result();
		//echo $this->db->last_query();
		//die();
		$this->template->load('templateDashboardAdmin','report/inventaris_view',$data);
	}
	
	function simpanPeminjamanInventaris()
		{
			if(isset($_POST['submit'])){
				// proses kategori
				$this->model_peminjaman_inventaris->simpan_PeminjamanInventaris();
				$this->session->set_flashdata('message', 'Data Berhasil Diinput');
				redirect('KelolaInventaris/showMasterInventaris');
			}
			else{
				$this->template->load('templateDashboardAdmin','report/inventaris_view');
			}
	}
	
	function hapusPeminjamanInventaris()
	{
		$id=  $this->uri->segment(3);
		//print($id);die();
		$this->model_peminjaman_inventaris->hapusPeminjamanInventaris($id);
		$this->session->set_flashdata('message', 'Data Berhasil Dihapus');
		redirect('KelolaInventaris/showMasterInventaris');
	}
	
	function editPeminjamanInventarisSetuju()
	{
		$dataa['id']=  $this->uri->segment(3);
		$dataa['status']= "Setuju";
		$this->model_peminjaman_inventaris->editPeminjamanInventaris($dataa);
		//echo $this->db->last_query();
		//die();
		$this->session->set_flashdata('message', 'Data Berhasil Diedit');
		redirect('KelolaInventaris/showMasterInventaris');
	}
	
	function editPeminjamanInventarisTidakSetuju()
	{
		$dataa['id']=  $this->uri->segment(3);
		$dataa['status']= "TidakSetuju";
		$this->model_peminjaman_inventaris->editPeminjamanInventaris($dataa);
		//echo $this->db->last_query();
		//die();
		$this->session->set_flashdata('message', 'Data Berhasil Diedit');
		redirect('KelolaInventaris/showMasterInventaris');
	}
	
	function editPeminjamanInventarisMenunggu()
	{
		$dataa['id']=  $this->uri->segment(3);
		$dataa['status']= "Menunggu";
		$this->model_peminjaman_inventaris->editPeminjamanInventaris($dataa);
		//echo $this->db->last_query();
		//die();
		$this->session->set_flashdata('message', 'Data Berhasil Diedit');
		redirect('KelolaInventaris/showMasterInventaris');
	}
}
