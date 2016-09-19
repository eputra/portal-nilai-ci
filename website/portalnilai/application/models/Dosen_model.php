<?php
class Dosen_model extends CI_Model {
	public function get_dosen()
	{
		$query = $this->db->get('dosen');
		return $query->result();
	}

	public function add_dosen()
	{
		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$tanggal_lahir = $tahun.'-'.$bulan.'-'.$tanggal;

		$data = array(
			'id_dosen' => NULL,
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tanggal_lahir' => $tanggal_lahir
		);

		$this->db->insert('dosen', $data);
	}

	public function get_dosen_id($id)
	{
		$query = $this->db->get_where('dosen', array('id_dosen' => $id));
		$dosen = $query->row();

		$tanggal_pisah = explode('-', $dosen->tanggal_lahir);

		$data = array(
			'id_dosen' => $dosen->id_dosen,
			'nama' => $dosen->nama,
			'jenis_kelamin' => $dosen->jenis_kelamin,
			'tanggal' => $tanggal_pisah[2],
			'bulan' => $tanggal_pisah[1],
			'tahun' => $tanggal_pisah[0]
		);

		return $data;
	}

	public function edit_dosen($id)
	{
		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$tanggal_lahir = $tahun.'-'.$bulan.'-'.$tanggal;

		$data = array(
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tanggal_lahir' => $tanggal_lahir
		);

		$this->db->where('id_dosen', $id);
		$this->db->update('dosen', $data);
	}

	public function delete_dosen($id)
	{
		$this->db->delete('dosen', array('id_dosen' => $id));
	}
}