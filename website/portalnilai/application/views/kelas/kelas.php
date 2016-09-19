<?php
if ($this->session->flashdata('add_kelas')) {
	?>
	<div class="bg-success pesan">
		<?php echo $this->session->flashdata('add_kelas'); ?>
	</div>
	<?php
}

if ($this->session->flashdata('edit_kelas')) {
	?>
	<div class="bg-success pesan">
		<?php echo $this->session->flashdata('edit_kelas'); ?>
	</div>
	<?php
}

if ($this->session->flashdata('delete_kelas')) {
	?>
	<div class="bg-success pesan">
		<?php echo $this->session->flashdata('delete_kelas'); ?>
	</div>
	<?php
}
?>
<a class="btn btn-hijau"
	href="<?php echo base_url('kelas/add_kelas'); ?>">
	<i class="fa fa-plus fa-fw" aria-hidden="true"></i> Tambah Kelas
</a>
<table>
	<tr>
		<th width="20%">ID Kelas</th>
		<th width="60%">Nama Kelas</th>
		<th width="20%">Kelola</th>
	</tr>
	<?php
	foreach ($kelas as $kelas) {
		?>
		<tr>
			<td><?php echo $kelas->id_kelas; ?></td>
			<td><?php echo $kelas->kelas; ?></td>
			<td>
				<a class="btn btn-warning btn-sm"
					href="<?php echo base_url('kelas/edit_kelas/'.$kelas->id_kelas); ?>">
					<i class="fa fa-edit fa-fw" aria-hidden="true"></i> Edit
				</a>
				<a class="btn btn-danger btn-sm"
					href="<?php echo base_url('kelas/delete_kelas/'.$kelas->id_kelas); ?>">
					<i class="fa fa-trash fa-fw" aria-hidden="true"></i> Delete
				</a>
			</td>
		</tr>
		<?php
	}
	?>
</table>