<form class="add-form" data-toggle="validator" role="form" method="post" 
	action="<?php echo base_url('jurusan/add_jurusan'); ?>">
	<div class="form-group">
		<label for="inputJurusan" class="control-label">Nama Jurusan</label>
		<input type="text" class="form-control" id="inputJurusan" name="jurusan" required>
	</div>
	<button type="submit" class="btn btn-hijau">
		<i class="fa fa-plus fa-fw" aria-hidden="true"></i> Tambah Jurusan
	</button>
</form>