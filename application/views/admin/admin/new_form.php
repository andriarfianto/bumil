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
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/admins'); ?>">
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

						<form action="<?php echo site_url('admin/admins/save'); ?>" method="post" enctype="multipart/form-data">
							<div class="form-group warning">
								<label for="username">Username*</label>
								<input type="text" class="form-control" name="username" placeholder="Username">
								<span style="color: red">
									<?php echo form_error('username'); ?>
								</span>
							</div>

							<div class="form-group  has-warning">
								<label for="email">Email*</label>
								<input type="text" class="form-control" name="email" placeholder="Email">
								<span style="color: red">
									<?php echo form_error('email'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="address">Address*</label>
								<textarea class="form-control" name="address" placeholder="Address"></textarea>
								<span style="color: red">
									<?php echo form_error('address'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="image">Photo*</label>
								<input type="file" class="form-control-file" name="image">
								<span style="color: red">
									<?php echo form_error('image'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="mobile">Mobile*</label>
								<input type="text" class="form-control" name="mobile" placeholder="Mobile phone">
								<span style="color: red">
									<?php echo form_error('mobile'); ?>
								</span>

							</div>
							<!--                             
							<div class="form-group">
								<label for="mobile">Mobile*</label>
								<input type="text" class="form-control" name="mobile" placeholder="Mobile phone">
								<span style="color: red">
									echo form_error('mobile'); ?>
							</span>
					        </div> -->

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