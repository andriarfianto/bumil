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
						Detail Menu Makan
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

							<input type="hidden" name="id" value="<?php echo $menu->id_menu; ?>">
							<!-- detail bahan -->							

							<!-- <span></span> -->
							<table class="table table-striped">
								<tbody>
									<tr>
										<th scope="row">Nama Menu</th>										
										<td>
											: <?php echo $menu->nama_menu; ?>
										</td>
									</tr>
									<tr>
										<th scope="row">Kategori Menu</th>										
										<td>
											: <?php echo $menu->kategori_menu; ?>
										</td>
									</tr>
									<tr>
										<th scope="row">Energi Menu</th>										
										<td>
											: <?php echo $menu->energi_menu; ?> kalori
										</td>
									</tr>
									<tr>
										<th scope="row">Karbohidrat Menu</th>
										<td>
											: <?php echo $menu->karbohidrat_menu; ?> gram
										</td>
									</tr>
									<tr>
										<th scope="row">Protein Menu</th>						
										<td>
											: <?php echo $menu->protein_menu; ?> gram
										</td>
									</tr>
									<tr>
										<th scope="row">Lemak Menu</th>						
										<td>
											: <?php echo $menu->lemak_menu; ?> gram
										</td>
									</tr>
									<tr>
										<th scope="row">Cara Membuat</th>										
										<td style="width: 874px;">
											: <?php echo $menu->cara_membuat; ?>
										</td>
									</tr>
								</tbody>
							</table>
							
							<h2>Komposisi menu :</h2>
							
							<table class="table table-hover table-striped" id="data-table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td>ID. Bahan</td>
                                            <td>Nama Bahan</td>
                                            <td>Berat Takaran</td>
                                            <td>Golongan</td>
                                            <td>Energi Bahan</td>
                                            <td>Karbohidrat Bahan</td>
                                            <td>Protein Bahan</td>
                                            <td>Lemak Bahan</td>
                                            <td>Jumlah</td>
                                            <td>Takaran</td>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
										<!-- Tampilkan data bahan makan -->
										<?php 
    										$no=1;
    										foreach($bahans as $bahan) {
									    ?>
    									<tr style="text-align: center">
    										<td>
    											<?php echo $no; ?>
    										</td>
    										<td>
    											<?php echo $bahan->nama_bahan ?>
    										</td>
    										<td>
    											<?php echo $bahan->berat_takaran ?>											
    										</td>
    										<td>
    											<?php if ($bahan->golongan == "1") {
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
    										<td>
    											<?php echo $bahan->energi_bahan; ?>
    										</td>
    										<td>
    											<?php echo $bahan->karbohidrat_bahan; ?>
    										</td>
    										<td>
    											<?php echo $bahan->protein_bahan; ?>
    										</td>
    										<td>
    											<?php echo $bahan->lemak_bahan; ?>
    										</td>
    										<td>
    											<?php echo $bahan->jumlah_bahan; ?>
    										</td>
    										<td>
    											<?php echo $bahan->satuan_takaran; ?>
    										</td>  										
    									</tr>
    									<?php
    									$no++; }
    									?>										
										
										
                                    </tbody>
                                    <!-- ./tbody -->
                             </table>
                             <!-- ./table -->
                                
							<div class="text-right">
								<a href="<?php echo site_url('admin/menu'); ?>">
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