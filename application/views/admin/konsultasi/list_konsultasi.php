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
                        <i class="fa fa-medkit" aria-hidden="true"></i> Hasil konsultasi user
					</div>

					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<td>No.</td>
										<td>Username</td>
										<td>Nama</td>
										<td>Email</td>										
										<td>Foto</td>										
										<td>Action</td>
									</tr>
								</thead>
								<tbody>
									<?php 
										$no=1;
										foreach($users as $user): 
									?>
									<tr>
										<td>
											<?php echo $no; ?>
										</td>
										<td>
											<?php echo $user->username; ?>
										</td>
										<td>
											<?php echo $user->nama; ?>
										</td>
										<td>
											<?php echo $user->email; ?>
										</td>									
										<td>											
											<img src="<?php echo base_url('upload/user/'.$user->foto); ?>" width="60">
										</td>
										<td>
                                        <a href="<?php echo site_url('admin/konsultasi/riwayat/'.$user->id_user); ?>">
                                            Riwayat Konsultasi
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