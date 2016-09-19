<?php
class Admin_mhs extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa_model');
		$this->load->model('jurusan_model');
		$this->load->model('kelas_model');
	}

	public function index()
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$data['mahasiswa'] = $this->mahasiswa_model->get_mahasiswa();
		$data['title'] = 'Kelola Mahasiswa';
		$this->load->view('templates/header', $data);
		$this->load->view('admin/menu', $data);
		$this->load->view('admin_mhs/admin_mhs', $data);
		$this->load->view('templates/footer');
	}

	public function add_mahasiswa()
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$this->form_validation->set_rules('nim', 'Nim', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('bulan', 'Bulan', 'required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['jurusan'] = $this->jurusan_model->get_jurusan();
			$data['kelas'] = $this->kelas_model->get_kelas();
			$data['title'] = 'Tambah Mahasiswa';
			$this->load->view('templates/header', $data);
			$this->load->view('admin/menu', $data);
			$this->load->view('admin_mhs/add_mahasiswa', $data);
			$this->load->view('templates/footer');
		} else {
			$add_mahasiswa = $this->mahasiswa_model->add_mahasiswa();
			$this->session->set_flashdata('add_mahasiswa', 'Mahasiswa berhasil ditambah.');
			redirect('admin_mhs');
		}
	}

	public function edit_mahasiswa($id)
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('bulan', 'Bulan', 'required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['mahasiswa'] = $this->mahasiswa_model->get_mahasiswa_id($id);
			$data['kelas'] = $this->kelas_model->get_kelas();
			$data['jurusan'] = $this->jurusan_model->get_jurusan();
			$data['title'] = 'Edit Mahasiswa';
			$this->load->view('templates/header', $data);
			$this->load->view('admin/menu', $data);
			$this->load->view('admin_mhs/edit_mahasiswa', $data);
			$this->load->view('templates/footer');
		} else {
			$edit_mahasiswa = $this->mahasiswa_model->edit_mahasiswa($id);
			$this->session->set_flashdata('edit_mahasiswa', 'Mahasiswa berhasil diedit.');
			redirect('admin_mhs');
		}
	}

	public function delete_mahasiswa($id)
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$delete_mahasiswa = $this->mahasiswa_model->delete_mahasiswa($id);
		$this->session->set_flashdata('delete_mahasiswa', 'Mahasiswa berhasil didelete.');
		redirect('admin_mhs');
	}
}