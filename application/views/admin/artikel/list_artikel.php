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
						<a href="<?php echo site_url('admin/artikel/add'); ?>">
							<i class="fas fa-plus"></i> Add New
						</a>
					</div>

					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<td>No.</td>
										<td>Judul</td>
										<td>Isi Artikel</td>
										<td>Kategori</td>
										<td>Penulis</td>										
										<td>Tanggal</td>
										<td>Foto</td>
										<td>Action</td>
									</tr>
								</thead>
								<tbody>
									<?php 
										$no=1;
										foreach($artikels as $artikel): 
									?>
									<tr>
										<td>
											<?php echo $no; ?>
										</td>
										<td>
											<?php echo $artikel->judul_artikel; ?>
										</td>
										<td>
											<?php echo substr($artikel->isi_artikel, 0, 120); ?>...											
										</td>
										<td>											
											<?php if ($artikel->kategori == "1") {
												echo "Kesehatan";
											} elseif ($artikel->kategori == "2") {
												echo "Nutrisi";
											} elseif ($artikel->kategori == "3") {
												echo "Buah Hati";
											} elseif ($artikel->kategori == "4") {
												echo "Tips-Tips";
											} elseif ($artikel->kategori == "5") {
												echo "Umum";
											} ?>
										</td>
										<td>
											<?php echo $artikel->nama; ?>
										</td>
										<td>
											<?php echo $artikel->tanggal; ?>
										</td>
										<td>										
											<img src="<?php echo base_url('upload/artikel/'.$artikel->foto); ?>" width="64">
										</td>																							
										<td width="300">
											<a href="<?php echo site_url('admin/artikel/detail/'.$artikel->id_artikel); ?>" class="btn btn-info">
												<i class="fas fa-eye"></i> Read
											</a>
											<a href="<?php echo site_url('admin/artikel/edit/'.$artikel->id_artikel); ?>" class="btn btn-primary">
												<i class="fas fa-edit"></i> Edit
											</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/artikel/delete/'.$artikel->id_artikel); ?>')"
											 href="#!" class="btn btn-small btn-danger">
												<i class="fas fa-trash"></i> Hapus
											</a>
										</td>
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