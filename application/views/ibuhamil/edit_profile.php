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
                                    <div class="col-md-2"></div>
                                    <!-- Sisi kiri -->
                                    <div class="col-md-8">
                                        <form action="<?php echo site_url('ibuhamil/profile/edit/'.$user->id_user); ?>" method="post" enctype="multipart/form-data">
											<!--  enctype="multipart/form-data" -->
                                            <input type="hidden" name="id" value="<?php echo $user->id_user; ?>">

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="username">Username : </label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $user->username; ?>">
                                                    <span style="color: red">
                                                        <?php echo form_error('username'); ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="nama">Nama Lengkap : </label>                                                    
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $user->nama; ?>">
                                                    <span style="color: red">
                                                        <?php echo form_error('nama'); ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="email">Email : </label>                                                
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $user->email; ?>">
                                                    <span style="color: red">
                                                        <?php echo form_error('email'); ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="tanggal_lahir">Tanggal Lahir : </label>                                                
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $user->tanggal_lahir; ?>">
                                                    <span style="color: red">
                                                        <?php echo form_error('tanggal_lahir'); ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="tanggal_lahir">Umur : </label>                                                
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="tanggal_lahir" disabled
                                                    value="<?php
                                                            $birthday = new DateTime($user->tanggal_lahir);
                                                            $today = new DateTime();

                                                            $interval = $today->diff($birthday);
                                                            $usia_ibu = $interval->y;
                                                            
                                                            echo $usia_ibu. ' Tahun';
                                                        ?>">                                                    
                                                </div>
                                            </div>
                                            <br>                                    

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="alamat">Alamat : </label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $user->alamat; ?>">
                                                    <span style="color: red">
                                                        <?php echo form_error('alamat'); ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="no_telp">No. Telp : </label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="no_telp" placeholder="No. Telp" value="<?php echo $user->no_telp; ?>">
                                                    <span style="color: red">
                                                        <?php echo form_error('no_telp'); ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="foto">Foto : </label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="file" class="form-control-file" name="foto" value="<?php echo $user->foto; ?>">
                                                    <input type="hidden" name="old_image" value="<?php echo $user->foto; ?>">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('foto') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-10">
                                                    <div class="text-right">
                                                        <a href="<?php echo site_url('ibuhamil/profile'); ?>">
                                                        <button type="button" class="btn btn-primary pull-right">
                                                            <i class="fas fa-arrow-left"></i> Kembali</button>
                                                        </a>                                               

                                                        <button type="submit" class="btn btn-success pull-right">
                                                            <i class="far fa-save"></i> Save
                                                        </button>
                                                    </div>
                                                    <!-- /.button-back -->
                                                </div>
                                            </div>

                                            <!-- <input type="submit" value="Save" name="btn" class="btn btn-success">
                                            <a href="<?php echo site_url('ibuhamil/profile/edit/'.$user->id_user); ?>" class="btn btn-success pull-right ">
                                                <i class="far fa-edit"></i> Edit
                                            </a> -->

                                            
                                        </form>
                                    </div>
                                    <!-- ./col-md-8 -->

                                    <!-- Sisi kanan -->
                                    <div class="col-md-3"></div>
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
