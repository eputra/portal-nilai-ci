<form class="add-form" data-toggle="validator" role="form" method="post" 
	action="<?php echo base_url('kelas/edit_kelas/'.$kelas->id_kelas); ?>">
	<div class="form-group">
		<label for="inputKelas" class="control-label">Nama Kelas</label>
		<input type="text" class="form-control" id="inputKelas" name="kelas" 
			value="<?php echo $kelas->kelas; ?>" required>
	</div>
	<button type="submit" class="btn btn-warning">
		<i class="fa fa-edit fa-fw" aria-hidden="true"></i> Edit Kelas
	</button>
</form>