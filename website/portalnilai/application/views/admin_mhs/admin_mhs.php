<?php
if ($this->session->flashdata('add_mahasiswa')) {
	?>
	<div class="bg-success pesan">
		<?php echo $this->session->flashdata('add_mahasiswa'); ?>
	</div>
	<?php
}

if ($this->session->flashdata('edit_mahasiswa')) {
	?>
	<div class="bg-success pesan">
		<?php echo $this->session->flashdata('edit_mahasiswa'); ?>
	</div>
	<?php
}

if ($this->session->flashdata('delete_mahasiswa')) {
	?>
	<div class="bg-success pesan">
		<?php echo $this->session->flashdata('delete_mahasiswa'); ?>
	</div>
	<?php
}
?>
<a class="btn btn-hijau" 
	href="<?php echo base_url('admin_mhs/add_mahasiswa'); ?>">
	<i class="fa fa-plus fa-fw" aria-hidden="true"></i> Tambah Mahasiswa
</a>
<table>
	<tr>
		<th width="14%">NIM</th>
		<th width="14%">Nama</th>
		<th width="14%">Jenis Kelamin</th>
		<th width="14%">Tanggal Lahir</th>
		<th width="14%">Jurusan</th>
		<th width="14%">Kelas</th>
		<th width="14%">Kelola</th>
	</tr>
	<?php
	foreach ($mahasiswa as $mahasiswa) {
		?>
		<tr>
			<td><?php echo $mahasiswa->nim; ?></td>
			<td><?php echo $mahasiswa->nama; ?></td>
			<td><?php echo $mahasiswa->jenis_kelamin; ?></td>
			<td><?php echo $mahasiswa->tanggal_lahir; ?></td>
			<td><?php echo $mahasiswa->jurusan; ?></td>
			<td><?php echo $mahasiswa->kelas; ?></td>
			<td>
				<a class="btn btn-warning btn-sm" 
					href="<?php echo base_url('admin_mhs/edit_mahasiswa/'.$mahasiswa->nim); ?>">
					<i class="fa fa-edit fa-fw" aria-hidden="true"></i> Edit
				</a>
				<a class="btn btn-danger btn-sm" 
					href="<?php echo base_url('admin_mhs/delete_mahasiswa/'.$mahasiswa->nim); ?>">
					<i class="fa fa-trash fa-fw" aria-hidden="true"></i> Delete
				</a>
			</td>
		</tr>
		<?php
	}
	?>
</table>