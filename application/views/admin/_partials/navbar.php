<nav class="navbar navbar-expand navbar-dark bg-success static-top style=" style="border-bottom-width: 0px;">

	<a class="navbar-brand mr-1" href="<?php echo site_url('admin'); ?>">
		ADMINISTRATOR
	</a>

	<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
		<i class="fas fa-bars"></i>
	</button>

	<!-- Navbar Search -->
	<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
		
	</form>

	<!-- Navbar -->
	<ul class="navbar-nav ml-auto ml-md-0">
		<li class="nav-item dropdown no-arrow mx-1">
			<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
			aria-expanded="false">
				<i class="fas fa-bell fa-fw"></i>
			</a>			
		</li>
		<li class="nav-item">
			<a class="nav-link " href="<?php echo site_url('admin/chat/') ?>">
				<i class="fas fa-envelope fa-fw"></i>
			</a>			
		</li>
		<li class="nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
			aria-expanded="false">
				<i class="fas fa-user-circle fa-fw"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
				<a class="dropdown-item" href="<?php echo site_url('admin/user/profile/'); ?>">Profile</a>
				<a class="dropdown-item" href="<?php echo site_url('admin/password/'); ?>"> Ganti Password</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
			</div>
		</li>
	</ul>
</nav>
