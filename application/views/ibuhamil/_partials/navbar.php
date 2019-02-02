<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link navbar-brand" href="<?php echo base_url('ibuhamil/dashboard'); ?>">IBU HAMIL</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('ibuhamil/dashboard'); ?>">Dashboard</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('ibuhamil/konsultasi/index'); ?>">Konsultasi</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('ibuhamil/konsultasi/riwayat/'); ?>">Riwayat Konsultasi</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('ibuhamil/menu'); ?>">Menu Makan</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('ibuhamil/chat') ?>">Chat</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('ibuhamil/profile') ?>">Data Diri</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('ibuhamil/password'); ?>">Ganti Password</a>
			</li>
			<!-- <li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('ibuhamil/konsultasi/nyoba'); ?>">Nyoba Konsultasi</a>
			</li> -->
		</ul>
	</div>

	<!-- Navbar -->
	<ul class="navbar-nav ml-auto ml-md-0">		
		<li class="nav-item">
			<a class="nav-link " href="#">
				<i class="fas fa-bell fa-fw"></i>
			</a>			
		</li>
		<li class="nav-item">
			<a class="nav-link " href="<?php echo site_url('ibuhamil/chat/') ?>">
				<i class="fas fa-envelope fa-fw"></i>
			</a>			
		</li>
		<li class="nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
			aria-expanded="false">
				<i class="fas fa-user-circle fa-fw"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
				<a class="dropdown-item" href="#">Settings</a>
				<a class="dropdown-item" href="#">Activity Log</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
			</div>
		</li>
	</ul>
</nav>
