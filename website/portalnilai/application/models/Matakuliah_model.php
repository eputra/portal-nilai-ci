<?php
class Matakuliah_model extends CI_Model {
	public function get_matakuliah()
	{
		$query = $this->db->get('matakuliah');
		return $query->result();
	}

	public function add_matakuliah()
	{
		$data = array(
			'id_matakuliah' => NULL,
			'matakuliah' => $this->input->post('matakuliah'),
			'sks' => $this->input->post('sks')
		);

		$this->db->insert('matakuliah', $data);
	}

	public function get_matakuliah_id($id)
	{
		$query = $this->db->get_where('matakuliah', array('id_matakuliah' => $id));
		return $query->row();
	}

	public function edit_matakuliah($id)
	{
		$data = array(
			'matakuliah' => $this->input->post('matakuliah'),
			'sks' => $this->input->post('sks')
		);

		$this->db->where('id_matakuliah', $id);
		$this->db->update('matakuliah', $data);
	}

	public function delete_matakuliah($id)
	{
		$this->db->delete('matakuliah', array('id_matakuliah' => $id));
	}
}