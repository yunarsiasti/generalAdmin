<?php
class model_inventaris extends CI_Model{
		
	function tampilinventaris()
	{
		return $this->db->get('inventari');
	}
	
	function simpanInventaris(){
		$data=array(
		'nama_inventari'=>  $this->input->post('nama_inventari'),
		'merk'=>  $this->input->post('merk'),
		'kategori'=>  $this->input->post('kategori'),
		'created_by'=>  'admin',
		'modified_by'=>  'admin',
		);
		$this->db->set('created_at', 'NOW()', FALSE);
		$this->db->insert('inventari',$data);
	}
	
	function hapusInventaris($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('inventari');
	}
	
	function editInventaris()
	{
		$data=array(
		'nama_inventari'=>  $this->input->post('nama_inventari'),
		'merk'=>  $this->input->post('merk'),
		'kategori'=>  $this->input->post('kategori'),
		'created_by'=>  'admin',
		'modified_by'=>  'admin',
		);
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('inventari',$data);
	}
	
	function get_one($id)
	{
		$param = array('id'=>$id);
		return $this->db->get_where('inventari',$param);
	}
	
	function get_namaInventaris($id_inventari)
	{
		$this->db->select('nama_inventari');
		$this->db->from('inventari');
		$this->db->where('id',$id_inventari);
		$query = $this->db->get();
		return $query;
	}
	
}