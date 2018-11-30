<?php
class model_ruangMeeting extends CI_Model{
		
	function tampilruangMeeting()
	{
		return $this->db->get('ruang_meeting');
	}
	
	function simpanRuangMeeting(){
		$data=array(
		'nama_ruangMeeting'=>  $this->input->post('nama_ruangMeeting'),
		'status_ruangMeeting'=>  $this->input->post('status_ruangMeeting'),
		'created_by'=>  'admin',
		'modified_by'=>  'admin',
		);
		$this->db->set('created_at', 'NOW()', FALSE);
		$this->db->insert('ruang_meeting',$data);
	}
	
	function hapusRuangMeeting($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('ruang_meeting');
	}
	
	function editRuangMeeting()
	{
		$data=array(
		'nama_ruangMeeting'=>  $this->input->post('nama_ruangMeeting'),
		'status_ruangMeeting'=>  $this->input->post('status_ruangMeeting'),
		'created_by'=>  'admin',
		'modified_by'=>  'admin',
		);
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('ruang_meeting',$data);
	}
	
	function get_one($id)
	{
		$param = array('id'=>$id);
		return $this->db->get_where('ruang_meeting',$param);
	}
	
	function get_namaRuangMeeting($id_inventari)
	{
		$this->db->select('nama_ruangMeeting');
		$this->db->from('ruang_meeting');
		$this->db->where('id',$id_ruangMeeting);
		$query = $this->db->get();
		return $query;
	}
	
}