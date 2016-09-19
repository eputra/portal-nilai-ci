<?php
class Matakuliah extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('matakuliah_model');
	}

	public function index()
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$data['matakuliah'] = $this->matakuliah_model->get_matakuliah();
		$data['title'] = 'Kelola Matakuliah';
		$this->load->view('templates/header', $data);
		$this->load->view('admin/menu', $data);
		$this->load->view('matakuliah/matakuliah', $data);
		$this->load->view('templates/footer');
	}

	public function add_matakuliah()
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$this->form_validation->set_rules('matakuliah', 'Matakuliah', 'required');
		$this->form_validation->set_rules('sks', 'SKS', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['title'] = 'Tambah Matakuliah';
			$this->load->view('templates/header', $data);
			$this->load->view('admin/menu', $data);
			$this->load->view('matakuliah/add_matakuliah');
			$this->load->view('templates/header');
		} else {
			$this->matakuliah_model->add_matakuliah();
			$this->session->set_flashdata('add_matakuliah', 'Matakuliah berhasil ditambah.');
			redirect('matakuliah');
		}
	}

	public function edit_matakuliah($id)
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$this->form_validation->set_rules('matakuliah', 'Matakuliah', 'required');
		$this->form_validation->set_rules('sks', 'SKS', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['matakuliah'] = $this->matakuliah_model->get_matakuliah_id($id);
			$data['title'] = 'Edit Matakuliah';
			$this->load->view('templates/header', $data);
			$this->load->view('admin/menu', $data);
			$this->load->view('matakuliah/edit_matakuliah', $data);
			$this->load->view('templates/header');
		} else {
			$this->matakuliah_model->edit_matakuliah($id);
			$this->session->set_flashdata('edit_matakuliah', 'Matakuliah berhasil diedit.');
			redirect('matakuliah');
		}
	}

	public function delete_matakuliah($id)
	{
		$this->matakuliah_model->delete_matakuliah($id);
		$this->session->set_flashdata('delete_matakuliah', 'Matakuliah berhasil didelete.');
		redirect('matakuliah');
	}
}