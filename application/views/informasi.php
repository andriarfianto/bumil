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
                                <li class="breadcrumb-item active">Informasi</li>
                                </li>
							</ol>                            

							<div class="row">
								<div class='col-sm-12' style="margin-top: 1%; margin-bottom: 3%;">
									<div class="row">
										<div class="col-sm-6">
											<div class='card md-3'>
												<div class="card-header">
													<span class='h4'>Informasi Pengguna</span><br>
													<span class='small text-muted'>Silahkan baca informasi berikut</span>
												</div>

												<div class='card-body'>
													<h4>Artikel : </h4>
													<p>berisi tentang informasi dan pengetahuan mengenai ibu hamil seputar kesehatan ibu hamil, kehamilan ibu hamil dan kebutuhan gizi ibu hamil</p>
													<!-- <h4>Kontak : </h4>
													<p>Jika anda ingin menghubungi informasi penulis silahkan hubungi kontak yang tertera atau apabila belum jelas silahkan kirim pertanyaan pada kolom yang telah tertera</p> -->
													<h4>Login : </h4>
													<p>Apabila anda sudah memiliki akun silahkan login dengan mengisi data username dan password dengan benar</p>
													<h4>Register : </h4>
													<p>Silahkan daftarkan diri anda apabila belum memiliki akun untuk mengakses sistem dengan memilih tombol menu pada bagian kanan atas menu</p>
													<h4>Tentang : </h4>
													<p>Berisi informasi tentang penulis dan keterangan dari aplikasi yang dibuat</p>
												</div>

												<div class="card-footer">
													Footer
												</div>
											</div>
										</div>

										<div class="col-sm-6">
											<div class='card md-3'>
												<div class="card-header">
													<span class='h4'>Kontak Informasi</span><br>
													<span class='small text-muted'>Informasi Kontak Penulis</span>
												</div>

												<div class='card-body'>
													Silahkan hubungi administrator atau penulis dengan cara hubungi nomer yang tertera dibawah
													<br> atau melalui email
													Jika ada informasi lain belum dimengerti silahkan ditanyakan melakukan 
													<br> formulir pertanyaan dibawah ini <br> <br>

													Tugas Akhir - Teknik Informatika <br>
													Jl. Ringroad utara, Jombor <br>
													Sleman, Yogyakarta <br>						

													Phone : +6289640291150 <br>										
													Email : aarfianto11@gmail.com <br>
												</div>

												<div class="card-footer">
													Footer
												</div>
											</div>
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
