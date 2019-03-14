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
				<div class="alert alert-primary alert-dismissable" role="alert">
					<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/bahan/add'); ?>">
							<i class="fas fa-plus"></i> Tambah
						</a>
					</div>

					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<td>No.</td>
										<td>Nama Bahan</td>
										<td>Berat Takaran</td>
										<td>Golongan</td>
										<td>Energi Bahan</td>
										<td>Karbohidrat Bahan</td>
										<td>Protein Bahan</td>
										<td>Lemak Bahan</td>										
										<td>Action</td>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; ?>
									<?php foreach($bahans as $bahan) { ?>
										<tr>
											<td>
												<?php echo $no; ?>
											</td>
											<td>
												<?php echo $bahan->nama_bahan; ?>
											</td>
											<td>
												<?php echo $bahan->berat_takaran; ?> Gram
											</td>
											<td>
												<?php
												if ($bahan->golongan == "1")
												$golongan = "Ringan";
												elseif ($bahan->golongan == "2")
												$golongan = "Daging";
												elseif ($bahan->golongan == "3")
												$golongan = "Ikan";
												elseif ($bahan->golongan == "4")
												$golongan = "Sayuran";
												elseif ($bahan->golongan == "5")
												$golongan = "Serelia/Umbi";
												elseif ($bahan->golongan == "6")
												$golongan = "Bahan Pokok";
												elseif ($bahan->golongan == "7")
												$golongan = "Umum";
												else
												$golongan = '';
												?>
												<?php echo $golongan; ?>
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
											<td width="300">
												<a href="<?php echo site_url('admin/bahan/detail/'.$bahan->id_bahan); ?>" class="btn btn-info">
													<i class="fas fa-eye"></i> Read
												</a>
												<a href="<?php echo site_url('admin/bahan/edit/'.$bahan->id_bahan); ?>" class="btn btn-primary">
													<i class="fas fa-edit"></i> Edit
												</a>
												<a onclick="deleteConfirm('<?php echo site_url('admin/bahan/delete/'.$bahan->id_bahan); ?>')"
												href="#!" class="btn btn-small btn-danger">
													<i class="fas fa-trash"></i> Hapus
												</a>
											</td>
										</tr>										
									<?php $no++; ?>
									<?php } ?>
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