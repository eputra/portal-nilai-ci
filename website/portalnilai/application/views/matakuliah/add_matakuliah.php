<form class="add-form" data-toggle="validator" role="form" method="post" 
	action="<?php echo base_url('matakuliah/add_matakuliah'); ?>">
	<div class="form-group">
		<label for="inputmatakuliah" class="control-label">Nama Matakuliah</label>
		<input type="text" class="form-control" id="inputmatakuliah" name="matakuliah" required>
	</div>
	<div class="form-group">
		<label for="inputsks" class="control-label">SKS</label>
		<input type="text" pattern="^[1-9]{1}$" class="form-control" id="inputsks" name="sks" required>
	</div>
	<button type="submit" class="btn btn-hijau">
		<i class="fa fa-plus fa-fw" aria-hidden="true"></i> Tambah Matakuliah
	</button>
</form>