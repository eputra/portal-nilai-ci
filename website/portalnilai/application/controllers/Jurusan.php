<?php
class Jurusan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('jurusan_model');
	}

	public function index()
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}
		
		$data['jurusan'] = $this->jurusan_model->get_jurusan();
		$data['title'] = 'Kelola Jurusan';
		$this->load->view('templates/header', $data);
		$this->load->view('admin/menu', $data);
		$this->load->view('jurusan/jurusan', $data);
		$this->load->view('templates/footer');	
	}

	public function add_jurusan()
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$this->form_validation->set_rules('jurusan', 'Nama Jurusan', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['title'] = 'Tambah Jurusan';
			$this->load->view('templates/header', $data);
			$this->load->view('admin/menu', $data);
			$this->load->view('jurusan/add_jurusan');
			$this->load->view('templates/footer');		
		} else {
			$this->jurusan_model->add_jurusan();
			$this->session->set_flashdata('add_jurusan', 'Jurusan berhasil ditambah.');
			redirect('jurusan');
		}
	}


	public function edit_jurusan($id)
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$this->form_validation->set_rules('jurusan', 'Nama Jurusan', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['jurusan'] = $this->jurusan_model->get_jurusan_id($id);
			$data['title'] = 'Edit Jurusan';
			$this->load->view('templates/header', $data);
			$this->load->view('admin/menu', $data);
			$this->load->view('jurusan/edit_jurusan', $data);
			$this->load->view('templates/footer');
		} else {
			$this->jurusan_model->edit_jurusan($id);
			$this->session->set_flashdata('edit_jurusan', 'Jurusan berhasil diedit.');
			redirect('jurusan');
		}
	}

	public function delete_jurusan($id)
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$this->jurusan_model->delete_jurusan($id);
		$this->session->set_flashdata('delete_jurusan', 'Jurusan berhasil didelete.');
		redirect('jurusan');
	}
}