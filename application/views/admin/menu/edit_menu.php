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
						<a href="http://localhost/ci-ibuhamil/admin/menu">							
							<i class="fas fa-arrow-left"></i> Kembali</button>
						</a>
					</div>

					<div class="card-body">
						<form action="<?php echo site_url('admin/menu/edit/'.$menu->id_menu); ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $menu->id_menu; ?>">

							<div class="col-lg-12">
								<div class="row">
									<!-- Nama Menu  -->
									<div class="col-md-6">
										<div class="form-group">
											<label for="nama_menu">Nama Menu*</label>
											<input type="text" class="form-control" name="nama_menu" placeholder="Nama Menu" value="<?php echo $menu->nama_menu; ?>">
											<span style="color: red">
												<?php echo form_error('nama_menu'); ?>
											</span>
										</div>
									</div>

									<!-- Karbohidrat Menu  -->
									<div class="col-md-6">
										<div class="form-group">
											<label for="nama_menu">Karbohidrat Menu*</label>
											<input type="text" class="form-control" name="karbohidrat_menu" placeholder="Karbohidrat Menu" value="<?php echo $menu->karbohidrat_menu; ?>">
											<span style="color: red">
												<?php echo form_error('karbohidrat_menu'); ?>
											</span>
										</div>
									</div>
								</div>								

								<div class="row">
									<!-- Kategori Menu -->
									<div class="col-md-6">
										<div class="form-group">
											<label for="kategori_menu">Kategori Menu*</label>
											<select class="form-control" id="kategori_menu" name="kategori_menu">
												<option value="0">Silahkan Pilih</option>
												<option <?php if ($menu->kategori_menu == 1 ) echo 'selected' ; ?> value="1">Sayur Mayur</option>
												<option <?php if ($menu->kategori_menu == 2 ) echo 'selected' ; ?> value="2">Lauk Pauk</option>
												<option <?php if ($menu->kategori_menu == 3 ) echo 'selected' ; ?> value="3">Olahan Buah</option>
												<option <?php if ($menu->kategori_menu == 4 ) echo 'selected' ; ?> value="4">Olahan Daging</option>
												<option <?php if ($menu->kategori_menu == 5 ) echo 'selected' ; ?> value="5">Susu</option>
												<option <?php if ($menu->kategori_menu == 6 ) echo 'selected' ; ?> value="6">Camilan</option>
												<option <?php if ($menu->kategori_menu == 7 ) echo 'selected' ; ?> value="7">Serelia/Umbi</option>
											</select>
											<span style="color: red">
												<?php echo form_error('kategori_menu'); ?>
											</span>
										</div>
									</div>

									<!-- Protein Menu -->									
									<div class="col-md-6">
										<div class="form-group">
											<label for="protein_menu">Protein Menu*</label>
											<input type="text" class="form-control" name="protein_menu" placeholder="Protein Menu" value="<?php echo $menu->protein_menu; ?>">
											<span style="color: red">
												<?php echo form_error('protein_menu'); ?>
											</span>
										</div>
									</div>
								</div>																		

								<div class="row">
									<!-- Energi Menu -->																		
									<div class="col-md-6">
										<div class="form-group">
											<label for="energi_menu">Energi Menu*</label>
											<input type="text" class="form-control" name="energi_menu" placeholder="Energi Menu" value="<?php echo $menu->energi_menu; ?>">
											<span style="color: red">
												<?php echo form_error('energi_menu'); ?>
											</span>
										</div>										
									</div>

									<!-- Lemak Menu -->
									<div class="col-md-6">
										<div class="form-group">
											<label for="lemak_menu">Lemak Menu*</label>
											<input type="text" class="form-control" name="lemak_menu" placeholder="Lemak Menu" value="<?php echo $menu->lemak_menu; ?>">
											<span style="color: red">
												<?php echo form_error('lemak_menu'); ?>
											</span>
										</div>										
									</div>
								</div>															

								<!-- Textarea Cara Membuat -->
								<div class="form-group">
									<label for="cara_membuat">Cara Membuat*</label>									
									<textarea class="form-control" name="cara_membuat" placeholder="Cara Membuat" rows="8"><?php echo $menu->cara_membuat; ?></textarea>
									<span style="color: red">
										<?php echo form_error('cara_membuat'); ?>
									</span>
								</div>									                                              

								<button type="submit" name="btn" class="btn btn-success pull-right" style="float: right;">
									<i class="far fa-save"></i> Save
								</button>
								<button type="button" id="add-bahan" name="btn" class="btn btn-primary" style="float: right; margin-right: 10px; margin-bottom: 3%">
									Tambah Bahan
								</button>

								<table class="table table-hover table-striped" id="data-table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td style="text-align: center;">ID. Bahan</td>
											<td></td>
                                            <td>Nama Bahan</td>
                                            <td>Berat Takaran</td>
                                            <td>Golongan</td>
                                            <td>Energi Bahan</td>
                                            <td>Karbohidrat Bahan</td>
                                            <td>Protein Bahan</td>
                                            <td>Lemak Bahan</td>
                                            <td>Jumlah</td>
                                            <td>Takaran</td>
                                            <td>Action</td>
                                        </tr>									
                                    </thead>
                                    <tbody>
                                        <?php
											$no=1;
											foreach($bahans as $bahan) {
										?>
										<tr id="row' + i + '" a="<?php echo $bahan->id_detail_menu; ?>">
												<td>
													<?php //echo $bahan->id_detail_menu; ?>
													<input type="hidden" name="id_detail_menu_edit[<?php echo $bahan->id_detail_menu; ?>]" value="<?php echo $bahan->id_detail_menu; ?>" >
													<input type="text" class="form-control" readonly name="id_bahan_edit[<?php echo $bahan->id_detail_menu; ?>]" id="id_bahan-<?php echo $bahan->id_detail_menu; ?>" value="<?php echo $bahan->id_detail_menu; ?>" placeholder="ID. Menu">
												</td>
												<td><button type="button" data-id="<?php echo $bahan->id_detail_menu; ?>" class="btn btn-small btn-primary btn-browse btn-browse-edit"><i class="fas fa-file"></i></button></td>
												<td><input type="text" class="form-control" readonly name="nama_bahan_edit[<?php echo $bahan->id_detail_menu; ?>]" id="nama_bahan-<?php echo $bahan->id_detail_menu; ?>" placeholder="Nama Bahan" value="<?php echo $bahan->nama_bahan; ?>"></td>
												<td><input type="text" class="form-control" readonly name="berat_takaran_edit[<?php echo $bahan->id_detail_menu; ?>]" id="berat_takaran-<?php echo $bahan->id_detail_menu; ?>" placeholder="Berat Takaran" value="<?php echo $bahan->berat_takaran ?>"></td>
												<td><input type="text" class="form-control" readonly name="golongan_edit[<?php echo $bahan->id_detail_menu; ?>]" id="golongan-<?php echo $bahan->id_detail_menu; ?>" placeholder="Golongan" value="<?php echo $bahan->golongan ?>"></td>
												<td><input type="text" class="form-control" readonly name="energi_bahan_edit[<?php echo $bahan->id_detail_menu; ?>]" id="energi_bahan-<?php echo $bahan->id_detail_menu; ?>" placeholder="Energi Bahan" value="<?php echo $bahan->energi_bahan ?>"></td>
												<td><input type="text" class="form-control" readonly name="karbohidrat_bahan_edit[<?php echo $bahan->id_detail_menu; ?>]" id="karbohidrat_bahan-<?php echo $bahan->id_detail_menu; ?>" placeholder="Karbohidrat Bahan" value="<?php echo $bahan->karbohidrat_bahan ?>"></td>
												<td><input type="text" class="form-control" readonly name="protein_bahan_edit[<?php echo $bahan->id_detail_menu; ?>]" id="protein_bahan-<?php echo $bahan->id_detail_menu; ?>" placeholder="Protein Bahan" value="<?php echo $bahan->protein_bahan ?>"></td>
												<td><input type="text" class="form-control" readonly name="lemak_bahan_edit[<?php echo $bahan->id_detail_menu; ?>]" id="lemak_bahan-<?php echo $bahan->id_detail_menu; ?>" placeholder="Lemak Bahan" value="<?php echo $bahan->lemak_bahan ?>"></td>
												<td><input type="text" class="form-control" name="jumlah_bahan_edit[<?php echo $bahan->id_detail_menu; ?>]" id="jumlah_bahan-<?php echo $bahan->id_detail_menu; ?>" placeholder="Jumlah" value="<?php echo $bahan->jumlah_bahan ?>"></td>
												<td><input type="text" class="form-control" name="satuan_takaran_edit[<?php echo $bahan->id_detail_menu; ?>]" id="satuan_takaran-<?php echo $bahan->id_detail_menu; ?>" placeholder="Takaran" value="<?php echo $bahan->satuan_takaran ?>"></td>
												<td>
													<button type="button" name="remove" id="<?php echo $bahan->id_detail_menu; ?>" class="btn btn-small btn-danger btn-remove"><i class="fas fa-trash"></i></button>
												</td>
										</tr>
										<?php $no = $bahan->id_detail_menu++; ?>
										<?php } //$no++; ?>
                                    </tbody>
                                    <!-- ./tbody -->
                                </table>
                                <!-- ./table -->

								<input type="hidden" id="no_list" value="<?php echo $no; ?>">
								<!-- <input type="hidden" name="id" value="<?php //echo $bahan->id_bahan; ?>"> -->

							</div>
							<!-- ./col-lg-12 -->
						</form>			
					</div>
				</div>

				<div class="card-footer small text-muted">
					* required fields
				</div>
			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->
		
		<!-- Modal untuk menambahkan data bahan makan -->
		<div id="myModal" class="modal fade">
            <div class="modal-dialog modal-lg" style="width: 100%">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Browse Bahan</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body" id="modal-data">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

		<!-- Modal untuk edit data bahan -->
		<div id="modalBahan" class="modal fade">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Data Bahan</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body" id="modal-dataBahan">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<!-- /#wrapper -->

	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>

	<script type="text/javascript">
		// delete konfirmasi bahan makan
		function deleteConfirm(url) {
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}

		var i = 1;
		$('#add-bahan').click(function() {
			var no_list = $('#no_list').val();
            // tambah no list terakhir
            no_list = eval(no_list) + 1;
			$('#no_list').val(no_list);
			
			i++;
            $('#data-table').append(
                '<tr id="row' + i + '" a="'+no_list+'">' +
                    '<td><input type="text" class="form-control" readonly name="id_bahan[' + no_list + ']" id="id_bahan-' + no_list + '" placeholder="ID. Menu"></td>' + // ada no '+no_list+' setelah tag td
                    '<td><button type="button" onclick="browse(' + no_list + ')" class="btn btn-small btn-primary btn-browse"><i class="fas fa-file"></i></button></td>' +
                    '<td><input type="text" class="form-control" readonly name="nama_bahan[' + no_list + ']" id="nama_bahan-' + no_list + '" placeholder="Nama Bahan"></td>' +
                    '<td><input type="text" class="form-control" readonly name="berat_takaran[' + no_list + ']" id="berat_takaran-' + no_list + '" placeholder="Berat Takaran"></td>' +
                    '<td><input type="text" class="form-control" readonly name="golongan[' + no_list + ']" id="golongan-' + no_list + '" placeholder="Golongan"></td>' +
                    '<td><input type="text" class="form-control" readonly name="energi_bahan[' + no_list + ']" id="energi_bahan-' + no_list + '" placeholder="Energi Bahan"></td>' +
                    '<td><input type="text" class="form-control" readonly name="karbohidrat_bahan[' + no_list + ']" id="karbohidrat_bahan-' + no_list + '" placeholder="Karbohidrat Bahan"></td>' +
                    '<td><input type="text" class="form-control" readonly name="protein_bahan[' + no_list + ']" id="protein_bahan-' + no_list + '" placeholder="Protein Bahan"></td>' +
                    '<td><input type="text" class="form-control" readonly name="lemak_bahan[' + no_list + ']" id="lemak_bahan-' + no_list + '" placeholder="Lemak Bahan"></td>' +
                    '<td><input type="text" class="form-control" name="jumlah_bahan[' + no_list + ']" id="jumlah_bahan-' + no_list + '" placeholder="Jumlah"></td>' +
                    '<td><input type="text" class="form-control" name="satuan_takaran[' + no_list + ']" id="satuan_takaran-' + no_list + '" placeholder="Takaran"></td>' +
                    '<td>' +
                        '<button type="button" name="remove" id="' + no_list + '" class="btn btn-small btn-danger btn-remove"><i class="fas fa-trash"></i></button>' +
                    '</td>' +
				'</tr>'
			);
		});

		// delete table row
        $(document).on('click', '.btn-remove', function() {
            // var btn_id = $(this).attr("id");
            $('#row' + i + '').remove();
		});
		
		// display modal browse
        function browse(no_list) {
            // alert('aaaaa');
			// ajax
			
            // no_list = $('#no_list').val();
            $.get("<?php echo base_url('admin/menu/browse') ?>", {
                no: no_list
            }, function(result, error) {
                // codet
                $('#modal-data').html(result);
                $('#myModal').modal('show');
            });
		}

		// display modal browse
        $('.btn-browse-edit').click(function() {
            // alert('aaaaa');
			// ajax
			// alert(id);
			// alert($(this).data("id"));
            $.get("<?php echo base_url('admin/menu/edit_browse') ?>", {
				no_edit: $(this).data("id"),
            }, function(result, error) {
                // codet
                $('#modal-dataBahan').html(result);
                $('#modalBahan').modal('show');
			});
		});
		
		// display modal browse
        // $('.btn-browse').click(function() {
		// 	// $nama = $bahan->nama_bahan;
		// 	// alert($.get($nama););
        //     // ajax
		// 	// id = $('#id').val();
		// 	//id = document.getElementById('#id').value;
		// 	// alert(id);			
		// 	id = $(this).data("id");
		// 	// alert(id);
        //     $.get("<?php echo base_url('admin/menu/edit_browse/') ?>"+id, {
        //         // no: no_list
        //     }, function(result, error) {
        //         // codet
        //         $('#modal-dataBahan').html(result);
        //         $('#modalBahan').modal('show');
        //     });
        // });
	</script>
</body>

</html>