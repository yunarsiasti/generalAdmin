<?php
class model_pegawai extends CI_Model{
	
	
	
	function login($email,$password)
	{
		$chek= $this->db->get_where('pegawai',array('email'=>$email,'password'=>$password));
		if($chek->num_rows()>0){
			$param = array('email'=>$email);
			$id_jabatan = $this->db->get_where('pegawai',$param);
			$hasil = $id_jabatan->row_array();
			//print_r($hasil['id_jabatan']);exit();
			return $hasil['id_jabatan'];
		}
		else{
			return 0;
		}
	}
	
	function tampilpegawai()
	{
		//return $this->db->get('pegawai');
		
		$this->db->select('*,pegawai.id AS id_pegawai');
		$this->db->from('pegawai');
		$this->db->join('jabatan', 'jabatan.id = pegawai.id_jabatan');
		$this->db->order_by("id_pegawai","asc");
		$query = $this->db->get();
		return $query;
	}
	
	function simpanPegawai(){
		$data=array(
		'nama'=>  $this->input->post('nama'),
		'id_jabatan'=>  $this->input->post('jabatan'),
		'alamat'=>  $this->input->post('alamat'),
		'email'=>  $this->input->post('email'),
		'password'=>  $this->input->post('password'),
		'telp'=>  $this->input->post('telp'),
		'created_by'=>  'admin',
		'modified_by'=>  'admin',
		);
		$this->db->set('created_at', 'NOW()', FALSE);
		$this->db->insert('pegawai',$data);
	}
	
	function hapusPegawai($id_pegawai)
	{
		$this->db->where('id',$id_pegawai);
		$this->db->delete('pegawai');
	}
	
	function editPegawai()
	{
		$data=array(
		'nama'=>  $this->input->post('nama'),
		'id_jabatan'=>  $this->input->post('jabatan'),
		'alamat'=>  $this->input->post('alamat'),
		'email'=>  $this->input->post('email'),
		'password'=>  $this->input->post('password'),
		'telp'=>  $this->input->post('telp'),
		'created_by'=>  'admin',
		'modified_by'=>  'admin',
		);
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('pegawai',$data);
	}
	
	function get_one($id)
	{
		$param = array('id'=>$id);
		return $this->db->get_where('pegawai',$param);
	}
	
	function get_fromEmail($email)
	{
		$param = array('email'=>$email);
		return $this->db->get_where('pegawai',$param);
	}
	
	function tampiljabatan()
	{
		$this->db->select('jabatan.id AS id_jabatan, nama_jabatan');
		$query = $this->db->get('jabatan');
		return $query;
	}
	
	function get_namaJabatan($id_jabatan)
	{
		$this->db->select('nama_jabatan');
		$this->db->from('jabatan');
		$this->db->where('id',$id_jabatan);
		$query = $this->db->get();
		return $query;
	}
}