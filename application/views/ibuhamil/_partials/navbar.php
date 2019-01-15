<!-- <nav class="navbar navbar-expand navbar-dark bg-primary static-top style=" style="border-bottom-width: 0px;">

	<a class="navbar-brand mr-1" href="<?php echo site_url('admin'); ?>">
		IBU HAMIL
	</a>

	<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
		<i class="fas fa-bars"></i>
	</button>


	<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

	</form>


	<ul class="navbar-nav ml-auto ml-md-0">
		<li class="nav-item dropdown no-arrow mx-1">
			<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
			 aria-expanded="false">
				<i class="fas fa-bell fa-fw"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Something else here</a>
			</div>
		</li>
		<li class="nav-item dropdown no-arrow mx-1">
			<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
			 aria-expanded="false">
				<i class="fas fa-envelope fa-fw"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Something else here</a>
			</div>
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

</nav> -->

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link navbar-brand" href="<?php echo base_url('ibuhamil/dashboard'); ?>">IBU HAMIL</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('ibuhamil/konsultasi/index'); ?>">Konsultasi</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('ibuhamil/konsultasi/riwayat/'); ?>">Riwayat Konsultasi</a>
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
		<li class="nav-item dropdown no-arrow mx-1">
			<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
			 aria-expanded="false">
				<i class="fas fa-bell fa-fw"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Something else here</a>
			</div>
		</li>
		<li class="nav-item dropdown no-arrow mx-1">
			<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
			 aria-expanded="false">
				<i class="fas fa-envelope fa-fw"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Something else here</a>
			</div>
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
