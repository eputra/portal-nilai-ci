<div class="menu">
	<ul>
		<li style="float:left"><b>Portal Nilai</b></li>
		<li class="<?php if($this->uri->segment(1)=="admin"){echo "active";} ?>">
			<a href="<?php echo base_url('admin'); ?>">Dashboard</a>
		</li>
		<li class="<?php if($this->uri->segment(1)=="jurusan"){echo "active";} ?>">
			<a href="<?php echo base_url('jurusan'); ?>">Jurusan</a>
		</li>
		<li class="<?php if($this->uri->segment(1)=="kelas"){echo "active";} ?>">
			<a href="<?php echo base_url('kelas'); ?>">Kelas</a>
		</li>
		<li class="<?php if($this->uri->segment(1)=="admin_mhs"){echo "active";} ?>">
			<a href="<?php echo base_url('admin_mhs'); ?>">Mahasiswa</a>
		</li>
		<li class="<?php if($this->uri->segment(1)=="dosen"){echo "active";} ?>">
			<a href="<?php echo base_url('dosen'); ?>">Dosen</a>
		</li>
		<li class="<?php if($this->uri->segment(1)=="matakuliah"){echo "active";} ?>">
			<a href="<?php echo base_url('matakuliah'); ?>">Matakuliah</a>
		</li>
		<li class="<?php if($this->uri->segment(1)=="nilai"){echo "active";} ?>">
			<a href="<?php echo base_url('nilai'); ?>">Nilai</a>
		</li>
		<li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
	</ul>
</div>
<div class="konten">
	<h1><?php echo $title; ?></h1>
	<hr>