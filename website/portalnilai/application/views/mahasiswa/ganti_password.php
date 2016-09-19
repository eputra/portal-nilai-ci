<form class="add-form" data-toggle="validator" role="form" method="post" 
	action="<?php echo base_url('mahasiswa/ganti_password'); ?>">
	<div class="form-group">
		<label for="inputPasbar" class="control-label">Password Baru</label>
		<input type="text" class="form-control" id="inputPasbar" name="password_baru" required>
	</div>
	<div class="form-group">
		<label for="inputPaslam" class="control-label">Password Lama</label>
		<input type="text" class="form-control" id="inputPasbar" name="password_lama" required>
	</div>
	<button type="submit" class="btn btn-hijau">
		<i class="fa fa-edit fa-fw" aria-hidden="true"></i> Ganti Password
	</button>
</form>