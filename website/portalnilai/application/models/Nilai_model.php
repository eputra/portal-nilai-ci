<?php
class Nilai_model extends CI_Model {
	public function get_nilai()
	{
		$this->db->select('nilai.*,
			mahasiswa.nama as mahasiswa,
			dosen.nama as dosen,
			matakuliah.matakuliah');
		$this->db->from('nilai');
		$this->db->join('mahasiswa', 'mahasiswa.nim = nilai.nim');
		$this->db->join('matakuliah', 'matakuliah.id_matakuliah = nilai.id_matakuliah');
		$this->db->join('dosen', 'dosen.id_dosen = nilai.id_dosen');
		$query = $this->db->get();
		return $query->result();	
	}

	public function set_add_nilai()
	{
		$id_matakuliah = $this->input->post('matakuliah');
		$id_dosen = $this->input->post('dosen');
		$id_kelas = $this->input->post('kelas');

		//Start untuk database nilai
		$this->db->select('mahasiswa.nim');
		$this->db->from('mahasiswa');
		$this->db->where('id_kelas', $id_kelas);
		$query = $this->db->get();
		$isi_nim = $query->result();
		$i_nim = 0;

		//Start isi nim ke array
		//Untuk mengetahui berapa jumlah mahasiswa yang berada di
		//$id_kelas dan supaya pengaksesan nim dalam looping menjadi
		//lebih mudah
		foreach ($isi_nim as $isi_nim) {
			$nim[$i_nim] = $isi_nim->nim;
			$i_nim++;
		}
		//End isi nim ke array

		//Looping untuk pengecekan data di database nilai apakah
		//sudah ada data dengan nim = $nim[$i] dan id_matakuliah =
		//$id_matakuliah
		//***
		//Looping dilakukan sebanyak $i_nim yang didapat dari looping
		//isi_nim
		//***
		//Hal ini dilakukan agar tidak ada duplikasi data
		for ($i=0; $i<$i_nim; $i++) {
			$data_cek_nilai = array(
				'nim' => $nim[$i],
				'id_matakuliah' => $id_matakuliah
			);

			$query = $this->db->get_where('nilai', $data_cek_nilai);
			$cek_nilai = $query->num_rows();

			//Jika data dengan nim = $nim[i] dan id_matakuliah =
			//$id_matakuliah tidak ada di database maka data
			//diinputkan ke database
			if ($cek_nilai == 0) {
				$data = array(
					'id_nilai' => NULL,
					'nim' => $nim[$i],
					'id_matakuliah' => $id_matakuliah,
					'id_dosen' => $id_dosen
				);

				$this->db->insert('nilai', $data);
			}
		}
		//End untuk database nilai

		//Start untuk view add_nilai
		$view_add_nilai = $this->db->get_where('mahasiswa', array('id_kelas' => $id_kelas));
		return $view_add_nilai->result();
		//End untuk view add_nilai
	}

	public function add_nilai($nim, $id_matakuliah, $id_dosen, $nilai)
	{
		$this->db->where('nim', $nim);
		$this->db->where('id_matakuliah', $id_matakuliah);
		$this->db->where('id_dosen', $id_dosen);
		$this->db->update('nilai', array('nilai' => $nilai));
	}

	public function get_nilai_id($id)
	{
		$this->db->where('id_nilai', $id);
		$this->db->select('nilai.*,
			mahasiswa.nama as mahasiswa,
			dosen.nama as dosen,
			matakuliah.matakuliah');
		$this->db->from('nilai');
		$this->db->join('mahasiswa', 'mahasiswa.nim = nilai.nim');
		$this->db->join('matakuliah', 'matakuliah.id_matakuliah = nilai.id_matakuliah');
		$this->db->join('dosen', 'dosen.id_dosen = nilai.id_dosen');
		$query = $this->db->get();
		return $query->row();
	}

	public function edit_nilai($id)
	{
		$nilai = $this->input->post('nilai');
		$this->db->where('id_nilai', $id);
		$this->db->update('nilai', array('nilai' => $nilai));
	}

	public function delete_nilai($id)
	{
		$this->db->delete('nilai', array('id_nilai' => $id));
	}
}