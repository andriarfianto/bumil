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
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/users'); ?>">
							<i class="fas fa-arrow-left"></i> Back
						</a>
					</div>

					<div class="card-body">

						<form action="<?php echo site_url('admin/users/edit/'.$user->id); ?>" method="post"
						 enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $user->id; ?>">

							<div class="form-group">
								<label for="username">Username*</label>
								<input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $user->username; ?>">
								<span style="color: red">
									<?php echo form_error('username'); ?>
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
								<label for="address">Address*</label>
								<input type="text" class="form-control" name="address" placeholder="Address" value="<?php echo $user->address; ?>">
								<span style="color: red">
									<?php echo form_error('address'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="image">Photo</label>
								<input type="file" class="form-control-file" name="image">
								<input type="hidden " name="old_image " value="<?php echo $user->image; ?>">
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="mobile">Mobile phone*</label>
								<input type="number" class="form-control" name="mobile" placeholder="Mobile phone" value="<?php echo $user->mobile; ?>">
								<span style="color: red">
									<?php echo form_error('mobile'); ?>
								</span>
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