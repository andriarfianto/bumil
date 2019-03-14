<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title> Sistem Pemenuhan Gizi Ibu Hamil</title>

	<!-- Bootstrap core CSS-->
	<link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">

	<!-- Page level plugin CSS-->
	<link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.css'); ?>" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url('css/sb-admin.css'); ?>" rel="stylesheet">

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

				<ul class="breadcrumb">
					<li><a href="<?php echo base_url() ?>home">Home</a></li>
				</ul>

				<!-- <div class="jumbotron" style="background-color: #e3e3e3;">
					<center>
					<h1>Sistem Pemenuhan Gizi Ibu Hamil</h1>
					    <h3>Menggunakan Metode Harris Benedict</h3>
					    <h4>Andri Arfianto</h4>
					    <h4>3125111382</h4>
					</center>
				</div> -->
				<hr>

				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-2"></div>
						<div class="col-lg-8">
							<p>
							<center>
								<h1>Sistem Pemenuhan Gizi Ibu Hamil</h1>
								<h3>Menggunakan Metode Harris Benedict</h3>
								<h4>Andri Arfianto</h4>
								<h4>3125111382</h4>
							</center>
							</p>
						</div>
						<div class="col-lg-2"></div>
					</div>
				</div>
				<hr>
				
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-4">
							<p>
								<ul>
									<li><strong><h4>Informasi website :</h4></strong></li>
									Website ini digunakan sebagai implementasi dari tugas akhir yang berjudul "Sistem pemenuhan gizi ibu hamil menggunakan metode harris benedict."
									Aplikasi ini digunakan untuk menghitung dan mengetahui jumlah kebutuhan gizi dari ibu hamil dari proses perhitungan : 
									energi basal metabolisme ditambah nilai aktifitas fisik ditambah hasil olah makanan dan usia_kehamilan yang diambil dari parameter
									tinggi badan ibu hamil, berat badan ibu hamil, usia ibu hamil.							
								</ul>
							</p>
						</div>
						<div class="col-lg-4">
							<p>
								<ul>
									<li><strong><h4>Pengguna aplikasi :</h4></strong></li>
									Aplikasi ini digunakan oleh ibu hamil sebagai sarana untuk mengetahui kondisi kesehatan dan gizi ibu hamil dari pekan per pekan dengan pemberian
									saran makan dari hasil konsultasi perhitungan nilai gizi ibu hamil
								</ul>
							</p>
						</div>
						<div class="col-lg-4">
							<p>
								<ul>									
									<li><strong><h4>Cara penggunaan :</h4></strong></li>
									Pengguna akan memasukkan data tinggi badan, berat badan, usia ibu hamil, usia kandungan dan aktifitas fisik.
									Kemudian, sistem akan mengolah data tersebut dengan metode harris benedict untuk menghitung jumlah kebutuhan gizi ibu hamil.
									Dari kebutuhan energi gizi tersebut akan dijadikan saran menu makan yang sesuai dengan nilai hasil hitung yang didapat.						
								</ul>
							</p>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

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
