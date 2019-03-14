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

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- Notifikasi data berhasil di simpan -->
				<?php if ($this->session->flashdata('success')): ?>	
					<div class="alert alert-primary" role="alert">	
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<?php echo $this->session->flashdata('success'); ?>
					</div>
					<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
				<?php endif; ?>			

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						Tambah Data Ibu Hamil
						<!-- <a href="<?php //echo site_url('admin/user'); ?>">
							<i class="fas fa-arrow-left"></i> Kembali
						</a> -->
					</div>

					<div class="card-body">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<form action="<?php echo site_url('admin/user/add'); ?>" method="post" enctype="multipart/form-data">
										
										<div class="row">
											<div class="col-md-2">
												<label for="username">Username*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="text" class="form-control" name="username" value="<?php echo $username; ?>" placeholder="Username">
												<span style="color: red">
													<?php echo form_error('username'); ?>
												</span>
											</div>
										</div>
										<br>

										<div class="row">
											<div class="col-md-2">
												<label for="password">Password*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="password" class="form-control" name="password" placeholder="Password">
												<span style="color: red">
													<?php echo form_error('password'); ?>
												</span>
											</div>
										</div>
										<br>								

										<div class="row">
											<div class="col-md-2">
												<label for="nama">Nama Lengkap*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" placeholder="Nama Lengkap">
												<span style="color: red">
													<?php echo form_error('nama'); ?>
												</span>
											</div>
										</div>
										<br>			

										<div class="row">
											<div class="col-md-2">
												<label for="email">Alamat Email*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="text" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Alamat Email">
												<span style="color: red">
													<?php echo form_error('email'); ?>
												</span>
											</div>
										</div>
										<br>

										<div class="row">
											<div class="col-md-2">
												<label for="tanggal_lahir">Tanggal Lahir*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>">
												<span style="color: red">
													<?php echo form_error('tanggal_lahir'); ?>
												</span>
											</div>
										</div>
										<br>

										<!-- <div class="row">
											<div class="col-md-2">
												<label for="tanggal_lahir">Umur</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="number" class="form-control" name="umur" placeholder="Umur">
											</div>
										</div>
										<br> -->

										<div class="row">
											<div class="col-md-2">
												<label for="alamat">Alamat Tinggal*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<textarea class="form-control" name="alamat" placeholder="Alamat Tinggal"><?php echo $alamat; ?></textarea>
												<span style="color: red">
													<?php echo form_error('alamat'); ?>
												</span>
											</div>
										</div>
										<br>

										<div class="row">
											<div class="col-md-2">
												<label for="no_telp">No. Telp*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="text" class="form-control" name="no_telp" value="<?php echo $no_telp; ?>" placeholder="No. Telephone">
												<span style="color: red">
													<?php echo form_error('no_telp'); ?>
												</span>
											</div>
										</div>
										<br>		

										<div class="row">
											<div class="col-md-2">
												<label for="foto">Foto*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="file" class="form-control-file" name="foto">
												<span style="color: red">
													<?php echo form_error('foto'); ?>
												</span>
											</div>
										</div>
										<br>																

										<div class="row">
											<div class="col-md-8"></div>
											<div class="text-right">
												<a href="http://localhost/ci-ibuhamil/admin/user">
													<button type="button" class="btn btn-primary pull-right">
													<i class="fas fa-arrow-left"></i> Kembali</button>
												</a>                                               

												<button type="submit" class="btn btn-success pull-right">
													<i class="far fa-save"></i> Save
												</button>
											</div>
										</div>								

									</form>
								</div>
								<div class="col-md-3"></div>
							</div>
						</div>						
					</div>
				</div>

				<div class="card-footer small text-muted">
					* required fields
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