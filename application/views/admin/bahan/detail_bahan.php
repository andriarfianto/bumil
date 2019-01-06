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
						Detail Data User
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

						<form enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $bahan->id_bahan; ?>">

							<!-- <span></span> -->
							<table class="table table-striped">
								<tbody>
									<tr>
										<th scope="row" style="width: 224px;">Nama Bahan</th>
										<td>
											: <?php echo $bahan->nama_bahan; ?>
										</td>
									</tr>
									<tr>
										<th scope="row">Berat Takaran</th>
										<td>
											: <?php echo $bahan->berat_takaran; ?> gram
										</td>
									</tr>
									<tr>
										<th scope="row">Golongan</th>
										<td>
											: <?php if ($bahan->golongan == "1") {
												echo "Buah";
											} elseif ($bahan->golongan == "2") {
												echo "Daging";
											} elseif ($bahan->golongan == "3") {
												echo "Ikan";
											} elseif ($bahan->golongan == "4") {
												echo "Sayuran";
											} elseif ($bahan->golongan == "5") {
												echo "Serelia/Umbi";
											} ?>
										</td>
									</tr>
									<tr>
										<th scope="row">Energi Bahan</th>										
										<td>
											: <?php echo $bahan->energi_bahan; ?> kalori
										</td>
									</tr>
									<tr>
										<th scope="row">Karbohidrat Bahan</th>
										<td>
											: <?php echo $bahan->karbohidrat_bahan; ?> gram
										</td>
									</tr>
									<tr>
										<th scope="row">Protein Bahan</th>					
										<td>
											: <?php echo $bahan->protein_bahan; ?> gram
										</td>
									</tr>
									<tr>
										<th scope="row">Lemak Bahan</th>
										<td>
											: <?php echo $bahan->lemak_bahan; ?> gram
										</td>
									</tr>										
								</tbody>
							</table>

							<div class="text-right">
								<a href="<?php echo site_url('admin/bahan'); ?>">
									<button type="button" class="btn btn-primary pull-right">
										<i class="fas fa-arrow-left"></i> Back</button>
								</a>
							</div>
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