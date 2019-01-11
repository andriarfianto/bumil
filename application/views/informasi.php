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
				<li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('home/kontak') ?>">Kontak</a>
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

                            <hr>

							<div class='col-sm-12' style="margin-top: 4%; margin-bottom: 3%;">
								<div class='card md-3'>
                                    <div class="card-header" style="background-color: #d0d0d0">
                                        <span class='h4'>Informasi Header</span><br>
										<span class='small text-muted'>Ditulis Oleh Administrator</span>
                                    </div>

									<div class='card-body'>
										<p>Body</p>
									</div>

									<div class="card-footer" style="background-color: #d0d0d0">
										Footer
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card md-3">
								<div class="card-header">
									<h3 class="panel-title">Panel Informasi</h3>
								</div>
								<div class="card-body">
									    <li>Kosong</li>
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
