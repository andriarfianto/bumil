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
						Detail Data Ibu Hamil
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

						<div class="col-md-12">
							<div class="row">
								<div class="col-md-10">
									<form enctype="multipart/form-data">

										<input type="hidden" name="id" value="<?php echo $user->id_user; ?>">

										<!-- <span></span> -->
										<table class="table table-striped">
											<tbody>
												<tr>
													<th scope="row" style="width: 174px;">Username</th>										
													<td>
														: <?php echo $user->username; ?>
													</td>
												</tr>
												<tr>
													<th scope="row">Nama Lengkap</th>										
													<td>
														: <?php echo $user->nama; ?>
													</td>
												</tr>
												<tr>
													<th scope="row">Alamat Email</th>										
													<td>
														: <?php echo $user->email; ?>
													</td>
												</tr>
												<tr>
													<th scope="row">Tanggal Lahir</th>										
													<td>
														<?php $date = new DateTime($user->tanggal_lahir); ?>
														: <?php echo $date->format('d/m/Y');?>
													</td>
												</tr>
												<tr>
													<th scope="row">Alamat</th>										
													<td>
														: <?php echo $user->alamat; ?>
													</td>
												</tr>									
												<tr>
													<th scope="row">No. Telp</th>										
													<td>
														: <?php echo $user->no_telp; ?>
													</td>
												</tr>											
											</tbody>
										</table>

										<div class="text-right">
											<a href="<?php echo site_url('admin/user'); ?>">
												<button type="button" class="btn btn-primary pull-right">
													<i class="fas fa-arrow-left"></i> Kembali</button>
											</a>
										</div>
									</form>
								</div>
								<div class="col-md-2">
									<div class="row">
										<img src="<?php echo base_url('upload/user/'.$user->foto); ?>" width="100%" height="100%">
									</div>
								</div>
							</div>
						</div>						
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