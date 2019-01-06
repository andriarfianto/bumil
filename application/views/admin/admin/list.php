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
						<a href="<?php echo site_url('admin/admins/add'); ?>">
							<i class="fas fa-plus"></i> Add New
						</a>
					</div>

					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<td>No.</td>
										<td>Username</td>
										<td>Email</td>
										<td>Address</td>
										<td>Photo</td>
										<td>Mobile</td>
										<td>Action</td>
									</tr>
								</thead>
								<tbody>
									<?php 
										$no=1;
										foreach($admins as $admin): 
									?>
									<tr>
										<td>
											<?php echo $no; ?>
										</td>
										<td>
											<?php echo $admin->username; ?>
										</td>
										<td>
											<?php echo $admin->email; ?>
										</td>
										<td>
											<?php echo $admin->address; ?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/admin/'.$admin->image); ?>" width="64">
										</td>
										<td>
											<?php echo $admin->mobile; ?>
										</td>
										<td width="300">
											<a href="<?php echo site_url('admin/admins/detail/'.$admin->id); ?>" class="btn btn-small">
												<i class="fas fa-eye"></i> Read
											</a>
											<a href="<?php echo site_url('admin/admins/edit/'.$admin->id); ?>" class="btn btn-small">
												<i class="fas fa-edit"></i> Edit
											</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/admins/delete/'.$admin->id); ?>')"
											 href="#!" class="btn btn-small text-danger">
												<i class="fas fa-trash"></i> Hapus
											</a>
										</td>
									</tr>
									<?php
										$no++;
										endforeach;
									?>
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

	<script>
	function deleteConfirm(url) {
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>