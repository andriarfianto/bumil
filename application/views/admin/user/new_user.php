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
						<a href="<?php echo site_url('admin/user'); ?>">
							<i class="fas fa-arrow-left"></i> Kembali
						</a>
					</div>

					<div class="card-body">						
						<form action="<?php echo site_url('admin/user/add'); ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="username">Username*</label>
								<input type="text" class="form-control" name="username" value="<?php echo $username; ?>" placeholder="Username">
								<span style="color: red">
									<?php echo form_error('username'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="password">Password*</label>
								<input type="password" class="form-control" name="password" placeholder="Password">
								<span style="color: red">
									<?php echo form_error('password'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="nama">Nama*</label>
								<input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" placeholder="Nama">
								<span style="color: red">
									<?php echo form_error('nama'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="email">Email*</label>
								<input type="text" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Email">
								<span style="color: red">
									<?php echo form_error('email'); ?>
								</span>
							</div>							

							<!-- <div class="form-group">
								<label for="level">Level*</label>							
								<select class="form-control" id="select" name="level">
									<option value="0">Silahkan Pilih</option>
									<option value="1">Ibu Hamil</option>
									<option value="2">Petugas Kesehatan</option>																		
								</select>
								<span style="color: red">
									<?php echo form_error('select'); ?>
								</span>													
							</div> -->

							<div class="form-group">
								<label for="alamat">Alamat*</label>
								<textarea class="form-control" name="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
								<span style="color: red">
									<?php echo form_error('alamat'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="no_telp">No. Telp*</label>
								<input type="text" class="form-control" name="no_telp" value="<?php echo $no_telp; ?>" placeholder="No. Telephone">
								<span style="color: red">
									<?php echo form_error('no_telp'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="foto">Foto*</label>
								<input type="file" class="form-control-file" name="foto">
								<span style="color: red">
									<?php echo form_error('foto'); ?>
								</span>
							</div>							
							
							<button type="submit" class="btn btn-success">
								<i class="far fa-save"></i> Save
                            </button>
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