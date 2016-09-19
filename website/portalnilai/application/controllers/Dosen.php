<?php
class Dosen extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dosen_model');
	}

	public function index()
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$data['dosen'] = $this->dosen_model->get_dosen();
		$data['title'] = 'Kelola Dosen';
		$this->load->view('templates/header', $data);
		$this->load->view('admin/menu', $data);
		$this->load->view('dosen/dosen', $data);
		$this->load->view('templates/footer');
	}

	public function add_dosen()
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('bulan', 'Bulan', 'required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['title'] = 'Tambah Dosen';
			$this->load->view('templates/header', $data);
			$this->load->view('admin/menu', $data);
			$this->load->view('dosen/add_dosen');
			$this->load->view('templates/footer');
		} else {
			$this->dosen_model->add_dosen();
			$this->session->set_flashdata('add_dosen', 'Dosen berhasil ditambah.');
			redirect('dosen');
		}
	}

	public function edit_dosen($id)
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('bulan', 'Bulan', 'required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['dosen'] = $this->dosen_model->get_dosen_id($id);
			$data['title'] = 'Edit Dosen';
			$this->load->view('templates/header', $data);
			$this->load->view('admin/menu', $data);
			$this->load->view('dosen/edit_dosen', $data);
			$this->load->view('templates/footer');
		} else {
			$this->dosen_model->edit_dosen($id);
			$this->session->set_flashdata('edit_dosen', 'Dosen berhasil diedit.');
			redirect('dosen');
		}
	}

	public function delete_dosen($id)
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$this->dosen_model->delete_dosen($id);
		$this->session->set_flashdata('delete_dosen', 'Dosen berhasil didelete.');
		redirect('dosen');
	}
}