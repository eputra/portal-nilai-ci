<?php
class Kelas_model extends CI_Model {
	public function get_kelas()
	{
		$query = $this->db->get('kelas');
		return $query->result();
	}

	public function add_kelas()
	{
		$data = array(
			'id_kelas' => NULL,
			'kelas' => $this->input->post('kelas')
		);
		$this->db->insert('kelas', $data);
	}

	public function get_kelas_id($id)
	{
		$query = $this->db->get_where('kelas', array('id_kelas' => $id));
		return $query->row();
	}

	public function edit_kelas($id)
	{
		$data = array(
			'kelas' => $this->input->post('kelas')
		);

		$this->db->where('id_kelas', $id);
		$this->db->update('kelas', $data);
	}	

	public function delete_kelas($id)
	{
		$this->db->delete('kelas', array('id_kelas' => $id));
	}
}