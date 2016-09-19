<form class="add-form" data-toggle="validator" role="form" method="post" 
	action="<?php echo base_url('jurusan/edit_jurusan/'.$jurusan->id_jurusan); ?>">
	<div class="form-group">
		<label for="inputJurusan" class="control-label">Nama Jurusan</label>
		<input type="text" class="form-control" id="inputJurusan" name="jurusan" 
			value="<?php echo $jurusan->jurusan; ?>" required>
	</div>
	<button type="submit" class="btn btn-warning">
		<i class="fa fa-edit fa-fw" aria-hidden="true"></i> Edit Jurusan
	</button>
</form>