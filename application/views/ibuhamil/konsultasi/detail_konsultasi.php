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

				<b>Umur</b> 
				<?php								
					$birthday = new DateTime($user->tanggal_lahir);
					$today = new DateTime();

					$interval = $today->diff($birthday);
					$usia_ibu = $interval->y;
					
					echo $usia_ibu. ' Tahun';
				?> <br> <br>

				<b>No. Telp</b> <?php echo $user->no_telp; ?> <br> <br>

				<b>Alamat</b> <?php echo $user->alamat; ?> <br> <br>
			</ul>

			<div id="content-wrapper">

				<div class="container-fluid">

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
								<i class="fas fa-arrow-left"></i> Kembali
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
											<div class="col-md-3">Indeks Masa Tubuh</div> :
											<div class="col-md-4"><strong><?php echo $konsultasi->status_gizi; ?></strong></div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-3">Berat badan ideal</div> :
											<div class="col-md-4"><strong><?php echo $konsultasi->bbih; ?></strong> kg</div> 
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-3">Kebutuhan Energi anda</div> :
											<div class="col-md-4"><strong><?php echo round($konsultasi->tee, 2); ?></strong> kalori/hari</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-3">Rata-Rata Kebutuhan Energi anda</div> :
											<div class="col-md-6">
												<strong><?php echo round($konsultasi->batas_bawah, 2); ?></strong> kalori - 
												<strong><?php echo round($konsultasi->batas_atas, 2); ?></strong> kalori (per/hari)
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-3">Rincian Gizi</div> :
										</div>
										<div class="row">
											<div class="col-md-3"></div>
											<div class="col-md-2">1. Karbohidrat</div> :
											<div class="col-md-2"><strong><?php echo round($konsultasi->energi_karbohidrat, 2); ?></strong> kalori</div> =
											<div class="col-md-3"><strong><?php echo round($konsultasi->kebutuhan_karbohidrat, 2); ?></strong> gram</div>
										</div>
										<div class="row">
											<div class="col-md-3"></div>
											<div class="col-md-2">2. Protein</div> :
											<div class="col-md-2"><strong><?php echo round($konsultasi->energi_protein, 2); ?></strong> kalori</div> =
											<div class="col-md-2"><strong><?php echo round($konsultasi->kebutuhan_protein, 2); ?></strong> gram</div>
										</div>
										<div class="row">
											<div class="col-md-3"></div>
											<div class="col-md-2">3. Lemak</div> :
											<div class="col-md-2"><strong><?php echo round($konsultasi->energi_lemak, 2); ?></strong> kalori</div> =
											<div class="col-md-2"><strong><?php echo round($konsultasi->kebutuhan_lemak, 2); ?></strong> gram</div>
										</div>
									</li>
								</ul>
								<hr>

								<h3><i class="fas fa-angle-double-right"></i> Saran Menu Makan</h3>
								<?php if (!empty($details)): ?>
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-3" style="padding-left: 0">Nama Menu</div>
											<div class="col-md-2">Energi Menu</div>
											<div class="col-md-2">Karbohidrat Menu</div>
											<div class="col-md-2">Protein Menu</div>
											<div class="col-md-2">Lemak Menu</div>
										</div>
									</div>			
								<?php
									// $tee = $nilai_batasatas->tee;
									// $batas_bawah = $tee - ($tee * 0.1);
									// echo nl2br("nilai tee: " .$nilai_batasatas->tee ."
									// 			\n nilai batas bawah: ". $batas_bawah ." - nilai batas atas: ". $nilai_batasatas->batas_atas ."
									// 			\n");
									// echo $total_energimenu->energi_menu;
									$hasil = $total_energimenu->energi_menu / 3;
									// $hasil = $tee / 3;						
									$total = 0;
									$jam_makan = 1;
									// echo nl2br(' hasil bagi: ' .$hasil. ' - total energi menu makan: ' .$total_energimenu->energi_menu. " \n");

									// buat kondisi nilai gizi terpenuhi atau tidak susai total energi menu makan
									// if ($total_energimenu->energi_menu >= $batas_bawah && $total_energimenu->energi_menu <= $nilai_batasatas->batas_atas) {
									// 	echo nl2br("\nStatus gizi anda terpenuhi");
									// } else {
									// 	echo nl2br("\nMaaf! Status gizi anda belum terpenuhi");
									// }
									
								?>					
									<h3><?php echo ($jam_makan==1) ? 'Pagi' : '' ?></h3>
									
									<?php foreach ($details as $detail): ?>
										<?php $total = $total + $detail->energi_menu; ?>
										
										<?php if ($total >= $hasil) : ?>
											<?php $total = 0; ?>
											<?php $jam_makan = $jam_makan + 1; ?>
											
											<h3><?php echo ($jam_makan==2) ? 'Siang' : 'Malam' ?></h3>
											
										<?php endif; ?>
										
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-3" style="padding-left: 0"><?php echo $detail->nama_menu; ?></div>
												<div class="col-md-2"><?php echo $detail->energi_menu. ' kalori' ?></div>
												<div class="col-md-2"><?php echo $detail->karbohidrat_menu. ' kalori' ?></div>
												<div class="col-md-2"><?php echo $detail->protein_menu. ' kalori' ?></div>
												<div class="col-md-2"><?php echo $detail->lemak_menu. ' kalori' ?></div>
											</div>
										</div>						
										
										<?php //else : ?>
						
											<?php //echo $detail->nama_menu.' - '.$detail->energi_menu ?>
											
										<?php //endif; ?>

									<?php endforeach; ?>
									<hr>
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-3" style="padding-left: 0"></div>
											<div class="col-md-2"><?php echo $total_energimenu->energi_menu. ' kalori' ?></div>
											<div class="col-md-2"><?php echo round($total_karbohidrat->karbohidrat_menu, 2). ' kalori' ?></div>
											<div class="col-md-2"><?php echo round($total_protein->protein_menu, 2). ' kalori' ?></div>
											<div class="col-md-2"><?php echo round($total_lemak->lemak_menu, 2). ' kalori' ?></div>
										</div>
									</div>
								<?php else: ?>						

								<?php endif; ?>

							</div>
							<!-- ./col-lg-12 -->
						</div>
						<!-- card-body -->

						<div class="card-footer small text-muted">
							* required fields
						</div>
					</div>
					<!-- card mb-3 -->
				</div>
				<!-- /.container-fluid -->				

			</div>
			<!-- /.content-wrapper -->
			
		</div>
		<!-- /#wrapper -->

		<footer class="page-footer" style="background-color: #E3E3E3; ">
			<div class="footer-copyright text-center py-3">
				<span>Copyright ©
					Ibu Hamil 2019</span>
			</div>
		</footer>
	</div>
	<!-- container -->

	<?php $this->load->view("ibuhamil/_partials/scrolltop.php") ?>
	<?php $this->load->view("ibuhamil/_partials/modal.php") ?>
	<?php $this->load->view("ibuhamil/_partials/js.php") ?>

</body>

</html>
