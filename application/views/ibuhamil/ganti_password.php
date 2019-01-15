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
    				<div class="alert alert-success" role="alert">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    					<?php echo $this->session->flashdata('success'); ?>
    				</div>
    				<?php endif; ?>

    				<!-- DataTables -->
    				<div class="card mb-3">
    					<div class="card-header">
    						<i class="fas fa-key"></i> Form Ganti Password
    					</div>

    					<div class="card-body">

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <form action="<?php echo site_url('ibuhamil/password/edit/'.$user->id_user); ?>" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                    <!-- Password Lama -->
                                                    <div class="col-md-4">
                                                        <label>Password Lama :</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="password" class="form-control" name="password_lama" placeholder="Password Lama">
                                                        <span style="color: red">
                                                            <?php echo form_error('password_lama'); ?>
                                                        </span>
                                                    </div>
                                                </div>
                                                <br>

                                                <!-- Password Baru -->
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Password Baru :</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="password" class="form-control" name="password_baru" placeholder="Password Baru">
                                                        <span style="color: red">
                                                            <?php echo form_error('password_baru'); ?>
                                                        </span>
                                                    </div>
                                                </div>
                                                <br>

                                                <!-- Confirm Password -->
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Confirm Password Baru :</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password Baru">
                                                        <span style="color: red">
                                                            <?php echo form_error('confirm_password'); ?>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-11">
                                                        <button type="submit" name="btn" class="btn btn-success" style="float: right; margin-top: 3%;"> <i class="fas fa-edit"></i> Update</button>
                                                    </div>
                                                    <div class="col-md-2"></div>
                                                </div>
                                            <!-- ./rows -->
                                        </form>
                                        <div class="col-md-2"></div>
                                    </div>
                                </div>
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
