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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-primary" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						Edit Data Ibu Hamil
						<!-- <a href="<?php //echo site_url('admin/user'); ?>">
							<i class="fas fa-arrow-left"></i> Kembali
						</a> -->
					</div>

					<div class="card-body">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<form action="<?php echo site_url('admin/user/edit/'.$user->id_user); ?>" method="post" enctype="multipart/form-data">

										<input type="hidden" name="id" value="<?php echo $user->id_user; ?>">

										<div class="row">
											<div class="col-md-2">
												<label for="username">Username*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $user->username; ?>">
												<span style="color: red">
													<?php echo form_error('username'); ?>
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
												<input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $user->nama; ?>">
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
												<input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $user->email; ?>">
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
												<input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $user->tanggal_lahir; ?>">
												<span style="color: red">
													<?php echo form_error('tanggal_lahir'); ?>
												</span>
											</div>
										</div>
										<br>								

										<div class="row">
											<div class="col-md-2">
												<label for="alamat">Alamat Tinggal*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<textarea class="form-control" name="alamat" placeholder="Alamat Tinggal"><?php echo $user->alamat; ?></textarea>
												<!-- <input type="text" class="form-control" name="alamat" placeholder="Address" value="<?php echo $user->alamat; ?>"> -->
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
												<input type="text" class="form-control" name="no_telp" placeholder="No. Telp" value="<?php echo $user->no_telp; ?>">
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
												<input type="hidden" name="old_image" value="<?php echo $user->foto; ?>">
												<div class="invalid-feedback">
													<?php echo form_error('foto') ?>
												</div>
											</div>
										</div>
										<br>										

										<!-- <input type="submit" value="Save" name="btn" class="btn btn-success"> -->

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
