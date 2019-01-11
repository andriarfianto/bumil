


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


                    <!-- DISINI -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?php echo site_url('ibuhamil/konsultasi'); ?>">
                                <i class="fas fa-arrow-left"></i> Back
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

                            <div class="col-lg-12">
                                <!-- Row untuk penjelasa -->
                                <div class="row">
                                    <!-- <div class="col-6"> -->
                                        <h3>Konsultasi kehamilan</h3>
                                        <p>Untuk melakukan konsultasi kehamilan, silahkan masukkan data anda</p>
                                        <ol>
                                            <li>Tinggi Badan - Isi tinggi badan anda saat ini dengan satuan ukuran centimeter.</li>
                                            <li>Berat Badan - Isi berat badan anda saat ini dengan satuan ukuran kilogram.</li>
                                            <li>Usia Kehamilan - Isi usia kehamilan anda dengan jumlah waktu usia kandungan, isi dengan satuan waktu minggu.</li>
                                            <li>Usia Ibu - Isi sesuai dengan usia anda saat ini.</li>
                                            <li>Aktifitas Fisik - Pilih aktifitas fisik berdasarkan <a href="#" data-toggle="modal" data-target="#aktifitasModal">kreteria berikut</a></li>
                                        </ol>
                                    <!-- </div> -->
                                </div>

                                <!-- Row untuk tabel riwayat dan detail-->
                                <div class="row">
                                    <!-- <div class="col-6"> -->
                                        <table class="table table-striped table-hover ">
                                          <thead>
                                            <tr>
												<td>No</td>
                                              <td>Tinggi Badan</td>
                                              <td>Berat Badan</td>
                                              <td>Usia Ibu</td>
                                              <td>Usia Kehamilan</td>
                                              <td>Sattus Gizi</td>
                                              <td>Berat Badan Ideal</td>
                                              <td>Total Energi</td>
                                              <td>Kebutuhan Karbohidrat</td>
                                              <td>Kebutuhan Protein</td>
                                              <td>Kebutuhan Lemak</td>
                                              <td>Aksi</td>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
												<td>1</td>
                                                <td>176 cm</td>
                                                <td>68 kg</td>
                                                <td>37 tahun</td>
                                                <td>10 minggu</td>
                                                <td>Gemuk</td>
                                                <td>79 kg</td>
                                                <td>2120 kalori</td>
                                                <td>213 gram</td>
                                                <td>445 gram</td>
                                                <td>13 gram</td>
                                                <td><a href="#">Detail</a></td>
                                            </tr>
                                            <tr>
												<td>2</td>
                                                <td>176 cm</td>
                                                <td>72 kg</td>
                                                <td>39 tahun</td>
                                                <td>19 minggu</td>
                                                <td>Normal</td>
                                                <td>81 kg</td>
                                                <td>2216 kalori</td>
                                                <td>262 gram</td>
                                                <td>124 gram</td>
                                                <td>121 gram</td>
                                                <td><a href="#">Detail</a></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                    <!-- </div>                                     -->
                                </div>
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
