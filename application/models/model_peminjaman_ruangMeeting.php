<?php
class model_peminjaman_ruangMeeting extends CI_Model{
	
	function tampil_peminjamanRuangMeeting()
	{
		//return $this->db->get('peminjaman_ruangmeeting');
		
		$this->db->select('*,peminjaman_ruangmeeting.id AS id_peminjamanRuangMeeting');
		$this->db->from('peminjaman_ruangmeeting');
		$this->db->join('pegawai', 'pegawai.id = peminjaman_ruangmeeting.id_pegawai');
		$this->db->join('ruang_meeting', 'ruang_meeting.id = peminjaman_ruangmeeting.id_ruangMeeting');
		$this->db->order_by("id_peminjamanRuangMeeting","asc");
		$query = $this->db->get();
		return $query;
	}
	
	function tampil_ketersediaanRuangMeeting()
	{
		//return $this->db->get('peminjaman_ruangmeeting');
		
		$this->db->select('3 - COUNT(id_ruangMeeting) AS terpakai');
		$this->db->from('peminjaman_ruangmeeting');
		$this->db->join('ruang_meeting', 'ruang_meeting.id = peminjaman_ruangmeeting.id_ruangMeeting');
		$this->db->where("start_time","CURDATE()", FALSE);
		$query = $this->db->get();
		return $query;
	}
	
	function simpan_PeminjamanRuangMeeting(){
		$data=array(
		'id_pegawai'=>  $this->input->post('pegawai'),
		'id_ruangMeeting'=>  $this->input->post('ruangMeeting'),
		'start_time'=>  $this->input->post('start_time'),
		'end_time'=>  $this->input->post('end_time'),
		'kebutuhan'=>  $this->input->post('kebutuhan'),
		'status'=>  $this->input->post('status'),
		'created_by'=>  $this->input->post('created_by'),
		'modified_by'=>  'admin',
		);
		$this->db->set('created_at', 'NOW()', FALSE);
		$this->db->insert('peminjaman_ruangmeeting',$data);
	}
	
	function hapusPeminjamanRuangMeeting($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('peminjaman_ruangmeeting');
	}
	
	function editPeminjamanRuangMeeting($dataa)
	{
		$id = $dataa['id'];
		$status = $dataa['status'];
		
		$data=array(
		'status'=>  $status,
		'modified_by'=>  'admin',
		);
		$this->db->where('id',$id);
		$this->db->update('peminjaman_ruangmeeting',$data);
	}
	
	function dashboard_peminjamanRuangMeetingBulan()
	{
		//return $this->db->get('peminjaman_ruangmeeting');
		
		$this->db->select('*,peminjaman_ruangmeeting.id AS id_peminjamanRuangMeeting, COUNT(*) AS count_ruangMeeting');
		$this->db->from('peminjaman_ruangmeeting');
		$this->db->join('pegawai', 'pegawai.id = peminjaman_ruangmeeting.id_pegawai');
		$this->db->join('ruang_meeting', 'ruang_meeting.id = peminjaman_ruangmeeting.id_ruangMeeting');
		$this->db->like("peminjaman_ruangmeeting.start_time","2018-08");
		$this->db->group_by("ruang_meeting.id");
		$this->db->order_by("peminjaman_ruangmeeting.start_time","desc");
		$query = $this->db->get();
		return $query;
	}
	
	function sum_peminjamanRuangMeetingBulan()
	{
		$this->db->select('COUNT(id_pegawai) AS sum_peminjaman');
		$this->db->from('peminjaman_ruangmeeting');
		$this->db->like("peminjaman_ruangmeeting.start_time","2018-08");
		$query = $this->db->get();
		return $query;
	}
	
	function dashboard_peminjamanRuangMeetingTahun()
	{
		//return $this->db->get('peminjaman_ruangmeeting');
		
		$this->db->select('*,peminjaman_ruangmeeting.id AS id_peminjamanRuangMeeting, COUNT(*) AS count_ruangMeeting');
		$this->db->from('peminjaman_ruangmeeting');
		$this->db->join('pegawai', 'pegawai.id = peminjaman_ruangmeeting.id_pegawai');
		$this->db->join('ruang_meeting', 'ruang_meeting.id = peminjaman_ruangmeeting.id_ruangMeeting');
		//$this->db->like("peminjaman_ruangmeeting.start_time","2018-08");
		$this->db->group_by("ruang_meeting.id");
		$this->db->order_by("peminjaman_ruangmeeting.start_time","desc");
		$query = $this->db->get();
		return $query;
	}
	
	function sum_peminjamanRuangMeetingTahun()
	{
		$this->db->select('COUNT(id_pegawai) AS sum_peminjaman');
		$this->db->from('peminjaman_ruangmeeting');
		//$this->db->like("peminjaman_ruangmeeting.start_time","2018-08");
		$query = $this->db->get();
		return $query;
	}
	
	function tampilDetail_peminjamanRuangMeeting($id)
	{
		//return $this->db->get('peminjaman_ruangmeeting');
		
		$this->db->select('*,peminjaman_ruangmeeting.id AS id_peminjamanRuangMeeting');
		$this->db->from('peminjaman_ruangmeeting');
		$this->db->join('pegawai', 'pegawai.id = peminjaman_ruangmeeting.id_pegawai');
		$this->db->join('ruang_meeting', 'ruang_meeting.id = peminjaman_ruangmeeting.id_ruangMeeting');
		$this->db->order_by("id_peminjamanRuangMeeting","asc");
		$this->db->where('id_pegawai',$id);
		$query = $this->db->get();
		return $query;
	}
	
}