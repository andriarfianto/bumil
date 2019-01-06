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
						<a href="<?php echo site_url('uploads/uploads/add'); ?>">
							<i class="fas fa-plus"></i> Add New
						</a>
					</div>

					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<td>File Name</td>
										<td>File Type</td>
										<td>Photo</td>
										<td>Action</td>
									</tr>
								</thead>
								<tbody>
									<?php foreach($uploads as $upload): ?>
									<tr>
										<td>
											<?php echo $upload->file_name; ?>
										</td>
										<td>
											<?php echo $upload->file_type; ?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/file/'.$upload->file_type); ?>" width="64">
										</td>
										<td width="250">
											<a href="<?php echo base_url(); ?>uploads/uploads/add">
												<button class="btn btn-warning">Upload Another File</button>
											</a>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
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