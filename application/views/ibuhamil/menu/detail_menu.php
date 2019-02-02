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

                            <div class="col-lg-12">
                                <!-- Row untuk penjelasa -->
								<h3><i class="fas fa-angle-double-right"></i> Riwayat Konsultasi kehamilan</h3>
								<p>Riwayat konsultasi yang pernah anda lakukan <br>
								Silahkan pilih/tekan tombol <strong>Detail</strong> untuk mengetahui informasi lengkap data konsultasi <br> beserta informasi saran makan yang dibutuhkan</p>

                                <!-- Row untuk tabel riwayat dan detail-->
                                <!-- <div class="row"> -->
                                    <!-- <div class="col-md-6"> -->
									Daftar Riwayat Konsultasi
									<hr>                                   
                                    <form enctype="multipart/form-data">

                                        <input type="hidden" name="id" value="<?php echo $menu->id_menu; ?>">
                                        <!-- detail bahan -->							

                                        <!-- <span></span> -->
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 20%;">Nama Menu</td>
                                                    <td>
                                                        : <?php echo $menu->nama_menu; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kategori Menu</td>									
                                                    <td>
                                                    : <?php if ($menu->kategori_menu == "1") {
                                                        echo "Sayur Mayur";
                                                    } elseif ($menu->kategori_menu == "2") {
                                                        echo "Lauk Pauk";
                                                    } elseif ($menu->kategori_menu == "3") {
                                                        echo "Olahan Buah";
                                                    } elseif ($menu->kategori_menu == "4") {
                                                        echo "Olahan Daging";
                                                    } elseif ($menu->kategori_menu == "5") {
                                                        echo "Susu";
                                                    } elseif ($menu->kategori_menu == "6") {
                                                        echo "Camilan";
                                                    } elseif ($menu->kategori_menu == "7") {
                                                        echo "Serelia/Umbi";
                                                    }
                                                    ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Energi Menu</th>
                                                    <td>
                                                        : <?php echo $menu->energi_menu; ?> kalori
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Karbohidrat Menu</td>
                                                    <td>
                                                        : <?php echo $menu->karbohidrat_menu; ?> gram
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Protein Menu</td>
                                                    <td>
                                                        : <?php echo $menu->protein_menu; ?> gram
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lemak Menu</td>
                                                    <td>
                                                        : <?php echo $menu->lemak_menu; ?> gram
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Cara Membuat</td>
                                                    <td>
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
                                            <a href="<?php echo site_url('ibuhamil/menu'); ?>">
                                                <button type="button" class="btn btn-primary pull-right">
                                                    <i class="fas fa-arrow-left"></i> Back</button>
                                            </a>
                                        </div>
                                        </form>					
                                    <!-- </div> -->
                                <!-- </div> -->
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
