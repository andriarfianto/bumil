


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

                            <div class="col-lg-12">
                                <!-- Row untuk penjelasa -->
								<h3><i class="fas fa-angle-double-right"></i> Riwayat Konsultasi kehamilan</h3>
								<p>Riwayat konsultasi yang pernah anda lakukan <br>
								Silahkan pilih/tekan tombol <strong>Detail</strong> untuk mengetahui informasi lengkap data konsultasi <br> beserta informasi saran makan yang dibutuhkan</p>

                                <!-- Row untuk tabel riwayat dan detail-->
                                <!-- <div class="row"> -->
                                    <!-- <div class="col-md-6"> -->
									Daftar Riwayat Konsultasi
									<hr>
                                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                          <thead>
                                            <tr>
												<td>No</td>
												<td>Tinggi Badan</td>
												<td>Berat Badan</td>
												<td>Usia Ibu</td>
												<td>Usia Kehamilan</td>
												<!-- <td>Status Gizi</td> -->
												<td>Berat Badan Ideal</td>
												<td>Total Energi</td>
												<!-- <td>Kebutuhan Karbohidrat</td>
												<td>Kebutuhan Protein</td>
												<td>Kebutuhan Lemak</td> -->
												<td>Aksi</td>
                                            </tr>
                                          </thead>
										  <tbody>
											  <?php $no=1;
											  foreach ($konsultasis as $konsultasi): ?>
											  <tr>
												  <td><?php echo $no; ?></td>
												  <td><?php echo $konsultasi->tinggi_badan; ?> cm</td>
												  <td><?php echo $konsultasi->berat_badan; ?> kg</td>
												  <td><?php echo $konsultasi->usia_ibuhamil; ?> tahun</td>
												  <td><?php echo $konsultasi->usia_kehamilan; ?> minggu</td>
												  <!-- <td>Gemuk</td> -->
												  <td><?php echo $konsultasi->bbih; ?> kg</td>
												  <td><?php echo $konsultasi->tee; ?> kalori</td>
												  <!-- <td>213 gram</td>
												  <td>445 gram</td>
												  <td>13 gram</td> -->
												  <td><a href="<?php echo site_url('ibuhamil/konsultasi/detail/'.$konsultasi->id_user) ?>">Detail</a></td>

											  </tr>
											  <?php $no++;
										  endforeach; ?>
								  </tbody>
                                        </table>
                                    <!-- </div> -->
                                <!-- </div> -->
                            </div>

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
