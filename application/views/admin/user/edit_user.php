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
						<a href="<?php echo site_url('admin/user'); ?>">
							<i class="fas fa-arrow-left"></i> Kembali
						</a>
					</div>

					<div class="card-body">

						<form action="<?php echo site_url('admin/user/edit/'.$user->id_user); ?>" method="post"
						 enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $user->id_user; ?>">

							<div class="form-group">
								<label for="username">Username*</label>
								<input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $user->username; ?>">
								<span style="color: red">
									<?php echo form_error('username'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="nama">Nama*</label>
								<input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $user->nama; ?>">
								<span style="color: red">
									<?php echo form_error('nama'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="email">Email*</label>
								<input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $user->email; ?>">
								<span style="color: red">
									<?php echo form_error('email'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="level">Level*</label>
								<select class="form-control" id="select" name="level">
									<option value="0">Silahkan Pilih</option>
									<option <?php if ($user->level == 2 ) echo 'selected' ; ?> value="2">Ibu Hamil</option>
									<option <?php if ($user->level == 3 ) echo 'selected' ; ?> value="3">Petugas Kesehatan</option>
								</select>
								<span style="color: red">
									<?php echo form_error('level'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="alamat">Alamat*</label>
								<input type="text" class="form-control" name="alamat" placeholder="Address" value="<?php echo $user->alamat; ?>">
								<span style="color: red">
									<?php echo form_error('alamat'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="no_telp">No. Telp*</label>
								<input type="text" class="form-control" name="no_telp" placeholder="No. Telp" value="<?php echo $user->no_telp; ?>">
								<span style="color: red">
									<?php echo form_error('no_telp'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="foto">Foto*</label>
								<input type="file" class="form-control-file" name="foto">
								<!-- <input type="hidden " name="old_image" value="<?php echo $user->foto; ?>"> -->
								<div class="invalid-feedback">
									<?php echo form_error('foto') ?>
								</div>
							</div>

							<input type="submit" value="Save" name="btn" class="btn btn-success">
						</form>
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
