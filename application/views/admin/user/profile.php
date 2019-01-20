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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-primary" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<i class="fas fa-address-card"></i> Profile Administrator
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
                                        <a href="<?php echo base_url('admin/overview') ?>">
                                            <button type="button" class="btn btn-primary pull-right">
                                                <i class="fas fa-arrow-left"></i> Kembali
                                            </button>
                                        </a>

                                        <!-- Button edit -->
                                        <a href="<?php echo base_url('admin/user/edit_profile/'.$user->id_user) ?>">
                                            <button type="button" class="btn btn-success pull-right">                                        
                                                <i class="far fa-edit"></i> Edit
                                            </button>
                                        </a>
                                    </div>
                                    <!-- /right-button -->
                                </div>
                                <!-- ./col-md-8 -->

                                <!-- Sisi kanan -->
                                <div class="col-md-2">
                                    <div class="row">
                                        <img src="<?php echo base_url('upload/user/'.$user->foto); ?>" width="100%" style="height: 20%;">
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
                <br>
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
