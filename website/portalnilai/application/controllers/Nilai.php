<?php
class Nilai extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('nilai_model');
		$this->load->model('kelas_model');
		$this->load->model('jurusan_model');
		$this->load->model('dosen_model');
		$this->load->model('matakuliah_model');
		$this->load->model('mahasiswa_model');
	}

	public function index()
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$data['nilai'] = $this->nilai_model->get_nilai();
		$data['title'] = 'Kelola Nilai';
		$this->load->view('templates/header', $data);
		$this->load->view('admin/menu', $data);
		$this->load->view('nilai/nilai', $data);
		$this->load->view('templates/footer');
	}

	public function set_add_nilai()
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$this->form_validation->set_rules('matakuliah', 'Matakuliah', 'required');
		$this->form_validation->set_rules('dosen', 'Dosen', 'required');
		$this->form_validation->set_rules('kelas', 'Kelas', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['matakuliah'] = $this->matakuliah_model->get_matakuliah();
			$data['dosen'] = $this->dosen_model->get_dosen();
			$data['kelas'] = $this->kelas_model->get_kelas(); 
			$data['title'] = 'Pengaturan Input Nilai';
			$this->load->view('templates/header', $data);
			$this->load->view('admin/menu', $data);
			$this->load->view('nilai/set_add_nilai', $data);
			$this->load->view('templates/footer');
		} else {
			//Start untuk pesan
			$id_matakuliah = $this->input->post('matakuliah');
			$id_dosen = $this->input->post('dosen');
			$id_kelas = $this->input->post('kelas');
			$data['matakuliah'] = $this->matakuliah_model->get_matakuliah_id($id_matakuliah);
			$data['dosen'] = $this->dosen_model->get_dosen_id($id_dosen);
			$data['kelas'] = $this->kelas_model->get_kelas_id($id_kelas);
			//End untuk pesan

			$data['mahasiswa'] = $this->nilai_model->set_add_nilai();
			$data['title'] = 'Input Nilai';
			$this->load->view('templates/header', $data);
			$this->load->view('admin/menu', $data);
			$this->load->view('nilai/add_nilai', $data);
			$this->load->view('templates/footer');
		}
	}

	public function add_nilai()
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$id_matakuliah = $this->input->post('id_matakuliah');
		$id_dosen = $this->input->post('id_dosen');
		$iterasi = $this->input->post('iterasi');

		for ($i=0; $i<$iterasi; $i++) {
			$var_nim = "nim".$i;
			$var_nilai = "nilai".$i;

			$nim = $this->input->post($var_nim);
			$nilai = $this->input->post($var_nilai);

			$this->nilai_model->add_nilai($nim, $id_matakuliah, $id_dosen, $nilai);
		}

		$this->session->set_flashdata('input_nilai', 'Nilai berhasil diinput.');
		redirect('nilai');
	}

	public function edit_nilai($id)
	{
		if ($this->session->userdata('hak') != 'admin') {
			redirect('login');
		}

		$this->form_validation->set_rules('nilai', 'Nilai', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['nilai'] = $this->nilai_model->get_nilai_id($id);
			$data['title'] = 'Edit Nilai';
			$this->load->view('templates/header', $data);
			$this->load->view('admin/menu', $data);
			$this->load->view('nilai/edit_nilai', $data);
			$this->load->view('templates/footer');
		} else {
			$this->nilai_model->edit_nilai($id);
			$this->session->set_flashdata('edit_nilai', 'Nilai berhasil diedit.');
			redirect('nilai');
		}
	}

	public function delete_nilai($id)
	{
		$this->nilai_model->delete_nilai($id);
		$this->session->set_flashdata('delete_nilai', 'Nilai berhasil didelete.');
		redirect('nilai');
	}
}