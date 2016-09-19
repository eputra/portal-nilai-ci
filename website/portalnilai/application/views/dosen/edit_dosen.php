<form class="add-form" data-toggle="validator" role="form" method="post" 
	action="<?php echo base_url('dosen/edit_dosen/'.$dosen['id_dosen']); ?>">
	<div class="form-group">
		<label for="inputNama" class="control-label">Nama</label>
		<input type="text" class="form-control" id="inputNama" name="nama"
			value="<?php echo $dosen['nama']; ?>" required>
	</div>
	<div class="form-group">
		<label for="inputJenisKelamin" class="control-label">Jenis Kelamin</label>
		<div>
			<?php
			if ($dosen['jenis_kelamin'] == 'Laki-laki') {
				?>
				<label class="radio-inline">
					<input type="radio" name="jenis_kelamin" id="Laki-laki" 
						value="Laki-laki" checked> Laki-laki
				</label>
				<label class="radio-inline">
					<input type="radio" name="jenis_kelamin" id="Perempuan" 
						value="Perempuan"> Perempuan
				</label>
				<?php
			} else {
				?>
				<label class="radio-inline">
					<input type="radio" name="jenis_kelamin" id="Laki-laki" 
						value="Laki-laki"> Laki-laki
				</label>
				<label class="radio-inline">
					<input type="radio" name="jenis_kelamin" id="Perempuan" 
						value="Perempuan" checked> Perempuan
				</label>
				<?php
			}
			?>
		</div>
	</div>
	<div class="form-group">
		<label for="inputTanggalLahir" class="control-label">Tanggal Lahir</label>
		<div class="row">
			<div class="col-xs-4">
				<input type="text" pattern="^[0-9]{2}$" class="form-control" name="tanggal" 
					placeholder="tanggal" value="<?php echo $dosen['tanggal']; ?>" required>
			</div>
			<div class="col-xs-4">
				<input type="text" pattern="^[0-9]{2}$" class="form-control" name="bulan" 
					placeholder="bulan" value="<?php echo $dosen['bulan']; ?>" required>
			</div>
			<div class="col-xs-4">
				<input type="text" pattern="^[0-9]{4}$" class="form-control" name="tahun" 
					placeholder="tahun" value="<?php echo $dosen['tahun']; ?>" required>
			</div>
		</div>
		<span id="helpTanggalLahir" class="help-block">
			Tanggal lahir menggunakan dua angka. Contoh 30-01-2016.
		</span>
	</div>
	<button type="submit" class="btn btn-warning">
		<i class="fa fa-edit fa-fw" aria-hidden="true"></i> Edit Dosen
	</button>
</form>