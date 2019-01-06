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
						<a href="<?php echo site_url('admin/menu'); ?>">
							<i class="fas fa-arrow-left"></i> Back
						</a>
					</div>

					<div class="card-body">

						<form action="<?php echo site_url('admin/menu/edit/'.$menu->id_menu); ?>" method="post"
						 enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $menu->id_menu; ?>">

							<div class="form-group">
								<label for="nama_menu">Nama Menu*</label>
								<input type="text" class="form-control" name="nama_menu" placeholder="Nama Menu" value="<?php echo $menu->nama_menu; ?>">
								<span style="color: red">
									<?php echo form_error('nama_menu'); ?>
								</span>
							</div>							

							<div class="form-group">
								<label for="kategori_menu">Golongan*</label>							
								<select class="form-control" id="kategori_menu" name="kategori_menu">
									<option value="0">Silahkan Pilih</option>
									<option <?php if ($menu->kategori_menu == 1 ) echo 'selected' ; ?> value="1">Sayur Mayur</option>
									<option <?php if ($menu->kategori_menu == 2 ) echo 'selected' ; ?> value="2">Lauk Pauk</option>
									<option <?php if ($menu->kategori_menu == 3 ) echo 'selected' ; ?> value="3">Olahan Buah</option>
									<option <?php if ($menu->kategori_menu == 4 ) echo 'selected' ; ?> value="4">Olahan Daging</option>
									<option <?php if ($menu->kategori_menu == 5 ) echo 'selected' ; ?> value="5">Susu</option>
									<option <?php if ($menu->kategori_menu == 6 ) echo 'selected' ; ?> value="6">Camilan</option>
									<option <?php if ($menu->kategori_menu == 7 ) echo 'selected' ; ?> value="7">Serelia/Umbi</option>

								</select>
								<span style="color: red">
									<?php echo form_error('kategori_menu'); ?>
								</span>													
							</div> 

							<div class="form-group">
								<label for="energi_menu">Energi Menu*</label>
								<input type="text" class="form-control" name="energi_menu" placeholder="Energi Menu" value="<?php echo $menu->energi_menu; ?>">
								<span style="color: red">
									<?php echo form_error('energi_menu'); ?>
								</span>
							</div>													

							<div class="form-group">
								<label for="karbohidrat_menu">Karbohidrat Menu*</label>
								<input type="text" class="form-control" name="karbohidrat_menu" placeholder="Karbohidrat Menu" value="<?php echo $menu->karbohidrat_menu; ?>">
								<span style="color: red">
									<?php echo form_error('karbohidrat_menu'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="protein_menu">Protein Menu*</label>
								<input type="text" class="form-control" name="protein_menu" placeholder="Protein Menu" value="<?php echo $menu->protein_menu; ?>">
								<span style="color: red">
									<?php echo form_error('protein_menu'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="lemak_menu">Lemak Menu*</label>
								<input type="text" class="form-control" name="lemak_menu" placeholder="Lemak Menu" value="<?php echo $menu->lemak_menu; ?>">
								<span style="color: red">
									<?php echo form_error('lemak_menu'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="cara_membuat">Cara Membuat*</label>
								<textarea class="form-control" name="cara_membuat" placeholder="Cara Membuat" rows="8"><?php echo $menu->cara_membuat; ?></textarea>
								<span style="color: red">
									<?php echo form_error('cara_membuat'); ?>
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