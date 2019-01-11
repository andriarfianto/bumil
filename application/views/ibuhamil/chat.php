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
            <!-- <ul class="sidebar navbar-nav" style="background-color: white; margin-left: 3%;margin-right: 1%;">
                <img src="<?php echo base_url('upload/user/'.$user->foto); ?>" width="100%" style="margin-top: 7%;">
                <br>
                <b>Nama</b> <?php echo $user->nama; ?> <br> <br>

                <b>Email</b> <?php echo $user->email; ?> <br> <br>

                <b>Tanggal Lahir</b> <?php $date = new DateTime($user->tanggal_lahir);
                echo $date->format('d/m/Y');?> <br> <br>

                <b>No. Telp</b> <?php echo $user->no_telp; ?> <br> <br>

                <b>Alamat</b> <?php echo $user->alamat; ?> <br> <br>
            </ul> -->

            <?php echo $this->load->view("ibuhamil/_partials/sidebar"); ?>

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

                    <!-- Notifikasi data berhasil di simpan -->
                    <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-primary" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                    <?php endif; ?>


                    <!-- DISINI -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?php echo site_url('ibuhamil/konsultasi'); ?>">
                                <i class="fas fa-arrow-left"></i> Back
                            </a>
                        </div>

                        <div class="card-body">
                            <!-- Success validation error -->
                            <!-- <div class="form_error">
                                echo validation_errors('<div class="alert alert-danger" role="alert">','</div>'); ?>
                            </div> -->

                            <!-- Failed validation error -->
                            <!-- <div class="invalid-feedback">
                                echo form_error('username'); ?>
                            </div> -->

                            <div class="card md-3">
                                <div class="card-header">
                                    <strong>Chat untuk bertanya dan konsultasi</strong>
                                </div>
                                <div class="card-body">
                                    <div class="well" style="width:100%; height: 300px; max-height: 300px; overflow-y: auto;">
                                        Pesan kosong
                                    </div>
                                </div>
                            </div>

                            <form class="" method="post" action="" style="margin-top: 2%;">
                                <div class="form-group">
                                    <textarea required="" name="pesan" id="pesan" class="form-control" placeholder="Tuliskan Pesan Anda Disini"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Kirim</button>
                                </div>
                            </form>
                        </div>
                        <!-- ./card-body -->

                    </div>

                    <div class="card-footer small text-muted">
                        * required fields
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
