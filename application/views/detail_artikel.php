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
                    <a class="nav-link" href="#">Informasi</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
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

				<!-- <div class="col-sm-12">

					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="<?php echo base_url('upload/admin/slides.jpg'); ?>" alt="First slide">
								<div class="carousel-caption">
									<h3>Hello Ibu</h3>
									<p>Cek Kandungan Anda Rutin Setiap Bulan.</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="<?php echo base_url('upload/admin/slides.jpg'); ?>" alt="Second slide">
								<div class="carousel-caption">
									<h3>Jaga Kesehatan</h3>
									<p>Makanlah Sesuai Resep & Kebutuhan Kalori Anda</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="<?php echo base_url('upload/admin/slides.jpg'); ?>" alt="Third slide">
								<div class="carousel-caption">
									<h3>Obrolkan</h3>
									<p>Punya Pertanyaan ?, Silahkan Gunakan Fitur Chat Dokter.</p>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>

				</div>
				<hr> -->


				<div class="col-lg-12">
					<div class="row">
						<!-- Sisi Kiri -->
						<div class="col-md-9">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo base_url('home'); ?>">Home</a>
                                <li class="breadcrumb-item active">Artikel</li>
                                </li>
							</ol>

							<!-- <?php // foreach ($artikels as $artikel): ?> -->

                            <hr>
                            <input type="hidden" name="id" value="<?php echo $artikel->id_artikel; ?>">

							<div class='col-sm-12' style="margin-top: 4%; margin-bottom: 3%;">
								<div class='card md-3'>
                                    <div class="card-header" style="background-color: #d0d0d0">
                                        <span class='h4'><?php echo $artikel->judul_artikel; ?></span><br>
										<span class='small text-muted'>Ditulis Oleh Administrator</span>
                                    </div>

									<div class='card-body'>
                                        <img src="<?php echo base_url('upload/artikel/'.$artikel->foto); ?>" width="30%" style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;">
                                        <p><?php echo $artikel->isi_artikel?>                                        </p>
									</div>

									<div class="card-footer" align='right' style="background-color: #d0d0d0">
										<a href="<?php echo base_url('home/artikel') ?>">
                                            <i class="fas fa-arrow-left"></i> Kembali
                                        </a>
									</div>
								</div>
							</div>
							<!-- <?php //endforeach; ?> -->
						</div>

						<div class="col-md-3">
							<div class="card md-3">
								<div class="card-header">
									<h3 class="panel-title">Panel Informasi</h3>
								</div>
								<div class="card-body">
									<li><a href="#">Makanan Untuk Ibu Hamil yang Baik Untuk Pertumbuhan Otak Janin</a></li><li><a href="#">Tips Agar Produksi ASI Banyak</a></li><li><a href="#">Air Kelapa Untuk Ibu Hamil dan Kandungan Gizinya</a></li>
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
