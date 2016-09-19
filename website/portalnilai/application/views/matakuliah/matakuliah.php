<?php
if ($this->session->flashdata('add_matakuliah')) {
	?>
	<div class="bg-success pesan">
		<?php echo $this->session->flashdata('add_matakuliah'); ?>
	</div>
	<?php
}

if ($this->session->flashdata('edit_matakuliah')) {
	?>
	<div class="bg-success pesan">
		<?php echo $this->session->flashdata('edit_matakuliah'); ?>
	</div>
	<?php
}

if ($this->session->flashdata('delete_matakuliah')) {
	?>
	<div class="bg-success pesan">
		<?php echo $this->session->flashdata('delete_matakuliah'); ?>
	</div>
	<?php
}
?>
<a class="btn btn-hijau" 
	href="<?php echo base_url('matakuliah/add_matakuliah'); ?>">
	<i class="fa fa-plus fa-fw" aria-hidden="true"></i> Tambah Matakuliah
</a>
<table>
	<tr>
		<th width="20%">ID Matakuliah</th>
		<th width="40%">Nama Matakuliah</th>
		<th width="20%">SKS</th>
		<th width="20%">Kelola</th>
	</tr>
	<?php
	foreach ($matakuliah as $matakuliah) {
		?>
		<tr>
			<td><?php echo $matakuliah->id_matakuliah; ?></td>
			<td><?php echo $matakuliah->matakuliah; ?></td>
			<td><?php echo $matakuliah->sks; ?></td>
			<td>
				<a class="btn btn-warning btn-sm" 
					href="<?php echo base_url('matakuliah/edit_matakuliah/'.$matakuliah->id_matakuliah); ?>">
					<i class="fa fa-edit fa-fw" aria-hidden="true"></i> Edit
				</a>
				<a class="btn btn-danger btn-sm" 
					href="<?php echo base_url('matakuliah/delete_matakuliah/'.$matakuliah->id_matakuliah); ?>">
					<i class="fa fa-trash fa-fw" aria-hidden="true"></i> Delete
				</a>
			</td>
		</tr>
		<?php
	}
	?>
</table>