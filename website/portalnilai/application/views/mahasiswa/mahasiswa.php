<?php
if ($password['password'] == $password['password_default']) {
	?>
	<div class="bg-danger kesalahan">
		Untuk keamanan, silahkan ganti password default akun anda di menu profil.
	</div>
	<?php
	}
?>
<div class="admin">
	<i class="fa fa-smile-o fa-5x"></i><br>
	Selamat datang mahasiswa <?php echo $this->session->userdata('username') ?>.
</div>