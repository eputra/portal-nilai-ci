<?php
if ($this->session->flashdata('input_nilai')) {
	?>
	<div class="bg-success pesan">
		<?php echo $this->session->flashdata('input_nilai'); ?>
	</div>
	<?php
}

if ($this->session->flashdata('edit_nilai')) {
	?>
	<div class="bg-success pesan">
		<?php echo $this->session->flashdata('edit_nilai'); ?>
	</div>
	<?php
}

if ($this->session->flashdata('delete_nilai')) {
	?>
	<div class="bg-success pesan">
		<?php echo $this->session->flashdata('delete_nilai'); ?>
	</div>
	<?php
}
?>
<a class="btn btn-hijau" 
	href="<?php echo base_url('nilai/set_add_nilai'); ?>">
	<i class="fa fa-plus fa-fw" aria-hidden="true"></i> Input Nilai
</a>
<table>
	<tr>
		<th width='10%'>ID Nilai</th>
		<th width='13%'>NIM</th>
		<th width='15%'>Nama</th>
		<th width='17%'>Matakuliah</th>
		<th width='17%'>Dosen</th>
		<th width='12%'>Nilai</th>
		<th width='14%'>Kelola</th>
	</tr>
	<?php
	foreach ($nilai as $nilai) {
		?>
		<tr>
			<td><?php echo $nilai->id_nilai; ?></td>
			<td><?php echo $nilai->nim; ?></td>
			<td><?php echo $nilai->mahasiswa; ?></td>
			<td><?php echo $nilai->matakuliah; ?></td>
			<td><?php echo $nilai->dosen; ?></td>
			<td><?php echo $nilai->nilai; ?></td>
			<td>
				<a class="btn btn-warning btn-sm" 
					href="<?php echo base_url('nilai/edit_nilai/'.$nilai->id_nilai); ?>">
					<i class="fa fa-edit fa-fw" aria-hidden="true"></i> Edit
				</a>
				<a class="btn btn-danger btn-sm" 
					href="<?php echo base_url('nilai/delete_nilai/'.$nilai->id_nilai); ?>">
					<i class="fa fa-trash fa-fw" aria-hidden="true"></i> Delete
				</a>
			</td>
		</tr>
		<?php
	}
	?>
</table>