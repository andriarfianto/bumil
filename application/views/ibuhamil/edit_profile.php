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

			<!-- <?php //$this->load->view("ibuhamil/_partials/sidebar.php") ?> -->

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

    				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

    				<?php if ($this->session->flashdata('success')): ?>
    				<div class="alert alert-primary" role="alert">
    					<?php echo $this->session->flashdata('success'); ?>
    				</div>
    				<?php endif; ?>

    				<!-- DataTables -->
    				<div class="card mb-3">
    					<div class="card-header">
    						<i class="fas fa-address-card"></i> Update Profile
    					</div>

    					<div class="card-body">

                            <div class="col-md-12">
                                <div class="row">
                                    <!-- Sisi kiri -->
                                    <div class="col-md-6">
                                        <form action="<?php echo site_url('ibuhamil/profile/edit/'.$user->id_user); ?>" method="post"
                                         enctype="multipart/form-data">

                                            <input type="hidden" name="id" value="<?php echo $user->id_user; ?>">

                                            <div class="form-group">
                                                <label for="username">Username*</label>
                                                <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $user->username; ?>">
                                                <span style="color: red">
                                                    <?php echo form_error('username'); ?>
                                                </span>
                                            </div>

                                            <div class="form-group">
                                                <label for="nama">Nama*</label>
                                                <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $user->nama; ?>">
                                                <span style="color: red">
                                                    <?php echo form_error('nama'); ?>
                                                </span>
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Email*</label>
                                                <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $user->email; ?>">
                                                <span style="color: red">
                                                    <?php echo form_error('email'); ?>
                                                </span>
                                            </div>

                                            <div class="form-group">
                                                <label for="alamat">Alamat*</label>
                                                <input type="text" class="form-control" name="alamat" placeholder="Address" value="<?php echo $user->alamat; ?>">
                                                <span style="color: red">
                                                    <?php echo form_error('alamat'); ?>
                                                </span>
                                            </div>

                                            <div class="form-group">
                                                <label for="no_telp">No. Telp*</label>
                                                <input type="text" class="form-control" name="no_telp" placeholder="No. Telp" value="<?php echo $user->no_telp; ?>">
                                                <span style="color: red">
                                                    <?php echo form_error('no_telp'); ?>
                                                </span>
                                            </div>

                                            <div class="form-group">
                                                <label for="foto">Foto*</label>
                                                <input type="file" class="form-control-file" name="foto">
                                                <!-- <input type="hidden " name="old_image" value="<?php echo $user->foto; ?>"> -->
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('foto') ?>
                                                </div>
                                            </div>

                                            <!-- <input type="submit" value="Save" name="btn" class="btn btn-success">
                                            <a href="<?php echo site_url('ibuhamil/profile/edit/'.$user->id_user); ?>" class="btn btn-success pull-right ">
                                                <i class="far fa-edit"></i> Edit
                                            </a> -->

                                            <div class="text-right">
                                                <a href="<?php echo site_url('ibuhamil/profile'); ?>">
                                                <button type="button" class="btn btn-primary pull-right">
                                                    <i class="fas fa-arrow-left"></i> Back</button>
                                                </a>

                                                <!-- <button type="button" name="btn" class="btn btn-success pull-right">
                                                    <i class="fa fa-save"></i> Save
                                                </button> -->

                                                <input type="submit" value="Save" name="btn" class="btn btn-success">
                                            </div>
                                            <!-- /.button-back -->
                                        </form>
                                    </div>
                                    <!-- ./col-md-8 -->

                                    <!-- Sisi kanan -->
                                    <div class="col-6">
                                        <h3>Konsultasi kehamilan</h3>
                                        <p>Untuk melakukan konsultasi kehamilan, silahkan masukkan data anda</p>
                                        <ol>
                                            <li>Tinggi Badan - Isi tinggi badan anda saat ini dengan satuan ukuran centimeter.</li>
                                            <li>Berat Badan - Isi berat badan anda saat ini dengan satuan ukuran kilogram.</li>
                                            <li>Usia Kehamilan - Isi usia kehamilan anda dengan jumlah waktu usia kandungan, isi dengan satuan waktu minggu.</li>
                                            <li>Usia Ibu - Isi sesuai dengan usia anda saat ini.</li>
                                            <li>Aktifitas Fisik - Pilih aktifitas fisik berdasarkan <a href="#" data-toggle="modal" data-target="#aktifitasModal">kreteria berikut</a></li>
                                        </ol>
                                    </div>
                                    <!-- ./col-md-6 -->
                                </div>
                                <!-- /.row -->

                            </div>
                            <!-- ./col-md-12 -->
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
