<!DOCTYPE html>
<html lang="en">

<head>

	<?php $this->load->view("admin/_partials/head.php") ?>

</head>

<body id="page-top">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link navbar-brand" href="<?php echo base_url('home'); ?>">Gizi Ibu Hamil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('home/artikel') ?>">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('home/informasi') ?>">Informasi</a>
                </li>
				<!-- <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('home/kontak') ?>">Kontak</a>
                </li> -->
				<li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('home/tentang') ?>">Tentang</a>
                </li>
            </ul>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('login'); ?>" data-toggle="modal" data-target="#loginModal">Login Modal</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('login'); ?>">
                        Login
                    </a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('register'); ?>">
                        Register
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                        Register
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?php echo base_url('register'); ?>">Ibu Hamil</a>
                        <a class="dropdown-item" href="<?php echo base_url('register'); ?>"">Petugas Kesehatan</a>
                    </div>
                </li> -->
            </ul>
        </div>
    </nav>

	<div id="wrapper">

		<div id="content-wrapper">

			<div class="container-fluid">

				<div class="col-lg-12">
					<div class="row">
						<!-- Sisi Kiri -->
						<div class="col-md-9">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo base_url('home'); ?>">Home</a>
                                <li class="breadcrumb-item active">Tentang</li>
                                </li>
							</ol>

							<div class='col-sm-12' style="margin-top: 1%; margin-bottom: 3%;">
								<div class="row">
									<div class='card md-3'>
										<div class="card-header">
											<span class='h4'>Tentang Aplikasi</span><br>
											<span class='small text-muted'>Data Profile Penulis</span>
										</div>

										<div class='card-body'>
											<div class="row">
												<div class="col-sm-3">
													<img src="<?php echo base_url('upload/admin/profile data diri.png') ?>" alt="Profile Data Diri">
												</div>
												<div class="col-sm-9">
													<h5>Aplikasi ini merupakan Proyek Tugas Akhir yang digunakan sebagai salah satu syarat mencapai derajat Sarjana S-1 Program Studi Teknik Informatik Universitas Teknologi Yogyakarta (UTY).</h5>
													<h5>Penulis bernama Andri Arfianto dengan Nim 3125111382 mahasiswa prodi Teknik Informatika tahun 2012 yang mengambil judul Sistem Pemenuhan Gizi Ibu Hamil menggunakan Metode Harris Benedict.</h5>
													<h5>Aplikasi ini berguna untuk mengetahui kebutuhan gizi ibu hamil menggunakan metode Harris Benedict dengan memasukkan data tinggi badan ibu hamil, berat badan ibu hamil, usia ibu hamil, usia kandungan dan kondisi ibu hamil.</h5>
												</div>
											</div>
										</div>

										<div class="card-footer">
											Footer
										</div>
									</div>
								</div>
							</div>

						</div>

                        <div class="col-md-3">
							<div class="card md-3">
								<div class="card-header">
									<h3 class="panel-title">Kontak Informasi</h3>
								</div>
								<div class="card-body">
									<li>
										<a  href="<?php echo base_url('home') ?>">Home Page</a>
									</li>
									<li><a href="<?php echo base_url('home/artikel') ?>"> Artikel</a></li>
									<li>
										<a  href="<?php echo base_url('home/informasi') ?>">Informasi</a>
									</li>
									<!-- <li>
										<a  href="<?php echo base_url('home/artikel') ?>">Kontak</a>
									</li> -->
									<li>
										<a  href="<?php echo base_url('home/tentang') ?>">Tentang</a>
									</li>
									<!-- <li>
										<a  href="<?php echo base_url('login') ?>">Login</a>
									</li>
									<li>
										<a  href="<?php echo base_url('register') ?>">Register</a>
									</li> -->
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- /.content-wrapper -->

		<!-- Sticky Footer -->
		<footer class="sticky-footer" style="width: 100%">
			<div class="container my-auto">
				<div class="copyright text-center my-auto">
					<span>Copyright ©
						<?php echo SITE_NAME ." ". Date('Y') ?>
					</span>
				</div>
			</div>
		</footer>

	</div>
	<!-- /#wrapper -->

	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
