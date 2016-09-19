<form class="add-form" method="post" action="<?php echo base_url('nilai/set_add_nilai'); ?>">
	<div class="form-group">
		<label for="inputMatakuliah">Matakuliah</label>
		<select class="form-control" name="matakuliah">
			<?php
			foreach ($matakuliah as $matakuliah) {
				?>
				<option value="<?php echo $matakuliah->id_matakuliah; ?>">
					<?php echo $matakuliah->matakuliah; ?>
				</option>
				<?php
			}
			?>
		</select>
	</div>
	<div class="form-group">
		<label for="inputDosen">Dosen</label>
		<select class="form-control" name="dosen">
			<?php
			foreach ($dosen as $dosen) {
				?>
				<option value="<?php echo $dosen->id_dosen; ?>">
					<?php echo $dosen->nama; ?>
				</option>
				<?php
			}
			?>
		</select>
	</div>
	<div class="form-group">
		<label for="inputKelas">Kelas</label>
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
		Selanjutnya <i class="fa fa-arrow-right fa-fw" aria-hidden="true"></i>
	</button>
</form>