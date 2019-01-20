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
						<a href="<?php echo site_url('admin/menu/add'); ?>">
							<i class="fas fa-plus"></i> Tambah
						</a>
					</div>

					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<td>No.</td>
										<td>Nama Menu</td>
										<td>Kategori Menu</td>
										<td>Energi Menu</td>
										<td>Karbohidrat Menu</td>
										<td>Protein Menu</td>
										<td>Lemak Menu</td>
										<td>Cara Membuat</td>
										<td>Action</td>
									</tr>
								</thead>
								<tbody>
									<?php 
										$no=1;
										foreach($menus as $menu): 
									?>
									<tr>
										<td>
											<?php echo $no; ?>
										</td>
										<td>
											<?php echo $menu->nama_menu; ?>
										</td>
										<td>											
											<?php if ($menu->kategori_menu == "1") {
												echo "Sayur Mayur";
											} elseif ($menu->kategori_menu == "2") {
												echo "Lauk Pauk";
											} elseif ($menu->kategori_menu == "3") {
												echo "Olahan Buah";
											} elseif ($menu->kategori_menu == "4") {
												echo "Olahan Daging";
											} elseif ($menu->kategori_menu == "5") {
												echo "Susu";
											} elseif ($menu->kategori_menu == "6") {
												echo "Camilan";
											} elseif ($menu->kategori_menu == "7") {
												echo "Serelia/Umbi";
											}
											?>
										</td>
										<td>
											<?php echo $menu->energi_menu; ?>
										</td>										
										<td>
											<?php echo $menu->karbohidrat_menu; ?>
										</td>
										<td>
											<?php echo $menu->protein_menu; ?>
										</td>
										<td>
											<?php echo $menu->lemak_menu; ?>
										</td>
										<td>
											<?php echo substr($menu->cara_membuat, 0, 120); ?>...											
										</td>	
										<td width="300">
											<a href="<?php echo site_url('admin/menu/detail/'.$menu->id_menu); ?>" class="btn btn-info">
												<i class="fas fa-eye"></i> Read
											</a>
											<a href="<?php echo site_url('admin/menu/edit/'.$menu->id_menu); ?>" class="btn btn-primary">
												<i class="fas fa-edit"></i> Edit
											</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/menu/delete/'.$menu->id_menu); ?>')"
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