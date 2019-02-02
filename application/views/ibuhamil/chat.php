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

				<b>Umur</b> 
				<?php										
					$birthday = new DateTime($user->tanggal_lahir);
					$today = new DateTime();

					$interval = $today->diff($birthday);
					$usia_ibu = $interval->y;
					
					echo $usia_ibu. ' Tahun';
				?> <br> <br>

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
							<i class="fa fa-comments" aria-hidden="true"></i> Chat dengan konsultan                            
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
                                <div class="card-body">
									<div class="well" style="width:100%; height: 300px; max-height: 300px; overflow-y: auto;">
									<?php foreach ($pesans as $pesan): ?>
									<strong><?php //echo $pesan->isi_pesan; ?></strong><br>

										<?php if ($pesan->pengirim == $user->id_user): ?> <?php //yg diambil id_usernya?>
											<p class="alert alert-primary" style="border-radius: 20px 20px 0px 20px; width: 50%; left: 50%;">
												<strong><?php echo $pesan->isi_pesan; ?></strong><br>
												<span class="text-default small">
													<?php														
														echo time_ago($pesan->tanggal);														
													?>
												</span>
											</p>
										<?php elseif($pesan->pengirim == 1): ?>
											<p class="alert alert-info" style="border-radius: 20px 20px 20px 0px; background-color: #23A127; border-color: #1f8422; width: 50%;right: 0%;">
												<strong><?php echo $pesan->isi_pesan; ?></strong><br>
												<span class="text-default small">
													<?php 
														echo time_ago($pesan->tanggal);														
													?>
												</span>
											</p>
										<?php endif ?>
									<?php endforeach; ?>
									</div>
                                </div>
                            </div>
							<?php //echo var_dump($this->session->userdata()); die('sawe'); ?>
							
                            <form class="" method="post" action="<?php base_url('chat/index'); ?>" style="margin-top: 2%;">
                                <div class="form-group">
                                    <textarea required="" name="isi_pesan" id="isi_pesan" class="form-control" placeholder="Tuliskan pesan anda disini"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success" style="float: right;"><i class="fa fa-paper-plane"></i> Kirim</button>
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
