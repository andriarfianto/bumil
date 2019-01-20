<!DOCTYPE html>
<html lang="en">

<head>

	<?php $this->load->view("admin/_partials/head.php") ?>

</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>

	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<!--
				karena ini halaman overview (home), kita matikan partial breadcrumb.
				Jika anda ingin mengampilkan breadcrumb di halaman overview,
				silahkan hilangkan komentar (//) di tag PHP di bawah.
        		-->
				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- Notifikasi data berhasil di simpan -->
				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success alert-dismissable" role="alert">
					<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Icon Cards-->
				<div class="row">
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-primary o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-comments"></i>
								</div>
								<div class="mr-5">Jumlah user</div>
								<h2><?php echo $jumlah_user; ?> Orang</h2>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/user'); ?>">
								<span class="float-left">View Details</span>
								<span class="float-right">
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-warning o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-list"></i>
								</div>
								<div class="mr-5">Jumlah artikel</div>
								<h2><?php echo $jumlah_artikel; ?> Buah</h2>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/artikel'); ?>">
								<span class="float-left">View Details</span>
								<span class="float-right">
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-success o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-shopping-cart"></i>
								</div>
								<div class="mr-5">Jumlah menu makan</div>
								<h2><?php echo $menu_makan; ?> Buah</h2>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/menu'); ?>">
								<span class="float-left">View Details</span>
								<span class="float-right">
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-danger o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-life-ring"></i>
								</div>
								<div class="mr-5">Jumlah bahan makan</div>
								<h2><?php echo $bahan_makan; ?> Buah</h2>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/bahan'); ?>">
								<span class="float-left">View Details</span>
								<span class="float-right">
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
				</div>

				<div class="card mb-3">
					<div class="card-header">
						<i class="fas fa-chart-area"></i>
						Dasboard Panel
					</div>
					<div class="card-body">
						<h2>Selamat datang!</h2>
						<p>di halaman dashboard Admin</p>
					</div>
					<div class="card-footer small text-muted" style="background-color: #E3E3E3;">
							<strong>Selamat datang - Admin</strong> |
							<?php
								date_default_timezone_set('Asia/Jakarta');
								echo $timestamp = date('H:i:s');
							?>
						</div>
				</div>				

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->

	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
