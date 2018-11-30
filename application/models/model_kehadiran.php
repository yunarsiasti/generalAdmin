<?php
class model_kehadiran extends CI_Model{
		
	function tampilkehadiran()
	{
		return $this->db->get('kehadiran');
	}
	
	function simpanKehadiran(){
		$data=array(
		'nama_kehadiran'=>  $this->input->post('nama_kehadiran'),
		'status_kehadiran'=>  $this->input->post('status_kehadiran'),
		'created_by'=>  'admin',
		'modified_by'=>  'admin',
		);
		$this->db->set('created_at', 'NOW()', FALSE);
		$this->db->insert('kehadiran',$data);
	}
	
	function hapusKehadiran($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('kehadiran');
	}
	
	function editKehadiran()
	{
		$data=array(
		'nama_kehadiran'=>  $this->input->post('nama_kehadiran'),
		'status_kehadiran'=>  $this->input->post('status_kehadiran'),
		'created_by'=>  'admin',
		'modified_by'=>  'admin',
		);
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('kehadiran',$data);
	}
	
	function get_one($id)
	{
		$param = array('id'=>$id);
		return $this->db->get_where('kehadiran',$param);
	}
	
	function get_namaKehadiran($id_kehadiran)
	{
		$this->db->select('nama_kehadiran');
		$this->db->from('kehadiran');
		$this->db->where('id',$id_kehadiran);
		$query = $this->db->get();
		return $query;
	}
	
}