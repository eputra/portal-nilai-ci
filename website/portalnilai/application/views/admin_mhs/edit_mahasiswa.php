<form class="add-form" data-toggle="validator" role="form" method="post" 
	action="<?php echo base_url('admin_mhs/edit_mahasiswa/'.$mahasiswa['nim']); ?>">
	<div class="form-group">
		<label for="inputNim" class="control-label">NIM</label>
		<input type="text" class="form-control" id="inputNim" name="nim" 
			value="<?php echo $mahasiswa['nim']; ?>" disabled>
	</div>
	<div class="form-group">
		<label for="inputNama" class="control-label">Nama</label>
		<input type="text" class="form-control" id="inputNama" name="nama"
			value="<?php echo $mahasiswa['nama']; ?>" required>
	</div>
	<div class="form-group">
		<label for="inputJenisKelamin" class="control-label">Jenis Kelamin</label>
		<div>
			<?php
			if ($mahasiswa['jenis_kelamin'] == 'Laki-laki') {
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
					placeholder="tanggal" value="<?php echo $mahasiswa['tanggal']; ?>" required>
			</div>
			<div class="col-xs-4">
				<input type="text" pattern="^[0-9]{2}$" class="form-control" name="bulan" 
					placeholder="bulan" value="<?php echo $mahasiswa['bulan']; ?>" required>
			</div>
			<div class="col-xs-4">
				<input type="text" pattern="^[0-9]{4}$" class="form-control" name="tahun" 
					placeholder="tahun" value="<?php echo $mahasiswa['tahun']; ?>" required>
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
				if ($jurusan->id_jurusan == $mahasiswa['id_jurusan']) {
					?>
					<option value="<?php echo $jurusan->id_jurusan; ?>" selected>
						<?php echo $jurusan->jurusan; ?>
					</option>
					<?php
				} else {
					?>
					<option value="<?php echo $jurusan->id_jurusan; ?>">
						<?php echo $jurusan->jurusan; ?>
					</option>
					<?php
				}
			}
			?>
		</select>
	</div>
	<div class="form-group">
		<label for="inputKelas" class="control-label">Kelas</label>
		<select class="form-control" name="kelas">
			<?php
			foreach ($kelas as $kelas) {
				if ($kelas->id_kelas == $mahasiswa['id_kelas']) {
					?>
					<option value="<?php echo $kelas->id_kelas; ?>" selected>
						<?php echo $kelas->kelas; ?>
					</option>
					<?php
				} else {
					?>
					<option value="<?php echo $kelas->id_kelas; ?>">
						<?php echo $kelas->kelas; ?>
					</option>
					<?php
				}
			}
			?>
		</select>
	</div>
	<button type="submit" class="btn btn-warning">
		<i class="fa fa-edit fa-fw" aria-hidden="true"></i> Edit Mahasiswa
	</button>
</form>