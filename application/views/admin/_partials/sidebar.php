<!-- Sidebar -->
<ul class="sidebar navbar-nav">
	<!-- Main Menu - Dashboard -->
	<li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
		<a class="nav-link" href="<?php echo site_url('admin/overview'); ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span>
		</a>
	</li>
	<!-- Ibu Hamil -->
	<li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'user' ?  'active' : ''?>">
		<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
		 aria-expanded="false">
			<i class="fas fa-fw fa-folder"></i>
			<span>Pengguna</span>
		</a>
		<div class="dropdown-menu" aria-labelledby="pagesDropdown">
			<a class="dropdown-item" href="<?php echo site_url('admin/user/add'); ?>">New Pengguna</a>
			<a class="dropdown-item" href="<?php echo site_url('admin/user'); ?>">List Pengguna</a>
		</div>
	</li>
	<!-- Artikel -->
	<li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'artikel' ?  'active' : ''?>">
		<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
		 aria-expanded="false">
			<i class="fas fa-fw fa-chart-area"></i>
			<span>Artikel</span>
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
			<span>Menu Makan</span>
		</a>
		<div class="dropdown-menu" aria-labelledby="pagesDropdown">
			<a class="dropdown-item" href="<?php echo site_url('admin/menu/add'); ?>">New Menu</a>
			<a class="dropdown-item" href="<?php echo site_url('admin/menu'); ?>">List Menu</a>
		</div>
	</li>
	<!-- Bahan Makan -->
	<li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'bahan' ?  'active' : ''?>">
		<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
		 aria-expanded="false">
			<i class="fas fa-fw fa-poll-h"></i>
			<span>Bahan Makan</span>
		</a>
		<div class="dropdown-menu" aria-labelledby="pagesDropdown">
			<a class="dropdown-item" href="<?php echo site_url('admin/bahan/add'); ?>">New Bahan</a>
			<a class="dropdown-item" href="<?php echo site_url('admin/bahan'); ?>">List Bahan</a>
		</div>
	</li>
	<!-- Konsultasi -->
	<li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'uploads/uploads/' ?  'active' : ''?>">
		<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
		 aria-expanded="false">
			<i class="fas fa-fw fa-file-medical"></i>
			<span>Konsultasi</span>
		</a>
		<div class="dropdown-menu" aria-labelledby="pagesDropdown">
			<a class="dropdown-item" href="<?php echo site_url('uploads/uploads/add'); ?>">New Upload</a>
			<a class="dropdown-item" href="<?php echo site_url('uploads/uploads/'); ?>">List Upload</a>
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
	<!-- <li class="nav-item <?php echo $this->uri->segment(2) == 'uploads/uploads/' ?  'active' : ''?>">
	<a class="nav-link" href="<?php echo site_url('uploads/uploads'); ?>">
		<i class="fas fa-fw fa-upload"></i>
		<span>Upload</span>
	</a>
	</li> -->	
	<li class="nav-item">
		<a class="nav-link" href="#">
			<i class="fas fa-fw fa-table"></i>
			<span>Laporan</span>
		</a>
	</li>
</ul>
