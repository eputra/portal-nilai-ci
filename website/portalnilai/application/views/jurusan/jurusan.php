<?php
if ($this->session->flashdata('add_jurusan')) {
	?>
	<div class="bg-success pesan">
		<?php echo $this->session->flashdata('add_jurusan'); ?>
	</div>
	<?php
}

if ($this->session->flashdata('edit_jurusan')) {
	?>
	<div class="bg-success pesan">
		<?php echo $this->session->flashdata('edit_jurusan'); ?>
	</div>
	<?php
}

if ($this->session->flashdata('delete_jurusan')) {
	?>
	<div class="bg-success pesan">
		<?php echo $this->session->flashdata('delete_jurusan'); ?>
	</div>
	<?php
}
?>
<a class="btn btn-hijau" 
	href="<?php echo base_url('jurusan/add_jurusan'); ?>">
	<i class="fa fa-plus fa-fw" aria-hidden="true"></i> Tambah Jurusan
</a>
<table>
	<tr>
		<th width="20%">ID Jurusan</th>
		<th width="60%">Nama Jurusan</th>
		<th width="20%">Kelola</th>
	</tr>
	<?php
	foreach ($jurusan as $jurusan) {
		?>
		<tr>
			<td><?php echo $jurusan->id_jurusan; ?></td>
			<td><?php echo $jurusan->jurusan; ?></td>
			<td>
				<a class="btn btn-warning btn-sm" 
					href="<?php echo base_url('jurusan/edit_jurusan/'.$jurusan->id_jurusan); ?>">
					<i class="fa fa-edit fa-fw" aria-hidden="true"></i> Edit
				</a>
				<a class="btn btn-danger btn-sm" 
					href="<?php echo base_url('jurusan/delete_jurusan/'.$jurusan->id_jurusan); ?>">
					<i class="fa fa-trash fa-fw" aria-hidden="true"></i> Delete
				</a>
			</td>
		</tr>
		<?php
	}
	?>
</table>