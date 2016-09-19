<form class="add-form" data-toggle="validator" role="form" method="post" 
	action="<?php echo base_url('kelas/add_kelas'); ?>">
	<div class="form-group">
		<label for="inputKelas" class="control-label">Nama Kelas</label>
		<input type="text" class="form-control" id="inputKelas" name="kelas" required>
	</div>
	<button type="submit" class="btn btn-hijau">
		<i class="fa fa-plus fa-fw" aria-hidden="true"></i> Tambah Kelas
	</button>
</form>