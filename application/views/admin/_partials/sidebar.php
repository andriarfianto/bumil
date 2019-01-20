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
			<span>Ibu Hamil</span>
		</a>
		<div class="dropdown-menu" aria-labelledby="pagesDropdown">
			<a class="dropdown-item" href="<?php echo site_url('admin/user/add'); ?>">Tambah Ibu Hamil</a>
			<a class="dropdown-item" href="<?php echo site_url('admin/user'); ?>">Daftar Ibu Hamil</a>
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
			<a class="dropdown-item" href="<?php echo site_url('admin/artikel/add'); ?>">Tambah Artikel</a>
			<a class="dropdown-item" href="<?php echo site_url('admin/artikel'); ?>">Daftar Artikel</a>
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
			<a class="dropdown-item" href="<?php echo site_url('admin/menu/add'); ?>">Tambah Menu</a>
			<a class="dropdown-item" href="<?php echo site_url('admin/menu'); ?>">Daftar Menu</a>
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
			<a class="dropdown-item" href="<?php echo site_url('admin/bahan/add'); ?>">Tambah Bahan</a>
			<a class="dropdown-item" href="<?php echo site_url('admin/bahan'); ?>">Daftar Bahan</a>
		</div>
	</li>
	<!-- Konsultasi -->
	<li class="nav-item <?php echo $this->uri->segment(2) == 'konsultasi' ?  'active' : ''?>">
		<a class="nav-link" href="<?php echo site_url('admin/konsultasi'); ?>">
			<i class="fas fa-stethoscope"></i>
			<span>Konsultasi</span>
		</a>		
	</li>
	<!-- Chat -->	
	<li class="nav-item <?php echo $this->uri->segment(2) == 'chat' ?  'active' : ''?>">
		<a class="nav-link" href="<?php echo site_url('admin/chat'); ?>">
			<i class="fas fa-fw fa-comment-alt"></i>			
			<span>Chat</span>
		</a>
	</li>	
	<!-- <li class="nav-item">
		<a class="nav-link" href="#">
			<i class="fas fa-fw fa-table"></i>
			<span>Laporan</span>
		</a>
	</li> -->
</ul>
