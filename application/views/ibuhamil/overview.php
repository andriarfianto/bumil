<!DOCTYPE html>
<html lang="en">

<head>

	<?php $this->load->view("ibuhamil/_partials/head.php") ?>

</head>

<body id="page-top" style="background-color: #158CBA;">

	<div class="container">

		<!-- Nyoba navbar -->
		<?php $this->load->view("ibuhamil/_partials/navbar.php") ?>

		<div id="wrapper" style="background-color: white;">

			<!-- <?php //$this->load->view("ibuhamil/_partials/sidebar.php") ?> -->

			<!-- Sidebar Baru -->
			<ul class="sidebar navbar-nav" style="background-color: white; margin-left: 3%;margin-right: 1%;">
				<img src="<?php echo base_url('upload/user/'.$user->foto); ?>" width="100%" style="margin-top: 7%;">
				<br>
				<b>Nama</b> <?php echo $user->nama; ?> <br> <br>

				<b>Email</b> <?php echo $user->email; ?> <br> <br>

				<b>Tanggal Lahir</b> <?php $date = new DateTime($user->tanggal_lahir);
				echo $date->format('d/m/Y');?> <br> <br>

				<b>No. Telp</b> <?php echo $user->no_telp; ?> <br> <br>

				<b>Alamat</b> <?php echo $user->alamat; ?> <br> <br>
			</ul>

			<!-- <?php //echo $this->load->view("ibuhamil/_partials/sidebar"); ?> -->

			<div id="content-wrapper">

				<div class="container-fluid">

					<!--
					karena ini halaman overview (home), kita matikan partial breadcrumb.
					Jika anda ingin mengampilkan breadcrumb di halaman overview,
					silahkan hilangkan komentar (//) di tag PHP di bawah.
	        		-->
					<?php $this->load->view("ibuhamil/_partials/breadcrumb.php") ?>

					<!-- Notifikasi data berhasil di simpan -->
					<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success alert-dismissable" role="alert">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<?php echo $this->session->flashdata('success'); ?>
					</div>
					<?php endif; ?>

					<!-- <h3>Tampilkan informasi selamat datang ibu hamil</h3> -->

					<div class="card mb-3">
						<div class="card-header" style="background-color: #E3E3E3;">
							<i class="fas fa-chart-area"></i>
							Dashboard Panel
						</div>
						<div class="card-body">
							<h2>Selamat datang!</h2>
							<p>di halaman dashboard Admin</p>
						</div>
						<div class="card-footer small text-muted" style="background-color: #E3E3E3;">Updated yesterday at 11:59 PM</div>
					</div>

				</div>
				<!-- /.container-fluid -->


			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<!-- Sticky Footer -->
		<!-- <footer class="sticky-footer">
			<div class="container my-auto">
				<div class="copyright text-center my-auto">
					<span>Copyright ©
						<?php echo SITE_NAME ." ". Date('Y') ?>
					</span>
				</div>
			</div>
		</footer> -->

		<!-- Footer -->
		<footer class="page-footer" style="background-color: #E3E3E3; ">
			<!-- Copyright -->
			<div class="footer-copyright text-center py-3">
				<span>Copyright ©
				<?php echo SITE_NAME ." ". Date('Y') ?>
				</span>
			</div>
			<!-- Copyright -->
		</footer>
		<!-- Footer -->

	</div>
	<!-- container -->

	<?php $this->load->view("ibuhamil/_partials/scrolltop.php") ?>
	<?php $this->load->view("ibuhamil/_partials/modal.php") ?>
	<?php $this->load->view("ibuhamil/_partials/js.php") ?>

</body>

</html>
