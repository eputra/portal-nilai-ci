<form class="add-form" data-toggle="validator" role="form" method="post" 
	action="<?php echo base_url('matakuliah/edit_matakuliah/'.$matakuliah->id_matakuliah); ?>">
	<div class="form-group">
		<label for="inputmatakuliah" class="control-label">Nama Matakuliah</label>
		<input type="text" class="form-control" id="inputmatakuliah" name="matakuliah"
			value="<?php echo $matakuliah->matakuliah; ?>" required>
	</div>
	<div class="form-group">
		<label for="inputsks" class="control-label">SKS</label>
		<input type="text" pattern="^[1-9]{1}$" class="form-control" id="inputsks" name="sks"
			value="<?php echo $matakuliah->sks; ?>" required>
	</div>
	<button type="submit" class="btn btn-warning">
		<i class="fa fa-edit fa-fw" aria-hidden="true"></i> Edit Matakuliah
	</button>
</form>