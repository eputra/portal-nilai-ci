<?php
if ($this->session->flashdata('add_dosen')) {
	?>
	<div class="bg-success pesan">
		<?php echo $this->session->flashdata('add_dosen'); ?>
	</div>
	<?php
}

if ($this->session->flashdata('edit_dosen')) {
	?>
	<div class="bg-success pesan">
		<?php echo $this->session->flashdata('edit_dosen'); ?>
	</div>
	<?php
}

if ($this->session->flashdata('delete_dosen')) {
	?>
	<div class="bg-success pesan">
		<?php echo $this->session->flashdata('delete_dosen'); ?>
	</div>
	<?php
}
?>
<a class="btn btn-hijau" 
	href="<?php echo base_url('dosen/add_dosen'); ?>">
	<i class="fa fa-plus fa-fw" aria-hidden="true"></i> Tambah Dosen
</a>
<table>
	<tr>
		<th width='20%'>ID Dosen</th>
		<th width='20%'>Nama</th>
		<th width='20%'>Jenis Kelamin</th>
		<th width='20%'>Tanggal Lahir</th>
		<th width='20%'>Kelola</th>
	</tr>
	<?php
	foreach ($dosen as $dosen) {
		?>
		<tr>
			<td><?php echo $dosen->id_dosen; ?></td>
			<td><?php echo $dosen->nama; ?></td>
			<td><?php echo $dosen->jenis_kelamin; ?></td>
			<td><?php echo $dosen->tanggal_lahir; ?></td>
			<td>
				<a class="btn btn-warning btn-sm" 
					href="<?php echo base_url('dosen/edit_dosen/'.$dosen->id_dosen); ?>">
					<i class="fa fa-edit fa-fw" aria-hidden="true"></i> Edit
				</a>
				<a class="btn btn-danger btn-sm" 
					href="<?php echo base_url('dosen/delete_dosen/'.$dosen->id_dosen); ?>">
					<i class="fa fa-trash fa-fw" aria-hidden="true"></i> Delete
				</a>
			</td>
		</tr>
		<?php
	}
	?>
</table>