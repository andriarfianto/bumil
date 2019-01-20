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
						<a href="<?php echo site_url('admin/bahan'); ?>">
							<i class="fas fa-arrow-left"></i> Kembali
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

						<form action="<?php echo site_url('admin/bahan/add'); ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama_bahan">Nama Bahan*</label>
								<input type="text" class="form-control" name="nama_bahan" value="<?php echo $nama_bahan; ?>" placeholder="Nama Bahan">
								<span style="color: red">
									<?php echo form_error('nama_bahan'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="berat_takaran">Berat Takaran*</label>
								<input type="text" class="form-control" name="berat_takaran" value="<?php echo $berat_takaran; ?>" placeholder="Berat Takaran">
								<span style="color: red">
									<?php echo form_error('berat_takaran'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="golongan">Golongan*</label>
								<select class="form-control" id="golongan" name="golongan">
									<option value="0">Silahkan Pilih</option>
									<option <?php if ($golongan == 1 ) echo 'selected' ; ?> value="1">Buah</option>
									<option <?php if ($golongan == 2 ) echo 'selected' ; ?> value="2">Daging</option>
									<option <?php if ($golongan == 3 ) echo 'selected' ; ?> value="3">Ikan</option>
									<option <?php if ($golongan == 4 ) echo 'selected' ; ?> value="4">Sayuran</option>
									<option <?php if ($golongan == 5 ) echo 'selected' ; ?> value="5">Serelia/Umbi</option>								
								</select>
								<span style="color: red">
									<?php echo form_error('golongan'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="energi_bahan">Energi Bahan*</label>
								<input type="text" class="form-control" name="energi_bahan" value="<?php echo $energi_bahan; ?>" placeholder="Energi Bahan">
								<span style="color: red">
									<?php echo form_error('energi_bahan'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="karbohidrat_bahan">Karbohidrat Bahan*</label>
								<input type="text" class="form-control" name="karbohidrat_bahan" value="<?php echo $karbohidrat_bahan; ?>" placeholder="Karbohidrat Bahan">
								<span style="color: red">
									<?php echo form_error('karbohidrat_bahan'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="protein_bahan">Protein Bahan*</label>
								<input type="text" class="form-control" name="protein_bahan" value="<?php echo $protein_bahan; ?>" placeholder="Protein Bahan">
								<span style="color: red">
									<?php echo form_error('protein_bahan'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="lemak_bahan">Lemak Bahan*</label>
								<input type="text" class="form-control" name="lemak_bahan" value="<?php echo $lemak_bahan; ?>" placeholder="Lemak Bahan">
								<span style="color: red">
									<?php echo form_error('lemak_bahan'); ?>
								</span>
							</div>
							
							<button type="submit" class="btn btn-success">
								<i class="far fa-save"></i> Save
                            </button>
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
