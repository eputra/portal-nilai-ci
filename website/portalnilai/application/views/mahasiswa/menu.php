<div class="menu">
	<ul>
		<li style="float:left"><b>Portal Nilai</b></li>
		<li class="<?php if($this->uri->segment(2)==""){echo "active";} ?>">
			<a href="<?php echo base_url('mahasiswa'); ?>">Dashboard</a>
		</li>
		<li class="<?php if($this->uri->segment(2)=="profil"){echo "active";} ?>">
			<a href="<?php echo base_url('mahasiswa/profil'); ?>">Profil</a>
		</li>
		<li class="<?php if($this->uri->segment(2)=="nilai"){echo "active";} ?>">
			<a href="<?php echo base_url('mahasiswa/nilai'); ?>">Nilai</a>
		</li>
		<li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
	</ul>
</div>
<div class="konten">
	<h1><?php echo $title; ?></h1>
	<hr>