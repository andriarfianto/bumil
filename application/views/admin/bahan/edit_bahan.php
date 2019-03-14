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
				<div class="alert alert-primary" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						Edit Data Bahan Makan
						<!-- <a href="<?php //echo site_url('admin/bahan'); ?>">
							<i class="fas fa-arrow-left"></i> Back
						</a> -->
					</div>

					<div class="card-body">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<form action="<?php echo site_url('admin/bahan/edit/'.$bahan->id_bahan); ?>" method="post" enctype="multipart/form-data">

										<input type="hidden" name="id" value="<?php echo $bahan->id_bahan; ?>">

										<div class="row">
											<div class="col-md-2">
												<label for="nama_bahan">Nama Bahan*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="text" class="form-control" name="nama_bahan" placeholder="Nama Bahan" value="<?php echo $bahan->nama_bahan; ?>">
												<span style="color: red">
													<?php echo form_error('nama_bahan'); ?>
												</span>
											</div>
										</div>
										<br>

										<div class="row">
											<div class="col-md-2">
												<label for="berat_takaran">Berat Takaran*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="text" class="form-control" name="berat_takaran" placeholder="Berat Takaran" value="<?php echo $bahan->berat_takaran; ?>">
												<span style="color: red">
													<?php echo form_error('berat_takaran'); ?>
												</span>
											</div>
										</div>
										<br>										

										<div class="row">
											<div class="col-md-2">
												<label for="golongan">Golongan*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<select class="form-control" id="golongan" name="golongan">
													<option value="0">Silahkan Pilih</option>
													<option <?php if ($bahan->golongan == 1 ) echo 'selected' ; ?> value="1">Buah</option>
													<option <?php if ($bahan->golongan == 2 ) echo 'selected' ; ?> value="2">Daging</option>
													<option <?php if ($bahan->golongan == 3 ) echo 'selected' ; ?> value="3">Ikan</option>
													<option <?php if ($bahan->golongan == 4 ) echo 'selected' ; ?> value="4">Sayuran</option>
													<option <?php if ($bahan->golongan == 5 ) echo 'selected' ; ?> value="5">Serelia/Umbi</option>																						
												</select>
												<span style="color: red">
													<?php echo form_error('golongan'); ?>
												</span>
											</div>
										</div>
										<br>

										<div class="row">
											<div class="col-md-2">
												<label for="energi_bahan">Energi Bahan*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="text" class="form-control" name="energi_bahan" placeholder="Energi Bahan" value="<?php echo $bahan->energi_bahan; ?>">
												<span style="color: red">
													<?php echo form_error('energi_bahan'); ?>
												</span>
											</div>
										</div>
										<br>												

										<div class="row">
											<div class="col-md-2">
												<label for="karbohidrat_bahan">Karbohidrat Bahan*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="text" class="form-control" name="karbohidrat_bahan" placeholder="Karbohidrat bahan" value="<?php echo $bahan->karbohidrat_bahan; ?>">
												<span style="color: red">
													<?php echo form_error('karbohidrat_bahan'); ?>
												</span>
											</div>
										</div>
										<br>

										<div class="row">
											<div class="col-md-2">
												<label for="protein_bahan">Protein Bahan*</label>												
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="text" class="form-control" name="protein_bahan" placeholder="Protein bahan" value="<?php echo $bahan->protein_bahan; ?>">
												<span style="color: red">
													<?php echo form_error('protein_bahan'); ?>
												</span>
											</div>
										</div>
										<br>

										<div class="row">
											<div class="col-md-2">
												<label for="lemak_bahan">Lemak Bahan*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="text" class="form-control" name="lemak_bahan" placeholder="Lemak bahan" value="<?php echo $bahan->lemak_bahan; ?>">
												<span style="color: red">
													<?php echo form_error('lemak_bahan'); ?>
												</span>
											</div>
										</div>
										<br>

										<div class="row">
											<div class="col-md-8"></div>
											<div class="text-right">
												<a href="http://localhost/ci-ibuhamil/admin/bahan">
													<button type="button" class="btn btn-primary pull-right">
													<i class="fas fa-arrow-left"></i> Kembali</button>
												</a>                                               

												<button type="submit" class="btn btn-success pull-right">
													<i class="far fa-save"></i> Save
												</button>
											</div>
										</div>
										<!-- <input type="submit" value="Save" name="btn" class="btn btn-success"> -->
									</form>
								</div>
								<div class="col-md-3"></div>
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