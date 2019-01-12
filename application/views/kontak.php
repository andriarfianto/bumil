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
                    <a class="nav-link" href="<?php echo base_url('home/artikel') ?>">Kontak</a>
                </li>
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
				<!-- Bagian Atas -->
				<div class="col-lg-12">
					<div class="row">
						<!-- Sisi Kiri -->
						<div class="col-md-9">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo base_url('home'); ?>">Home</a>
                                <li class="breadcrumb-item active">Kontak</li>
                                </li>
							</ol>

                            <hr>

							<div class='col-sm-12' style="margin-top: 4%; margin-bottom: 3%;">
								<div class='card md-3'>
                                    <div class="card-header">
                                        <span class='h4'>Kontak Informasi dibagi 2 bagian saja</span><br>
										<span class='small text-muted'>Informasi Kontak Penulis</span>
                                    </div>

									<div class='card-body'>
										Silahkan kunjungi bagian bantuan kami untuk informasi umum mengenai beberapa layanan  yang ada dalam website, hal yang berhubungan dengan PT. Kalbe Farma Tbk., dll.  Jika Anda tidak dapat menemukan jawaban untuk pertanyaan Anda, gunakan halaman ini untuk menghubungi Layanan Anggota untuk melaporkan masalah, memberikan umpan balik, memperbarui informasi dan mengirim pertanyaan (surat untuk Editor, penjualan dan peluang pengembangan bisnis, dll).

										Silahkan lengkapi formulir dan Tim Layanan kami akan membantu dengan permintaan Anda.


										Gedung Kalbe
										Jl. Let. Jend. Supranto Kav 4
										Jakarta 10510, Indonesia
										PO. BOX 3105 JAK.

										Phone : 6221-42873888-39
										Fax : 6221-4256326
										Email : info@kalbemed.com
									</div>

									<div class="card-footer">
										Footer
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
									<li><a href="<?php echo base_url('home/artikel') ?>"> Artikel</a></li>
									<li>
										<a  href="<?php echo base_url('home/informasi') ?>">Informasi</a>
									</li>
									<li>
										<a  href="<?php echo base_url('home/artikel') ?>">Kontak</a>
									</li>
									<li>
										<a  href="<?php echo base_url('home/tentang') ?>">Tentang</a>
									</li>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="col-lg-12">
					<div class="row">
						<!-- Sisi Kiri -->
						<div class="col-md-9">

							<hr>

							<div class='col-sm-12' style="margin-top: 4%; margin-bottom: 3%;">
								<div class='card md-3'>
									<div class="card-header">
										<span class='h4'>Kirim Pertanyaan</span><br>
										<span class='small text-muted'>Kirim pertanyaan yang ingin anda tanyakan</span>
									</div>

									<div class='card-body'>
										<form class="form-horizontal" action="/action_page.php" style="margin-left: 20%;">
											<div class="form-group">
												<label class="control-label col-sm-2" for="email">Email:</label>
												<div class="col-sm-8">
													<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2" for="email">Nama:</label>
												<div class="col-sm-8">
													<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2" for="email">Kota:</label>
												<div class="col-sm-8">
													<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2" for="email">Telephone:</label>
												<div class="col-sm-8">
													<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2" for="email">Subjecy:</label>
												<div class="col-sm-8">
													<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2" for="email">Isi pesan:</label>
												<div class="col-sm-8">
													<textarea type="email" class="form-control" id="email" placeholder="Enter email" name="email"></textarea>
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-offset-2 col-sm-8">
													<button type="submit" class="btn btn-primary">Submit</button>
												</div>
											</div>
										</form>
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
