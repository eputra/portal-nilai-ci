<?php
class kelas extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kelas_model');
	}

	public function index()
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}
		
		$data['kelas'] = $this->kelas_model->get_kelas();
		$data['title'] = 'Kelola Kelas';
		$this->load->view('templates/header', $data);
		$this->load->view('admin/menu', $data);
		$this->load->view('kelas/kelas', $data);
		$this->load->view('templates/footer');	
	}

	public function add_kelas()
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$this->form_validation->set_rules('kelas', 'Nama Kelas', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['title'] = 'Tambah Kelas';
			$this->load->view('templates/header', $data);
			$this->load->view('admin/menu', $data);
			$this->load->view('kelas/add_kelas');
			$this->load->view('templates/footer');		
		} else {
			$add_kelas = $this->kelas_model->add_kelas();
			$this->session->set_flashdata('add_kelas', 'Kelas berhasil ditambah.');
			redirect('kelas');
		}
	}


	public function edit_kelas($id)
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$this->form_validation->set_rules('kelas', 'Nama Kelas', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['kelas'] = $this->kelas_model->get_kelas_id($id);
			$data['title'] = 'Edit Kelas';
			$this->load->view('templates/header', $data);
			$this->load->view('admin/menu', $data);
			$this->load->view('kelas/edit_kelas', $data);
			$this->load->view('templates/footer');
		} else {
			$edit_kelas = $this->kelas_model->edit_kelas($id);
			$this->session->set_flashdata('edit_kelas', 'Kelas berhasil diedit.');
			redirect('kelas');
	}
	}

	public function delete_kelas($id)
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$delete_kelas = $this->kelas_model->delete_kelas($id);
		$this->session->set_flashdata('delete_kelas', 'Kelas berhasil didelete.');
		redirect('kelas');
	}
}