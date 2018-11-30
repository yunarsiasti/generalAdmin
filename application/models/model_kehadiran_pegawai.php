<?php
class model_kehadiran_pegawai extends CI_Model{
	
	function tampil_kehadiranPegawai()
	{
		//return $this->db->get('kehadiran_pegawai');
		
		$this->db->select('*,kehadiran_pegawai.id AS id_kehadiranPegawai');
		$this->db->from('kehadiran_pegawai');
		$this->db->join('pegawai', 'pegawai.id = kehadiran_pegawai.id_pegawai');
		$this->db->join('jabatan', 'jabatan.id = pegawai.id_jabatan');
		$this->db->join('kehadiran', 'kehadiran.id = kehadiran_pegawai.id_kehadiran');
		$this->db->join('pagu', 'pagu.id_kehadiran = kehadiran_pegawai.id_kehadiran AND pagu.id_jabatan = pegawai.id_jabatan');
		$this->db->order_by("id_kehadiranPegawai","asc");
		$query = $this->db->get();
		return $query;
	}
	
	function tampil_LemburkehadiranPegawai()
	{
		//return $this->db->get('kehadiran_pegawai');
		
		$this->db->select('*,kehadiran_pegawai.id AS id_kehadiranPegawai,kehadiran_pegawai.created_by AS created_kehadiranPegawai');
		$this->db->from('kehadiran_pegawai');
		$this->db->join('pegawai', 'pegawai.id = kehadiran_pegawai.id_pegawai');
		$this->db->join('jabatan', 'jabatan.id = pegawai.id_jabatan');
		$this->db->join('kehadiran', 'kehadiran.id = kehadiran_pegawai.id_kehadiran');
		$this->db->join('pagu', 'pagu.id_kehadiran = kehadiran_pegawai.id_kehadiran AND pagu.id_jabatan = pegawai.id_jabatan');
		$this->db->where("kehadiran_pegawai.id_kehadiran",9);
		$this->db->order_by("id_kehadiranPegawai","asc");
		$query = $this->db->get();
		return $query;
	}
	
	function tampil_CutiMelahirkankehadiranPegawai()
	{
		//return $this->db->get('kehadiran_pegawai');
		
		$this->db->select('*,kehadiran_pegawai.id AS id_kehadiranPegawai,kehadiran_pegawai.created_by AS created_kehadiranPegawai');
		$this->db->from('kehadiran_pegawai');
		$this->db->join('pegawai', 'pegawai.id = kehadiran_pegawai.id_pegawai');
		$this->db->join('jabatan', 'jabatan.id = pegawai.id_jabatan');
		$this->db->join('kehadiran', 'kehadiran.id = kehadiran_pegawai.id_kehadiran');
		$this->db->join('pagu', 'pagu.id_kehadiran = kehadiran_pegawai.id_kehadiran AND pagu.id_jabatan = pegawai.id_jabatan');
		$this->db->where("kehadiran_pegawai.id_kehadiran",11);
		$this->db->order_by("id_kehadiranPegawai","asc");
		$query = $this->db->get();
		return $query;
	}
	
	function tampil_CutikehadiranPegawai()
	{
		//return $this->db->get('kehadiran_pegawai');
		
		$this->db->select('*,kehadiran_pegawai.id AS id_kehadiranPegawai,kehadiran_pegawai.created_by AS created_kehadiranPegawai');
		$this->db->from('kehadiran_pegawai');
		$this->db->join('pegawai', 'pegawai.id = kehadiran_pegawai.id_pegawai');
		$this->db->join('jabatan', 'jabatan.id = pegawai.id_jabatan');
		$this->db->join('kehadiran', 'kehadiran.id = kehadiran_pegawai.id_kehadiran');
		$this->db->join('pagu', 'pagu.id_kehadiran = kehadiran_pegawai.id_kehadiran AND pagu.id_jabatan = pegawai.id_jabatan');
		$this->db->where("kehadiran_pegawai.id_kehadiran",5);
		$this->db->order_by("id_kehadiranPegawai","asc");
		$query = $this->db->get();
		return $query;
	}
	
	function tampil_DinasLuarkehadiranPegawai()
	{
		//return $this->db->get('kehadiran_pegawai');
		
		$this->db->select('*,kehadiran_pegawai.id AS id_kehadiranPegawai,kehadiran_pegawai.created_by AS created_kehadiranPegawai');
		$this->db->from('kehadiran_pegawai');
		$this->db->join('pegawai', 'pegawai.id = kehadiran_pegawai.id_pegawai');
		$this->db->join('jabatan', 'jabatan.id = pegawai.id_jabatan');
		$this->db->join('kehadiran', 'kehadiran.id = kehadiran_pegawai.id_kehadiran');
		$this->db->join('pagu', 'pagu.id_kehadiran = kehadiran_pegawai.id_kehadiran AND pagu.id_jabatan = pegawai.id_jabatan');
		$this->db->where("kehadiran_pegawai.id_kehadiran",10);
		$this->db->order_by("id_kehadiranPegawai","asc");
		$query = $this->db->get();
		return $query;
	}
	
	function simpan_KehadiranPegawai(){
		$data=array(
		'id_pegawai'=>  $this->input->post('pegawai'),
		'id_kehadiran'=>  $this->input->post('kehadiran'),
		'counter'=>  $this->input->post('counter'),
		'start_time'=>  $this->input->post('start_time'),
		'end_time'=>  $this->input->post('end_time'),
		'status'=>  $this->input->post('status'),
		'created_by'=>  $this->input->post('created_by'),
		'modified_by'=>  'admin',
		);
		$this->db->set('created_at', 'NOW()', FALSE);
		$this->db->insert('kehadiran_pegawai',$data);
	}
	
	function hapusKehadiranPegawai($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('kehadiran_pegawai');
	}
	
	function editKehadiranPegawai($dataa)
	{
		$id = $dataa['id'];
		$status = $dataa['status'];
		
		$data=array(
		'status'=>  $status,
		'modified_by'=>  'admin',
		);
		$this->db->where('id',$id);
		$this->db->update('kehadiran_pegawai',$data);
	}
	
	function dashboard_kehadiranPegawaiBulan()
	{
		//return $this->db->get('kehadiran_pegawai');
		$this->db->select('*,kehadiran_pegawai.id AS id_kehadiranPegawai, COUNT(*) AS count_kehadiran');
		$this->db->from('kehadiran_pegawai');
		$this->db->join('pegawai', 'pegawai.id = kehadiran_pegawai.id_pegawai');
		$this->db->join('jabatan', 'jabatan.id = pegawai.id_jabatan');
		$this->db->join('kehadiran', 'kehadiran.id = kehadiran_pegawai.id_kehadiran');
		$this->db->like("kehadiran_pegawai.start_time","2018-08");
		$this->db->group_by("kehadiran.id");
		$this->db->order_by("kehadiran_pegawai.start_time","desc");
		$query = $this->db->get();
		return $query;
	}
	
	function sum_kehadiranPegawaiBulan()
	{
		//return $this->db->get('kehadiran_pegawai');
		$this->db->select('COUNT(id_pegawai) AS sum_kehadiran');
		$this->db->from('kehadiran_pegawai');
		$this->db->like("kehadiran_pegawai.start_time","2018-08");
		$query = $this->db->get();
		return $query;
	}
	
	function dashboard_kehadiranPegawaiTahun()
	{
		//return $this->db->get('kehadiran_pegawai');
		$this->db->select('*,kehadiran_pegawai.id AS id_kehadiranPegawai, COUNT(*) AS count_kehadiran');
		$this->db->from('kehadiran_pegawai');
		$this->db->join('pegawai', 'pegawai.id = kehadiran_pegawai.id_pegawai');
		$this->db->join('jabatan', 'jabatan.id = pegawai.id_jabatan');
		$this->db->join('kehadiran', 'kehadiran.id = kehadiran_pegawai.id_kehadiran');
		//$this->db->like("kehadiran_pegawai.start_time","2018");
		$this->db->group_by("kehadiran.id");
		$this->db->order_by("kehadiran_pegawai.start_time","desc");
		$query = $this->db->get();
		return $query;
	}
	
	function sum_kehadiranPegawaiTahun()
	{
		//return $this->db->get('kehadiran_pegawai');
		$this->db->select('COUNT(id_pegawai) AS sum_kehadiran');
		$this->db->from('kehadiran_pegawai');
		//$this->db->like("kehadiran_pegawai.start_time","2018");
		$query = $this->db->get();
		return $query;
	}
	
	function tampilDetail_kehadiranPegawai($id)
	{
		//return $this->db->get('kehadiran_pegawai');
		
		$this->db->select('*,kehadiran_pegawai.id AS id_kehadiranPegawai,kehadiran_pegawai.created_at AS buildTime');
		$this->db->from('kehadiran_pegawai');
		$this->db->join('pegawai', 'pegawai.id = kehadiran_pegawai.id_pegawai');
		$this->db->join('jabatan', 'jabatan.id = pegawai.id_jabatan');
		$this->db->join('kehadiran', 'kehadiran.id = kehadiran_pegawai.id_kehadiran');
		$this->db->join('pagu', 'pagu.id_kehadiran = kehadiran_pegawai.id_kehadiran AND pagu.id_jabatan = pegawai.id_jabatan');
		$this->db->order_by("kehadiran_pegawai.created_at","asc");
		$this->db->where('id_pegawai',$id);
		$query = $this->db->get();
		return $query;
	}
	
	function sum_cutiKehadiranPegawai($id)
	{
		//return $this->db->get('kehadiran_pegawai');
		$this->db->select('SUM(counter) AS sum_cutipegawai');
		$this->db->from('kehadiran_pegawai');
		$this->db->where("kehadiran_pegawai.id_kehadiran",5);
		$this->db->where("kehadiran_pegawai.id_pegawai",$id);
		$query = $this->db->get();
		return $query;
	}
	
	function sum_sisaCutiKehadiranPegawai($id)
	{
		//return $this->db->get('kehadiran_pegawai');
		$this->db->select('12 - SUM(counter) AS sum_sisacutipegawai');
		$this->db->from('kehadiran_pegawai');
		$this->db->where("kehadiran_pegawai.id_kehadiran",5);
		$this->db->where("kehadiran_pegawai.status","Setuju");
		$this->db->where("kehadiran_pegawai.id_pegawai",$id);
		$query = $this->db->get();
		return $query;
	}
	
	function sum_lemburpegawai($id)
	{
		//return $this->db->get('kehadiran_pegawai');
		$this->db->select('SUM(counter) AS sum_lemburpegawai');
		$this->db->from('kehadiran_pegawai');
		$this->db->where("kehadiran_pegawai.id_kehadiran",9);
		$this->db->where("kehadiran_pegawai.id_pegawai",$id);
		$query = $this->db->get();
		return $query;
	}
	
	function sum_totallemburpegawai($id)
	{
		//return $this->db->get('kehadiran_pegawai');
		$this->db->select('SUM(pagu.kebijakan) AS sum_totallemburpegawai');
		$this->db->from('kehadiran_pegawai');
		$this->db->join('pegawai', 'pegawai.id = kehadiran_pegawai.id_pegawai');
		$this->db->join('pagu', 'pagu.id_kehadiran = kehadiran_pegawai.id_kehadiran AND pagu.id_jabatan = pegawai.id_jabatan');
		$this->db->where("kehadiran_pegawai.id_kehadiran",9);
		$this->db->where("kehadiran_pegawai.status","Setuju");
		$this->db->where("kehadiran_pegawai.id_pegawai",$id);
		$query = $this->db->get();
		return $query;
	}
	
	function sum_dinasluarpegawai($id)
	{
		//return $this->db->get('kehadiran_pegawai');
		$this->db->select('SUM(counter) AS sum_dinasluarpegawai');
		$this->db->from('kehadiran_pegawai');
		$this->db->where("kehadiran_pegawai.id_kehadiran",10);
		$this->db->where("kehadiran_pegawai.id_pegawai",$id);
		$query = $this->db->get();
		return $query;
	}
	
	function sum_totaldinasluarpegawai($id)
	{
		//return $this->db->get('kehadiran_pegawai');
		$this->db->select('SUM(pagu.kebijakan) AS sum_totaldinasluarpegawai');
		$this->db->from('kehadiran_pegawai');
		$this->db->join('pegawai', 'pegawai.id = kehadiran_pegawai.id_pegawai');
		$this->db->join('pagu', 'pagu.id_kehadiran = kehadiran_pegawai.id_kehadiran AND pagu.id_jabatan = pegawai.id_jabatan');
		$this->db->where("kehadiran_pegawai.id_kehadiran",10);
		$this->db->where("kehadiran_pegawai.id_pegawai",$id);
		$query = $this->db->get();
		return $query;
	}
	
	
}