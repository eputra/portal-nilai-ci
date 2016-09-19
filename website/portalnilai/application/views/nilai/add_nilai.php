<div class="bg-success pesan">
	Input nilai untuk matakuliah <?php echo $matakuliah->matakuliah; ?> dosen <?php echo $dosen['nama']; ?> kelas <?php echo $kelas->kelas; ?>.
</div>
<form data-toggle="validator" role="form" method="post" 
	action="<?php echo base_url('nilai/add_nilai'); ?>">
	<table>
		<tr>
			<th width="33%">NIM</th>
			<th width="33%">Nama</th>
			<th width="33%">Nilai</th>
		</tr>
		<?php
		$i = 0;
		foreach ($mahasiswa as $mahasiswa) {
			?>
			<tr>
				<td><?php echo $mahasiswa->nim; ?></td>
				<td><?php echo $mahasiswa->nama; ?></td>
				<td>
					<div class="form-group nilai">
						<input type="hidden" name="nim<?php echo $i; ?>" 
							value="<?php echo $mahasiswa->nim; ?>">
						<input type="text" pattern="^[A-E]{1}$" class="form-control" id="nilai" 
							name="nilai<?php echo $i; ?>" required>
					</div>
				</td>
			</tr>
			<?php
			$i++;
		}
		?>
	</table>
	<input type="hidden" name="id_matakuliah" value="<?php echo $matakuliah->id_matakuliah; ?>">
	<input type="hidden" name="id_dosen" value="<?php echo $dosen['id_dosen']; ?>">
	<input type="hidden" name="iterasi" value="<?php echo $i; ?>">
	<div class="btn-nilai">
		<button type="submit" class="btn btn-hijau">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i> Input Nilai
		</button>
	</div>
</form>