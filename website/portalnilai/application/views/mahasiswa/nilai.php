<div class="bg-success pesan">
	Jika ada kesalahan data, silahkan hubungi TU.
</div>
<table>
	<tr>
		<th width="16%">Matakuliah</th>
		<th width="16%">SKS</th>
		<th width="16%">Dosen</th>
		<th width="16%">Nilai</th>
		<th width="16%">Bobot</th>
		<th width="16%">Mutu</th>
	</tr>
	<?php
	foreach ($nilai as $nilai) {
		?>
		<tr>
			<td><?php echo $nilai->matakuliah; ?></td>
			<td><?php echo $nilai->sks; ?></td>
			<td><?php echo $nilai->dosen; ?></td>
			<td><?php echo $nilai->nilai; ?></td>
			<td><?php echo $nilai->bobot; ?></td>
			<td><?php echo $nilai->mutu; ?></td>
		</tr>
		<?php
	}
	?>
</table>
<table class="hasil">
	<tr>
		<th colspan="3">Hasil</th>
	</tr>
	<tr>
		<td>Jumlah Mutu</td>
		<td>:</td>
		<td><?php echo $ipk['mutu']; ?></td>
	</tr>
	<tr>
		<td>Jumlah SKS</td>
		<td>:</td>
		<td><?php echo $ipk['sks']; ?></td>
	</tr>
	<tr>
		<td>IPK</td>
		<td>:</td>
		<td><?php echo number_format($ipk['ipk'], 2); ?></td>
	</tr>
</table>