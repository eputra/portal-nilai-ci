<?php
class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		switch ($this->session->userdata('hak')) {
			case 'admin':
				redirect('admin');
				break;
			
			case 'mahasiswa':
				redirect('mahasiswa');
				break;

			default:
				$data['title'] = "Login";
				$this->load->view('templates/header', $data);
				$this->load->view('login/login', $data);
				break;
		}
	}

	public function login()
	{

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === FALSE) {
			redirect('login');
		} else {
			$login_admin = $this->login_model->login_admin();
			$login_mahasiswa = $this->login_model->login_mahasiswa();

			if ($login_admin) {
				$get_admin = $this->login_model->get_admin();
				$row_admin = $get_admin->row();

				$session_admin = array(
					'hak' => 'admin',
					'username' => $row_admin->nama
				);

				$this->session->set_userdata($session_admin);
				redirect('admin');
			}

			if ($login_mahasiswa) {
				$get_mahasiswa = $this->login_model->get_mahasiswa();
				$row_mahasiswa = $get_mahasiswa->row();

				$session_mahasiswa = array(
					'hak' => 'mahasiswa',
					'username' => $row_mahasiswa->nama,
					'nim' => $row_mahasiswa->nim
				);

				$this->session->set_userdata($session_mahasiswa);
				redirect('mahasiswa');
			}

			if (!$login_admin || !$login_mahasiswa) {
				$this->session->set_flashdata('failed_login', 'Username atau password salah.');
				redirect('login');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}