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
						<a href="<?php echo site_url('admin/products'); ?>">
							<i class="fas fa-arrow-left"></i> Back
						</a>
					</div>

					<div class="card-body">

						<form action="<?php echo site_url('admin/products/add'); ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="name">Name*</label>
								<input type="text" class="form-control <?php echo form_error('name') ? 'is-invalid': '' ?>"
								 name="name" placeholder="Product Name">
								<div class="invalid-feedback">
									<?php echo form_error('name'); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Price*</label>
								<input type="number" class="form-control <?php echo form_error( 'price') ? 'is_invalid': '' ?>"
								 name="price" min="0" placeholder="Product price">
								<div class="invalid-feedback">
									<?php echo form_error('price'); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="image">Photo</label>
								<input type="file" class="form-control-file <?php echo form_error('image') ? 'is_invalid': '' ?>"
								 name="image">
								<div class="invalid-feedback">
									<?php echo form_error('image'); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="description">Description*</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is_invalid': '' ?>"
								 name="description" placeholder="Product description... "></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description'); ?>
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