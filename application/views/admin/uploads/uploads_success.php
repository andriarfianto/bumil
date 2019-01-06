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
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('uploads/uploads/'); ?>">
							<i class="fas fa-arrow-left"></i> Back
						</a>
					</div>

					<div class="card-body">

						<div class="container">
							<h2 class="alert alert-info">Your file was successfully uploaded!</h2>
							<div class="row">
								<div class="col-lg-12">
									<!-- Uploaded file specification will show up here -->
									<ul class="alert alert-success">
										<?php foreach ($upload_data as $item => $value):?>
										<li>
											<?php echo $item;?>:
											<?php echo $value;?>
										</li>
										<?php endforeach; ?>
									</ul>
									<a href="<?php echo base_url(); ?>uploads/uploads">
										<button class="btn btn-warning">Upload Another File</button>
									</a>
									<br>
									<br>
								</div>
							</div>
						</div>
					</div>
					<!-- /.container-fluid -->

				</div>
				<!-- /.content-wrapper -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /#wrapper -->

			<?php $this->load->view("admin/_partials/scrolltop.php") ?>
			<?php $this->load->view("admin/_partials/modal.php") ?>
			<?php $this->load->view("admin/_partials/js.php") ?>

			<!-- Modal untuk menghapus product -->
			<script>
				function deleteConfirm(url) {
					$('#btn-delete').attr('href', url);
					$('#deleteModal').modal();
					// document.getElementById('deleteModal').focus();
				}
			</script>
</body>

</html>