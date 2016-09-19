<?php
class Login_model extends CI_Model {
	public function login_admin()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$query = $this->db->get_where('admin', $data);

		if ($query->num_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function login_mahasiswa()
	{
		$data = array(
			'nim' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$query = $this->db->get_where('mahasiswa', $data);

		if ($query->num_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_admin()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$query = $this->db->get_where('admin', $data);
		return $query;
	}

	public function get_mahasiswa()
	{
		$data = array(
			'nim' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);
		
		$query = $this->db->get_where('mahasiswa', $data);
		return $query;
	}
}