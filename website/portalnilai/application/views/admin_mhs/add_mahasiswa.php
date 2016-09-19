<form class="add-form" data-toggle="validator" role="form" method="post" 
	action="<?php echo base_url('admin_mhs/add_mahasiswa'); ?>">
	<div class="form-group">
		<label for="inputNim" class="control-label">NIM</label>
		<input type="text" class="form-control" id="inputNim" name="nim" required>
	</div>
	<div class="form-group">
		<label for="inputNama" class="control-label">Nama</label>
		<input type="text" class="form-control" id="inputNama" name="nama" required>
	</div>
	<div class="form-group">
		<label for="inputJenisKelamin" class="control-label">Jenis Kelamin</label>
		<div>
			<label class="radio-inline">
				<input type="radio" name="jenis_kelamin" id="Laki-laki" value="Laki-laki" checked> Laki-laki
			</label>
			<label class="radio-inline">
				<input type="radio" name="jenis_kelamin" id="Perempuan" value="Perempuan" > Perempuan
			</label>
			</div>
	</div>
	<div class="form-group">
		<label for="inputTanggalLahir" class="control-label">Tanggal Lahir</label>
		<div class="row">
			<div class="col-xs-4">
				<input type="text" pattern="^[0-9]{2}$" class="form-control" name="tanggal" 
					placeholder="tanggal" required>
			</div>
			<div class="col-xs-4">
				<input type="text" pattern="^[0-9]{2}$" class="form-control" name="bulan" 
					placeholder="bulan" required>
			</div>
			<div class="col-xs-4">
				<input type="text" pattern="^[0-9]{4}$" class="form-control" name="tahun" 
					placeholder="tahun" required>
			</div>
		</div>
		<span id="helpTanggalLahir" class="help-block">
			Tanggal lahir menggunakan dua angka. Contoh 30-01-2016.
		</span>
	</div>
	<div class="form-group">
		<label for="inputJurusan" class="control-label">Jurusan</label>
		<select class="form-control" name="jurusan">
			<?php
			foreach ($jurusan as $jurusan) {
				?>
				<option value="<?php echo $jurusan->id_jurusan; ?>">
					<?php echo $jurusan->jurusan; ?>
				</option>
				<?php
			}
			?>
		</select>
	</div>
	<div class="form-group">
		<label for="inputKelas" class="control-label">Kelas</label>
		<select class="form-control" name="kelas">
			<?php
			foreach ($kelas as $kelas) {
				?>
				<option value="<?php echo $kelas->id_kelas; ?>">
					<?php echo $kelas->kelas; ?>
				</option>
				<?php
			}
			?>
		</select>
	</div>
	<button type="submit" class="btn btn-hijau">
		<i class="fa fa-plus fa-fw" aria-hidden="true"></i> Tambah Mahasiswa
	</button>
</form>