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
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/artikel'); ?>">
							<i class="fas fa-arrow-left"></i> Back
						</a>
					</div>

					<div class="card-body">

						<form action="<?php echo site_url('admin/artikel/edit/'.$artikel->id_artikel); ?>" method="post"
						 enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $artikel->id_artikel; ?>">

							<div class="form-group">
								<label for="judul_artikel">Judul Artikel*</label>
								<input type="text" class="form-control" name="judul_artikel" value="<?php echo $artikel->judul_artikel; ?>" placeholder="Judul Artikel">
								<span style="color: red">
									<?php echo form_error('judul_artikel'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="kategori">Kategori*</label>							
								<select class="form-control" id="kategori" name="kategori">
									<option value="0">Silahkan Pilih</option>
									<option <?php if ($artikel->kategori == 1 ) echo 'selected' ; ?> value="1">Kesehatan</option>
									<option <?php if ($artikel->kategori == 2 ) echo 'selected' ; ?> value="2">Nutrisi</option>
									<option <?php if ($artikel->kategori == 3 ) echo 'selected' ; ?> value="3">Buah Hati</option>
									<option <?php if ($artikel->kategori == 4 ) echo 'selected' ; ?> value="4">Tips-Tips</option>
									<option <?php if ($artikel->kategori == 5 ) echo 'selected' ; ?> value="5">Umum</option>																													
								</select>
								<span style="color: red">
									<?php echo form_error('kategori'); ?>
								</span>													
							</div>
							
							<div class="form-group">
								<label for="isi_artikel">Isi Artikel*</label>
								<textarea class="form-control" name="isi_artikel" placeholder="Isi Artikel" rows="8"><?php echo $artikel->isi_artikel; ?></textarea>								
								<span style="color: red">
									<?php echo form_error('isi_artikel'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="foto">Foto*</label>
								<input type="file" class="form-control-file" name="foto">
								<span style="color: red">
									<?php echo form_error('foto'); ?>
								</span>
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