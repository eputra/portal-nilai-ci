<div class="login">
	<div class="title-login">
		<h1><?php echo $title; ?></h1>
	</div>
	<div class="form-login">
		<form data-toggle="validator" role="form" method="post"
			action="<?php echo base_url('login/login'); ?>">
			<div class="form-group form-group-lg">
				<label for="inputUsername" class="control-label">Username</label>
				<input type="text" class="form-control" id="inputUsername" name="username" required>
			</div>
			<div class="form-group form-group-lg">
				<label for="inputPassword" class="control-label">Password</label>
				<input type="password" class="form-control" id="inputPassword" name="password" required>
			</div>
	  		<button type="submit" class="btn btn-lg btn-hijau">Login</button>
		</form>
	</div>
	<?php
	if ($this->session->flashdata('failed_login')) {
		?>
		<div class="failed-login">
			<?php echo $this->session->flashdata('failed_login'); ?>
		</div>
		<?php
	} else {
		?>
		<div class="footer-login">
			Crafted with <i class="fa fa-heart fa-fw" aria-hidden="true" style="color:#e91e63"></i> by Kelompok 3
		</div>
		<?php
	}
	?>
</div>
</body>
</html>