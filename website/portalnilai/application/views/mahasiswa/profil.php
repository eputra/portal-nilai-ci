<?php
switch ($this->session->flashdata('ganti_password')) {
	case 'berhasil':
		?>
		<div class="bg-success pesan">
			Password berhasil diganti.
		</div>
		<?php
		break;
	case 'gagal':
		?>
		<div class="bg-danger kesalahan">
			Password gagal diganti, password lama salah.
		</div>
		<?php
		break;
	default:
		?>
		<div class="bg-success pesan">
			Jika ada kesalahan data, silahkan hubungi TU.
		</div>
		<?php
		break;
}
?>
<table class="profil">
	<tr>
		<td>NIM</td>
		<td>:</td>
		<td><?php echo $mahasiswa->nim; ?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo $mahasiswa->nama; ?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?php echo $mahasiswa->jenis_kelamin; ?></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><?php echo $mahasiswa->tanggal_lahir; ?></td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td>:</td>
		<td><?php echo $mahasiswa->jurusan; ?></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><?php echo $mahasiswa->kelas; ?></td>
	</tr>
</table>
<a class="btn btn-hijau" 
	href="<?php echo base_url('mahasiswa/ganti_password'); ?>">
	<i class="fa fa-edit fa-fw" aria-hidden="true"></i> Ganti Password
</a>