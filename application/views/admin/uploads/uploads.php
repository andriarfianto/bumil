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
							<h2 class="alert alert-info">File Uploads</h2>
							<div class="row">
								<div class="col-lg-12">
									<?php echo $error;?>
									<!-- Error Message will show up here -->
									<!-- folder upload - controller upload - method upload_file -->
									<form action="<?php echo site_url('uploads/uploads/upload_file'); ?>" method="post"
									 enctype="multipart/form-data">
										<?php 
	                                        echo "<input type='text' name='file_type' size='20' class='form-control' placeholder='Please enter file type'/><br>";
                                            echo "<input type='file' name='userfile' size='20' class='form-control' />"; ?>
										<br>
										<?php echo "<input type='submit' name='submit' value='upload' class='btn btn-info'/> ";?>
									</form>
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