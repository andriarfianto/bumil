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

				<!-- Notifikasi data berhasil di simpan -->
				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-primary" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
                        <i class="fa fa-comments" aria-hidden="true"></i> List user chat    
					</div>

					<div class="card-body">
                        <div class="card md-3">
                            <div class="card-body">
                                <div class="well" style="width:100%; height: 300px; max-height: 300px; overflow-y: auto;">
                                    <?php foreach ($pesans as $pesan): ?>
                                        <?php if ($pesan->pengirim == 1): ?>
                                            <p class="alert alert-primary" style="border-radius: 20px 20px 0px 20px; width: 50%; left: 50%;">
                                                <strong><?php echo $pesan->isi_pesan; ?></strong><br>
                                                <span class="text-default small">
                                                    <?php														
                                                        echo time_ago($pesan->tanggal);														
                                                    ?>
                                                </span>
                                            </p>
                                        <?php elseif($pesan->pengirim == 2): ?>
                                            <p class="alert alert-info" style="border-radius: 20px 20px 20px 0px; background-color: #23A127; border-color: #1f8422; width: 50%;right: 0%;">
                                                <strong><?php echo $pesan->isi_pesan; ?></strong><br>
                                                <span class="text-default small">
                                                    <?php 
                                                        echo time_ago($pesan->tanggal);														
                                                    ?>
                                                </span>
                                            </p>
                                        <?php endif ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
						<?php //echo var_dump($this->session->userdata()); die('sawe'); ?>
							
                        <form class="" method="post" action="<?php base_url('chat/reply'); ?>" style="margin-top: 2%;">
                            <div class="form-group">
                                <textarea required="" name="isi_pesan" id="isi_pesan" class="form-control" placeholder="Tuliskan pesan anda disini"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success" style="float: right;"><i class="fa fa-paper-plane"></i> Kirim</button>
                            </div>
                        </form>
                    </div>
                    <!-- ./card-body -->

                    <div class="card-footer small text-muted">
                        * required fields
                    </div>
				</div>

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

	<script>
	function deleteConfirm(url) {
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>