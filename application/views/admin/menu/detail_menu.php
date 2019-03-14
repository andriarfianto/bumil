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
										<th scope="row" style="width: 170px;">Nama Menu</th>
										<td>
											: <?php echo $menu->nama_menu; ?>
										</td>
									</tr>
									<tr>
										<th scope="row">Kategori Menu</th>
										<td>
											<?php if ($menu->kategori_menu == "1") {
												echo ": Makanan Pokok";
											} elseif ($menu->kategori_menu == "2") {
												echo ": Lauk Pauk";
											} elseif ($menu->kategori_menu == "3") {
												echo ": Sayur Mayur";
											} elseif ($menu->kategori_menu == "4") {
												echo ": Buah-Buahan";
											} elseif ($menu->kategori_menu == "5") {
												echo ": Makanan Siap Santap";
											} elseif ($menu->kategori_menu == "6") {
												echo ": Makanan Ringan";
											} elseif ($menu->kategori_menu == "7") {
												echo ": Minuman";
											}
											?>
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
                                            <th>No. Bahan</th>
                                            <th>Nama Bahan</th>
                                            <th>Berat Takaran</th>
                                            <th>Golongan</th>
                                            <th>Energi Bahan</th>
                                            <th>Karbohidrat Bahan</th>
                                            <th>Protein Bahan</th>
                                            <th>Lemak Bahan</th>
                                            <th>Jumlah</th>
                                            <th>Takaran</th>                                            
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
											<?php
												if ($bahan->golongan == "1")
												$golongan = "Ringan";
												elseif ($bahan->golongan == "2")
												$golongan = "Daging";
												elseif ($bahan->golongan == "3")
												$golongan = "Ikan";
												elseif ($bahan->golongan == "4")
												$golongan = "Sayuran";
												elseif ($bahan->golongan == "5")
												$golongan = "Serelia/Umbi";
												elseif ($bahan->golongan == "6")
												$golongan = "Bahan Pokok";
												elseif ($bahan->golongan == "7")
												$golongan = "Umum";
												else
												$golongan = '';
												?>
												<?php echo $golongan; ?>																					
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
										<i class="fas fa-arrow-left"></i> Kembali</button>
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