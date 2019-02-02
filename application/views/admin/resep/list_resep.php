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
					<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">						
						Resep Makan
					</div>

					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<td>No.</td>
										<td>Nama Menu</td>
										<td>Nama Bahan</td>
										<td>Jumlah Bahan</td>
										<td>Satuan Takaran</td>									
									</tr>
								</thead>
								<tbody>
									<?php 
										$no=1;
										foreach($reseps as $resep):
									?>
									<tr>
										<td>
											<?php echo $no; ?>
										</td>
										<td>
											<?php echo $resep->nama_menu; ?>
										</td>
										<td>
											<?php echo $resep->nama_bahan; ?>
										</td>
										<td>
											<?php echo $resep->jumlah_bahan; ?>
										</td>
                                        <td>
											<?php echo $resep->satuan_takaran; ?>
										</td>										
										<!-- <td width="300">
											<a href="<?php echo site_url('admin/user/detail/'.$user->id_user); ?>" class="btn btn-info <?php echo $user->level === "1" ? "disabled" : null ?>" >
													<i class="fas fa-eye"></i> Read
											</a>

											<a href="<?php echo site_url('admin/user/edit/'.$user->id_user); ?>" class="btn btn-primary <?php echo $user->level === "1" ? "disabled" : null ?>">
												<i class="fas fa-edit"></i> Edit
											</a>

											<a onclick="deleteConfirm('<?php echo site_url('admin/user/delete/'.$user->id_user); ?>')"
											 href="#!" class="btn btn-small btn-danger <?php echo $user->level === "1" ? "disabled" : null ?>">
												<i class="fas fa-trash"></i> Hapus
											</a>
										</td> -->
									</tr>
									<?php
										$no++;
										endforeach;
									?>
								</tbody>
							</table>
						</div>
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