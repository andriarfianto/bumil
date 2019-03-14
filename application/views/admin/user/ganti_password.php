<!DOCTYPE html>
<html lang="en">

<head>

	<?php $this->load->view("ibuhamil/_partials/head.php") ?>

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
                            <i class="fas fa-key"></i></i> Ganti Password
    					</div>

    					<div class="card-body">

                            <div class="col-md-12">
                                <div class="row"> 
                                    <!-- Sisi kiri -->
                                    <div class="col-md-2"></div>

                                    <!-- Sisi tengah -->
                                    <div class="col-md-8">
                                        <form action="<?php echo site_url('admin/password/index/'.$user->id_user); ?>" method="post" enctype="multipart/form-data">											

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Password Lama</label>
                                                </div>
                                                <div class="col-md-1">:</div>                                                                    
                                                <div class="col-md-7">
                                                    <input type="password" class="form-control" name="password_lama" placeholder="Password Lama">
                                                    <span style="color: red">
                                                        <?php echo form_error('password_lama'); ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Password Baru</label>
                                                </div>
                                                <div class="col-md-1">:</div>                                                
                                                <div class="col-md-7">
                                                    <input type="password" class="form-control" name="password_baru" placeholder="Password Baru">
                                                    <span style="color: red">
                                                        <?php echo form_error('password_baru'); ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Confirm Password Baru</label>
                                                </div>
                                                <div class="col-md-1">:</div>                                               
                                                <div class="col-md-7">
                                                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password Baru">
                                                    <span style="color: red">
                                                        <?php echo form_error('confirm_password'); ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <br>                                          

                                            <div class="row">
                                                <div class="col-md-8"></div>
                                                <div class="text-right">
                                                    <a href="<?php echo site_url('admin/overview'); ?>">
                                                        <button type="button" class="btn btn-primary pull-right">
                                                        <i class="fas fa-arrow-left"></i> Kembali</button>
                                                    </a>                                               

                                                    <button type="submit" class="btn btn-success pull-right">
                                                        <i class="far fa-save"></i> Save
                                                    </button>
                                                </div>
                                            </div>                                            
                                        </form>
                                    </div>
                                    <!-- ./col-md-6 -->

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
                    <br>

                    <!-- Sticky Footer -->
			        <?php $this->load->view("admin/_partials/footer.php") ?>

    			</div>
    			<!-- /.container-fluid -->

			</div>
			<!-- /.content-wrapper -->

            
        
        
        </div>
		<!-- /#wrapper -->		

	<?php $this->load->view("ibuhamil/_partials/scrolltop.php") ?>
	<?php $this->load->view("ibuhamil/_partials/modal.php") ?>
	<?php $this->load->view("ibuhamil/_partials/js.php") ?>

</body>

</html>
