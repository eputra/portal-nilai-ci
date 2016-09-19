<?php
class Mahasiswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa_model');
	}

	public function index()
	{
		if ($this->session->userdata('hak') != 'mahasiswa') {
			redirect('login');
		}

		$data['password'] = $this->mahasiswa_model->password_default($this->session->userdata('nim'));
		$data['title'] = 'Dashboard Mahasiswa';
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/menu', $data);
		$this->load->view('mahasiswa/mahasiswa', $data);
		$this->load->view('templates/footer');
	}

	public function profil()
	{
		if ($this->session->userdata('hak') != 'mahasiswa') {
			redirect('login');
		}

		$data['mahasiswa'] = $this->mahasiswa_model->get_mahasiswa_nim($this->session->userdata('nim'));
		$data['title'] = 'Profil Mahasiswa';
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/menu', $data);
		$this->load->view('mahasiswa/profil', $data);
		$this->load->view('templates/footer');
	}

	public function ganti_password()
	{
		if ($this->session->userdata('hak') != 'mahasiswa') {
			redirect('login');
		}

		$this->form_validation->set_rules('password_lama', 'Password Lama', 'required');
		$this->form_validation->set_rules('password_baru', 'Password Baru', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['title'] = 'Ganti Password';
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/menu', $data);
			$this->load->view('mahasiswa/ganti_password');
			$this->load->view('templates/footer');
		} else {
			$ganti_password = $this->mahasiswa_model->ganti_password($this->session->userdata('nim'));
			if ($ganti_password) {
				$this->session->set_flashdata('ganti_password', 'berhasil');
				redirect('mahasiswa/profil');
			} else {
				$this->session->set_flashdata('ganti_password', 'gagal');
				redirect('mahasiswa/profil');
			}
		}
	}

	public function nilai()
	{
		if ($this->session->userdata('hak') != 'mahasiswa') {
			redirect('login');
		}

		$data['nilai'] = $this->mahasiswa_model->get_nilai($this->session->userdata('nim'));
		$data['ipk'] = $this->mahasiswa_model->get_ipk($this->session->userdata('nim'));
		$data['title'] = 'Nilai';
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/menu', $data);
		$this->load->view('mahasiswa/nilai', $data);
		$this->load->view('templates/footer');
	}

	public function coba()
	{
		$this->mahasiswa_model->get_ipk($this->session->userdata('nim'));
	}
}