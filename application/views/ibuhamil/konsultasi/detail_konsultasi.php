<!DOCTYPE html>
<html lang="en">

<head>

	<?php $this->load->view("ibuhamil/_partials/head.php") ?>

</head>

<body id="page-top" style="background-color: #158CBA;">

	<div class="container">

		<!-- Nyoba navbar -->
		<?php $this->load->view("ibuhamil/_partials/navbar.php") ?>

		<div id="wrapper" style="background-color: white;">

			<!-- Sidebar Baru -->
			<ul class="sidebar navbar-nav" style="background-color: white; margin-left: 3%;margin-right: 1%;">
				<img src="<?php echo base_url('upload/user/'.$user->foto); ?>" width="100%" style="margin-top: 7%;">
				<br>
				<b>Nama</b> <?php echo $user->nama; ?> <br> <br>

				<b>Email</b> <?php echo $user->email; ?> <br> <br>

				<b>Tanggal Lahir</b> <?php $date = new DateTime($user->tanggal_lahir);
				echo $date->format('d/m/Y');?> <br> <br>

				<b>No. Telp</b> <?php echo $user->no_telp; ?> <br> <br>

				<b>Alamat</b> <?php echo $user->alamat; ?> <br> <br>
			</ul>

			<div id="content-wrapper">

				<div class="container-fluid">

					<!--
					karena ini halaman overview (home), kita matikan partial breadcrumb.
					Jika anda ingin mengampilkan breadcrumb di halaman overview,
					silahkan hilangkan komentar (//) di tag PHP di bawah.
				-->
				<?php $this->load->view("ibuhamil/_partials/breadcrumb.php") ?>

				<!-- Notifikasi data berhasil di simpan -->
				<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success alert-dismissable" role="alert">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>

				<!-- <h3>Tampilkan informasi selamat datang ibu hamil</h3> -->

				<!-- Notifikasi data berhasil di simpan -->
				<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-primary" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>

				<!-- Menampilkan data -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('ibuhamil/konsultasi/riwayat'); ?>">
							<i class="fas fa-arrow-left"></i> Back
						</a>
					</div>

					<div class="card-body">

						<div class="col-lg-12">
							<!-- Row untuk penjelasan -->
							<h3><i class="fas fa-angle-double-right"></i> Detail Konsultasi</h3>
							<p>Riwayat konsultasi yang pernah anda lakukan <br>
								Silahkan pilih/tekan tombol <strong>Detail</strong> untuk mengetahui informasi lengkap data konsultasi <br> beserta informasi saran makan yang dibutuhkan</p>

								<!-- Row untuk tabel riwayat dan detail-->
								<ul>
									<li>
										<div class="row">
											<div class="col-md-2">Tgl. Konsultasi</div> :
											<div class="col-md-6"><strong><?php $date = new DateTime($konsultasi->tanggal); echo $date->format('d/m/Y'); ?></strong></div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-2">Tinggi Badan</div> :
											<div class="col-md-6"><strong><?php echo $konsultasi->tinggi_badan; ?></strong> cm</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-2">Berat Badan</div> :
											<div class="col-md-6"><strong><?php echo $konsultasi->berat_badan; ?></strong> kg</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-2">Usia Kehamilan</div> :
											<div class="col-md-6"><strong><?php echo $konsultasi->usia_kehamilan; ?></strong> minggu</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-2">Usia Anda</div> :
											<div class="col-md-6"><strong><?php echo $konsultasi->usia_ibuhamil; ?></strong> Tahun</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-2">Tingkat Aktivitas</div> :
											<div class="col-md-6">
												<?php
												if ($konsultasi->aktifitas_fisik == 0.2)
												$showKat = "Ringan";
												elseif ($konsultasi->aktifitas_fisik == 0.3)
												$showKat = "Sedang";
												elseif ($konsultasi->aktifitas_fisik == 0.4)
												$showKat = "Berat";
												elseif ($konsultasi->aktifitas_fisik == 0.5)
												$showKat = "Sangat Berat";
												else
												$showKat = '';
												?>
												<strong><?php echo $showKat; ?></strong>
											</div>
										</div>
									</li>
								</ul>
								<hr>

								<h3><i class="fas fa-angle-double-right"></i> Hasil Konsultasi</h3>
								<ul>
									<li>
										<div class="row">
											<div class="col-md-2">Status Gizi</div> :
											<div class="col-md-6"><strong><?php echo $konsultasi->status_gizi; ?></strong></div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-2">Jumlah Energi yang anda butuhkan</div> :
											<div class="col-md-6"><strong><?php echo $konsultasi->tee; ?></strong> kalori</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-2">Rincian Gizi</div> :
											<div class="col-md-3">1. Karbohidrat</div> :
											<div class="col-md-3"><strong><?php echo $konsultasi->energi_karbohidrat; ?></strong> kalori</div> =
											<div class="col-md-2"><strong><?php echo $konsultasi->kebutuhan_karbohidrat; ?></strong> gram</div>
										</div>
										<div class="row">
											<div class="col-md-2"></div> :
											<div class="col-md-3">2. Protein</div> :
											<div class="col-md-3"><strong><?php echo $konsultasi->energi_protein; ?></strong> kalori</div> =
											<div class="col-md-2"><strong><?php echo $konsultasi->kebutuhan_protein; ?></strong> gram</div>
										</div>
										<div class="row">
											<div class="col-md-2"></div> :
											<div class="col-md-3">3. Lemak</div> :
											<div class="col-md-3"><strong><?php echo $konsultasi->energi_lemak; ?></strong> kalori</div> =
											<div class="col-md-2"><strong><?php echo $konsultasi->kebutuhan_lemak; ?></strong> gram</div>
										</div>
									</li>
								</ul>
								<hr>

							<h3><i class="fas fa-angle-double-right"></i> Saran Menu Makan</h3>
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<td>No</td>
										<td>Nama Menu</td>
										<td>Kategori</td>
										<td>Energi</td>
										<td>Karbohidrat</td>
										<td>Protein</td>
										<td>Lemak</td>
									</tr>
								</thead>
								<tbody>
									<?php
									$no=1;
									foreach ($details as $detail): ?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $detail->nama_menu; ?></td>
										<td>
											<?php
											if ($detail->kategori_menu == 1)
											$showKat = "Sayur Mayur";
											elseif ($detail->kategori_menu == 2)
											$showKat = "Lauk Pauk";
											elseif ($detail->kategori_menu == 3)
											$showKat = "Olahan Buah";
											elseif ($detail->kategori_menu == 4)
											$showKat = "Olahan Daging";
											elseif ($detail->kategori_menu == 5)
											$showKat = "Olahan Daging";
											elseif ($detail->kategori_menu == 6)
											$showKat = "Camilan";
											elseif ($detail->kategori_menu == 7)
											$showKat = "Serelia/Umbi";
											else $showKat = '';
											?>
											<?php echo $showKat; ?></td>
											<td><?php echo $detail->energi_menu; ?> kalori</td>
											<td><?php echo $detail->karbohidrat_menu; ?> gram</td>
											<td><?php echo $detail->protein_menu; ?> gram</td>
											<td><?php echo $detail->lemak_menu; ?> gram</td>
										</tr>
										<?php $no++; endforeach; ?>
									</tbody>
								</table>
							</div>

						</div>
						<!-- ./card-body -->
					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<!-- Sticky Footer -->
		<!-- <footer class="sticky-footer">
		<div class="container my-auto">
		<div class="copyright text-center my-auto">
		<span>Copyright ©
		<?php echo SITE_NAME ." ". Date('Y') ?>
	</span>
</div>
</div>
</footer> -->

<!-- Footer -->
<footer class="page-footer" style="background-color: #E3E3E3; ">
	<!-- Copyright -->
	<div class="footer-copyright text-center py-3">
		<span>Copyright ©
			<?php echo SITE_NAME ." ". Date('Y') ?>
		</span>
	</div>
	<!-- Copyright -->
</footer>
<!-- Footer -->

</div>
<!-- container -->

<?php $this->load->view("ibuhamil/_partials/scrolltop.php") ?>
<?php $this->load->view("ibuhamil/_partials/modal.php") ?>
<?php $this->load->view("ibuhamil/_partials/js.php") ?>

</body>

</html>
