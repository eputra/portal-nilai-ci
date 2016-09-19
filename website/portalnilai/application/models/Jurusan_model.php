<?php
class Jurusan_model extends CI_Model {
	public function get_jurusan()
	{
		$query = $this->db->get('jurusan');
		return $query->result();
	}

	public function add_jurusan()
	{
		$data = array(
			'id_jurusan' => NULL,
			'jurusan' => $this->input->post('jurusan')
		);
		$this->db->insert('jurusan', $data);
	}

	public function get_jurusan_id($id)
	{
		$query = $this->db->get_where('jurusan', array('id_jurusan' => $id));
		return $query->row();
	}

	public function edit_jurusan($id)
	{
		$data = array(
			'jurusan' => $this->input->post('jurusan')
		);

		$this->db->where('id_jurusan', $id);
		$this->db->update('jurusan', $data);
	}

	public function delete_jurusan($id)
	{
		$this->db->delete('jurusan', array('id_jurusan' => $id));
	}
}