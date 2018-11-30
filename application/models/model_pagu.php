<?php
class model_pagu extends CI_Model{
		
	function tampilpagu()
	{
		//return $this->db->get('pagu');
		
		$this->db->select('*,pagu.id AS id_pagu');
		$this->db->from('pagu');
		$this->db->join('jabatan', 'jabatan.id = pagu.id_jabatan');
		$this->db->join('kehadiran', 'kehadiran.id = pagu.id_kehadiran');
		$this->db->order_by("id_pagu","asc");
		$query = $this->db->get();
		return $query;
	}
	
	function simpanPagu(){
		$data=array(
		'id_jabatan'=>  $this->input->post('jabatan'),
		'id_kehadiran'=>  $this->input->post('kehadiran'),
		'kebijakan'=>  $this->input->post('kebijakan'),
		'created_by'=>  'admin',
		'modified_by'=>  'admin',
		);
		$this->db->set('created_at', 'NOW()', FALSE);
		$this->db->insert('pagu',$data);
	}
	
	function hapusPagu($id_pagu)
	{
		$this->db->where('id',$id_pagu);
		$this->db->delete('pagu');
	}
	
	function editPagu()
	{
		$data=array(
		'id_jabatan'=>  $this->input->post('jabatan'),
		'id_kehadiran'=>  $this->input->post('kehadiran'),
		'kebijakan'=>  $this->input->post('kebijakan'),
		'created_by'=>  'admin',
		'modified_by'=>  'admin',
		);
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('pagu',$data);
	}
	
	function get_one($id)
	{
		$param = array('id'=>$id);
		return $this->db->get_where('pagu',$param);
	}
	
}