<!-- Sidebar -->
<ul class="sidebar navbar-nav">
	<!-- Main Menu - Dashboard -->
	<li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
		<a class="nav-link" href="<?php echo site_url('ibuhamil/dashboard'); ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span>
		</a>
	</li>
	<!-- Konsultasi -->
	<!-- <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'ibuhamil/konsultasi/' ?  'active' : ''?>">
		<a class="nav-link dropdown-toggle" href="<?php echo base_url('ibuhamil/konsultasi'); ?>"  role="button">
			<i class="fas fa-fw fa-file"></i>
			<span>Konsultasi</span>
		</a>
	</li> -->

	<li class="nav-item <?php echo $this->uri->segment(2) == 'ibuhamil/konsultasi/' ?  'active' : ''?>">
		<a class="nav-link" href="<?php echo base_url('ibuhamil/konsultasi'); ?>">
			<i class="fas fa-fw fa-file"></i>
			<span>Konsultasi</span>
		</a>
	</li>

	<!-- Artikel -->
	<li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'artikel' ?  'active' : ''?>">
		<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
		 aria-expanded="false">
			<i class="fas fa-fw fa-chart-area"></i>
			<span>Hasil Konsultasi</span>
		</a>
		<div class="dropdown-menu" aria-labelledby="pagesDropdown">
			<a class="dropdown-item" href="<?php echo site_url('admin/artikel/add'); ?>">New Artikel</a>
			<a class="dropdown-item" href="<?php echo site_url('admin/artikel'); ?>">List Artikel</a>
		</div>
	</li>
	<!-- Menu Makan -->
	<li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'menu' ?  'active' : ''?>">
		<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
		 aria-expanded="false">
			<i class="fas fa-fw fa-bookmark"></i>
			<span>History</span>
		</a>
		<div class="dropdown-menu" aria-labelledby="pagesDropdown">
			<a class="dropdown-item" href="<?php echo site_url('admin/menu/add'); ?>">New Menu</a>
			<a class="dropdown-item" href="<?php echo site_url('admin/menu'); ?>">List Menu</a>
		</div>
	</li>
	<!-- Chat -->
	<li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'uploads/uploads/' ?  'active' : ''?>">
		<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
		 aria-expanded="false">
			<i class="fas fa-fw fa-comment-alt"></i>
			<span>Chat</span>
		</a>
		<div class="dropdown-menu" aria-labelledby="pagesDropdown">
			<a class="dropdown-item" href="<?php echo site_url('uploads/uploads/add'); ?>">New Upload</a>
			<a class="dropdown-item" href="<?php echo site_url('uploads/uploads/'); ?>">List Upload</a>
		</div>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#">
			<i class="fas fa-fw fa-table"></i>
			<span>Laporan</span>
		</a>
	</li>
</ul>
