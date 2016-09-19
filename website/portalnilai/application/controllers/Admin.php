<?php
class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$data['title'] = 'Dashboard Admin';
		$this->load->view('templates/header', $data);
		$this->load->view('admin/menu', $data);
		$this->load->view('admin/admin');
		$this->load->view('templates/footer');
	}
}