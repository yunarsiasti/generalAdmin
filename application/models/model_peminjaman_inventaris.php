<?php
class model_peminjaman_inventaris extends CI_Model{
	
	function tampil_peminjamanInventaris()
	{
		//return $this->db->get('peminjaman_inventari');
		
		$this->db->select('*,peminjaman_inventari.id AS id_peminjamanInventari');
		$this->db->from('peminjaman_inventari');
		$this->db->join('pegawai', 'pegawai.id = peminjaman_inventari.id_pegawai');
		$this->db->join('inventari', 'inventari.id = peminjaman_inventari.id_inventari');
		$this->db->order_by("id_peminjamanInventari","asc");
		$query = $this->db->get();
		return $query;
	}
	
	function simpan_PeminjamanInventaris(){
		$data=array(
		'id_pegawai'=>  $this->input->post('pegawai'),
		'id_inventari'=>  $this->input->post('inventaris'),
		'start_time'=>  $this->input->post('start_time'),
		'end_time'=>  $this->input->post('end_time'),
		'kebutuhan'=>  $this->input->post('kebutuhan'),
		'status'=>  $this->input->post('status'),
		'created_by'=>  $this->input->post('created_by'),
		'modified_by'=>  'admin',
		);
		$this->db->set('created_at', 'NOW()', FALSE);
		$this->db->insert('peminjaman_inventari',$data);
	}
	
	function hapusPeminjamanInventaris($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('peminjaman_inventari');
	}
	
	function editPeminjamanInventaris($dataa)
	{
		$id = $dataa['id'];
		$status = $dataa['status'];
		
		$data=array(
		'status'=>  $status,
		'modified_by'=>  'admin',
		);
		$this->db->where('id',$id);
		$this->db->update('peminjaman_inventari',$data);
	}
	
	function dashboard_peminjamanInventarisBulan()
	{
		//return $this->db->get('peminjaman_inventari');
		
		$this->db->select('*,peminjaman_inventari.id AS id_peminjamanInventari, COUNT(*) AS count_inventari');
		$this->db->from('peminjaman_inventari');
		$this->db->join('pegawai', 'pegawai.id = peminjaman_inventari.id_pegawai');
		$this->db->join('inventari', 'inventari.id = peminjaman_inventari.id_inventari');
		$this->db->like("peminjaman_inventari.start_time","2018-08");
		$this->db->group_by("inventari.id");
		$this->db->order_by("peminjaman_inventari.start_time","desc");
		$query = $this->db->get();
		return $query;
	}
	
	function sum_peminjamanInventarisBulan()
	{
		$this->db->select('COUNT(id_pegawai) AS sum_peminjaman');
		$this->db->from('peminjaman_inventari');
		$this->db->like("peminjaman_inventari.start_time","2018-08");
		$query = $this->db->get();
		return $query;
	}
	
	function dashboard_peminjamanInventarisTahun()
	{
		//return $this->db->get('peminjaman_inventari');
		
		$this->db->select('*,peminjaman_inventari.id AS id_peminjamanInventari, COUNT(*) AS count_inventari');
		$this->db->from('peminjaman_inventari');
		$this->db->join('pegawai', 'pegawai.id = peminjaman_inventari.id_pegawai');
		$this->db->join('inventari', 'inventari.id = peminjaman_inventari.id_inventari');
		//$this->db->like("peminjaman_inventari.start_time","2018-08");
		$this->db->group_by("inventari.id");
		$this->db->order_by("peminjaman_inventari.start_time","desc");
		$query = $this->db->get();
		return $query;
	}
	
	function sum_peminjamanInventarisTahun()
	{
		$this->db->select('COUNT(id_pegawai) AS sum_peminjaman');
		$this->db->from('peminjaman_inventari');
		//$this->db->like("peminjaman_inventari.start_time","2018-08");
		$query = $this->db->get();
		return $query;
	}
	
	function tampilDetail_peminjamanInventaris($id)
	{
		//return $this->db->get('peminjaman_inventari');
		
		$this->db->select('*,peminjaman_inventari.id AS id_peminjamanInventari');
		$this->db->from('peminjaman_inventari');
		$this->db->join('pegawai', 'pegawai.id = peminjaman_inventari.id_pegawai');
		$this->db->join('inventari', 'inventari.id = peminjaman_inventari.id_inventari');
		$this->db->order_by("id_peminjamanInventari","asc");
		$this->db->where('id_pegawai',$id);
		$query = $this->db->get();
		return $query;
	}
	
}