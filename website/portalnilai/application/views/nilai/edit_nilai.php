<form class="add-form" data-toggle="validator" role="form" method="post" 
	action="<?php echo base_url('nilai/edit_nilai/'.$nilai->id_nilai); ?>">
	<div class="form-group">
		<label for="idnilai" class="control-label">ID Nilai</label>
		<input type="text" class="form-control" id="idnilai" name="idnilai" 
			value="<?php echo $nilai->id_nilai; ?>" disabled>
	</div>
	<div class="form-group">
		<label for="nim" class="control-label">NIM</label>
		<input type="text" class="form-control" id="nim" name="nim" 
			value="<?php echo $nilai->nim; ?>" disabled>
	</div>
	<div class="form-group">
		<label for="nama" class="control-label">Nama</label>
		<input type="text" class="form-control" id="nama" name="nama" 
			value="<?php echo $nilai->mahasiswa; ?>" disabled>
	</div>
	<div class="form-group">
		<label for="matakuliah" class="control-label">Matakuliah</label>
		<input type="text" class="form-control" id="matakuliah" name="matakuliah" 
			value="<?php echo $nilai->matakuliah; ?>" disabled>
	</div>
	<div class="form-group">
		<label for="dosen" class="control-label">Dosen</label>
		<input type="text" class="form-control" id="dosen" name="dosen" 
			value="<?php echo $nilai->dosen; ?>" disabled>
	</div>
	<div class="form-group">
		<label for="nilai" class="control-label">Nilai</label>
		<input type="text" pattern="^[A-E]{1}$" class="form-control" id="nilai" name="nilai" 
			value="<?php echo $nilai->nilai; ?>" required>
	</div>
	<button type="submit" class="btn btn-warning">
		<i class="fa fa-edit fa-fw" aria-hidden="true"></i> Edit Nilai
	</button>
</form>