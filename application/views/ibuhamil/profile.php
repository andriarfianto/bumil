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
    						<i class="fas fa-address-card"></i> Profile Ibu Hamil
    					</div>

    					<div class="card-body">

                            <div class="col-md-12">
                                <div class="row">
                                    <!-- Sisi kiri -->
                                    <div class="col-md-10">
                                        <form enctype="multipart/form-data">

                                            <input type="hidden" name="id" value="<?php echo $user->id_user; ?>">

                                            <!-- <span></span> -->
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" style="width: 174px;">Username</th>
                                                        <td>
                                                            : <?php echo $user->username; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Nama</th>
                                                        <td>
                                                            : <?php echo $user->nama; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Email</th>
                                                        <td>
                                                            : <?php echo $user->email; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tanggal Lahir</th>
                                                        <td>
                                                            : <?php $date = new DateTime($user->tanggal_lahir);
                                                            echo $date->format('d/m/Y');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Umur</th>
                                                        <td>
                                                            : Sementara kosong dulu
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Alamat</th>
                                                        <td>
                                                            : <?php echo $user->alamat; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">No. Telp</th>
                                                        <td>
                                                            : <?php echo $user->no_telp; ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>

                                        <div class="text-right">
                                            <!-- Button kembali -->
                                            <a href="<?php echo base_url('ibuhamil/dashboard') ?>">
                                                <button type="button" class="btn btn-primary pull-right">
                                                    <i class="fas fa-arrow-left"></i> Kembali
                                                </button>
                                            </a>

                                            <!-- Button edit -->
                                            <a href="<?php echo base_url('ibuhamil/profile/edit/'.$user->id_user) ?>">
                                                <button type="button" class="btn btn-success pull-right">                                        
                                                    <i class="far fa-edit"></i> Edit
                                                </button>
                                            </a>
                                        </div>
                                        <!-- /right-button -->
                                    </div>
                                    <!-- ./col-md-10 -->

                                    <!-- Sisi kanan -->
                                    <div class="col-md-2">
                                        <div class="row">
                                            <img src="<?php echo base_url('upload/user/'.$user->foto); ?>" width="100%" height="100%">
                                        </div>
                                    </div>
                                    <!-- ./col-md-4 -->
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
