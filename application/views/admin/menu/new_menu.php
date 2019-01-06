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
                        <a href="<?php echo site_url('admin/menu'); ?>">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                    </div>

                    <div class="card-body">
                        <!-- Success validation error -->
                        <!-- <div class="form_error">
							echo validation_errors('<div class="alert alert-danger" role="alert">','</div>'); ?>
						</div> -->

                        <!-- Failed validation error -->
                        <!-- <div class="invalid-feedback">
							echo form_error('username'); ?>
						</div> -->

                        <form action="<?php echo site_url('admin/menu/add'); ?>" method="post" enctype="multipart/form-data">
                            <div class="col lg 12">
                                <div class="row">
                                    <!-- Nama Menu -->
                                    <div class="col md 6">
                                        <div class="form-group">
                                            <label for="nama_menu">Nama Menu*</label>
                                            <input type="text" class="form-control" name="nama_menu" value="<?php echo $nama_menu; ?>"
                                                placeholder="Nama Menu">
                                            <span style="color: red">
                                                <?php echo form_error('nama_menu'); ?>
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Karbohidrat Menu -->
                                    <div class="col md 6">
                                        <div class="form-group">
                                            <label for="karbohidrat_menu">Karbohidrat Menu*</label>
                                            <input type="text" class="form-control" name="karbohidrat_menu" value="<?php echo $karbohidrat_menu; ?>"
                                                placeholder="Karbohidrat Menu">
                                            <span style="color: red">
                                                <?php echo form_error('karbohidrat_menu'); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./rows -->

                                <div class="row">
                                    <!-- Kategori Menu -->
                                    <div class="col md 6">
                                        <div class="form-group">
                                            <label for="kategori_menu">Kategori Menu*</label>
                                            <select class="form-control" id="kategori_menu" name="kategori_menu">
                                                <option value="0">Silahkan Pilih</option>
                                                <option <?php if ($kategori_menu==1 ) echo 'selected' ; ?>
                                                    value="1">Sayur Mayur</option>
                                                <option <?php if ($kategori_menu==2 ) echo 'selected' ; ?>
                                                    value="2">Lauk Pauk</option>
                                                <option <?php if ($kategori_menu==3 ) echo 'selected' ; ?>
                                                    value="3">Olahan Buah</option>
                                                <option <?php if ($kategori_menu==4 ) echo 'selected' ; ?>
                                                    value="4">Olahan Daging</option>
                                                <option <?php if ($kategori_menu==5 ) echo 'selected' ; ?>
                                                    value="5">Susu</option>
                                                <option <?php if ($kategori_menu==6 ) echo 'selected' ; ?>
                                                    value="6">Camilan</option>
                                                <option <?php if ($kategori_menu==7 ) echo 'selected' ; ?>
                                                    value="7">Serelia/Umbi</option>
                                            </select>
                                            <span style="color: red">
                                                <?php echo form_error('kategori_menu'); ?>
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Protein Menu -->
                                    <div class="col md 6">
                                        <div class="form-group">
                                            <label for="protein_menu">Protein Menu*</label>
                                            <input type="text" class="form-control" name="protein_menu" value="<?php echo $protein_menu; ?>"
                                                placeholder="Protein Menu">
                                            <span style="color: red">
                                                <?php echo form_error('protein_menu'); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./rows -->

                                <div class="row">
                                    <!-- Energi -->
                                    <div class="col md 6">
                                        <div class="form-group">
                                            <label for="energi_menu">Energi Menu*</label>
                                            <input type="text" class="form-control" name="energi_menu" value="<?php echo $energi_menu; ?>"
                                                placeholder="Energi Menu">
                                            <span style="color: red">
                                                <?php echo form_error('energi_menu'); ?>
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Lemak Menu -->
                                    <div class="col md 6">
                                        <div class="form-group">
                                            <label for="lemak_menu">Lemak Menu*</label>
                                            <input type="text" class="form-control" name="lemak_menu" value="<?php echo $lemak_menu; ?>"
                                                placeholder="Lemak Menu">
                                            <span style="color: red">
                                                <?php echo form_error('lemak_menu'); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./rows -->

                                <!-- Textarea Cara Membuat -->
                                <div class="form-group">
                                    <label for="cara_membuat">Cara Membuat*</label>
                                    <textarea class="form-control" name="cara_membuat" placeholder="Cara Membuat" rows="8"><?php echo $cara_membuat; ?></textarea>
                                    <span style="color: red">
                                        <?php echo form_error('cara_membuat'); ?>
                                    </span>
                                </div>

                                <button type="submit" name="btn" class="btn btn-success" style="float: right;">Save</button>
                                <button type="button" id="add-bahan" name="btn" class="btn btn-primary" style="float: right; margin-right: 10px; margin-bottom: 3%">Tambah
                                    Bahan</button>

                                <table class="table table-hover table-striped" id="data-table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td colspan="2" style="text-align: center;">ID. Bahan</td>
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
                                        <!-- modal -->
                                    </tbody>
                                    <!-- ./tbody -->
                                </table>
                                <!-- ./table -->

                                <input type="hidden" id="no_list" value="0">

                            </div>
                            <!-- .col-lg-12 -->
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

        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-lg">
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

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/modal.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>

    <script type="text/javascript">
        var i = 1;

        // data-toggle="modal" data-target="#myModal" 

        // add table row
        $('#add-bahan').click(function() {
            var no_list = $('#no_list').val();
            // tambah no list terakhir
            no_list = eval(no_list) + 1;
            $('#no_list').val(no_list);

            i++;
            $('#data-table').append(
                '<tr id="row' + i + '" a="'+no_list+'">' +
                    '<td><input type="text" class="form-control" name="id_bahan[' + no_list + ']" id="id_bahan-' + no_list + '" placeholder="ID. Menu"></td>' +
                    '<td><button type="button" onclick="browse()" class="btn btn-small btn-primary btn-browse"><i class="fas fa-file"></i></button></td>' +
                    '<td><input type="text" class="form-control" name="nama_bahan[' + no_list + ']" id="nama_bahan-' + no_list + '" placeholder="Nama Bahan"></td>' +
                    '<td><input type="text" class="form-control" name="berat_takaran[' + no_list + ']" id="berat_takaran-' + no_list + '" placeholder="Berat Takaran"></td>' +
                    '<td><input type="text" class="form-control" name="golongan[' + no_list + ']" id="golongan-' + no_list + '" placeholder="Golongan"></td>' +
                    '<td><input type="text" class="form-control" name="energi_bahan[' + no_list + ']" id="energi_bahan-' + no_list + '" placeholder="Energi Bahan"></td>' +
                    '<td><input type="text" class="form-control" name="karbohidrat_bahan[' + no_list + ']" id="karbohidrat_bahan-' + no_list + '" placeholder="Karbohidrat Bahan"></td>' +
                    '<td><input type="text" class="form-control" name="protein_bahan[' + no_list + ']" id="protein_bahan-' + no_list + '" placeholder="Protein Bahan"></td>' +
                    '<td><input type="text" class="form-control" name="lemak_bahan[' + no_list + ']" id="lemak_bahan-' + no_list + '" placeholder="Lemak Bahan"></td>' +
                    '<td><input type="text" class="form-control" name="jumlah_bahan[' + no_list + ']" id="jumlah_bahan-' + no_list + '" placeholder="Jumlah"></td>' +
                    '<td><input type="text" class="form-control" name="satuan_takaran[' + no_list + ']" id="satuan_takaran-' + no_list + '" placeholder="Takaran"></td>' +
                    '<td>' +
                        '<button type="button" name="remove" id="' + no_list + '" class="btn btn-small btn-danger btn-remove"><i class="fas fa-trash"></i></button>' +
                    '</td>' +
                '</tr>'
            );

            // $('.btn-browse').click(function(){
            // 	// alert('gggg');
            // });
        });

        // delete table row
        $(document).on('click', '.btn-remove', function() {
            // var btn_id = $(this).attr("id");
            $('#row' + i + '').remove();
        });

        // $(document).ready(function(){
        //     $(".btn-remove").click(function(){
        //         $("#row' + i + '").hide();
        //     });
        // });

        function browse() {
            // alert('aaaaa');
            // ajax
            no_list = $('#no_list').val();
            $.get("<?php echo base_url('admin/menu/browse') ?>", {
                no: no_list
            }, function(result, error) {
                // codet
                $('#modal-data').html(result);
                $('#myModal').modal('show');
            });

            // tampil data di modal

            // pilih satu bahan

            // simpan id bahan terpilih ke form list menu

            // $('#myModal').modal('show');
        }

        // display modal browse
        $('.btn-browse').click(function() {
            alert('a');
            // ajax
            value = null;
            $.get("<?php echo base_url('admin/menu/browse') ?>", {
                data: value
            }, function(result, error) {
                // codet
                $('#modal-data').html(result);
                $('#myModal').modal('show');
            });

            // tampil data di modal

            // pilih satu bahan

            // simpan id bahan terpilih ke form list menu

            // $('#myModal').modal('show');
        });


        // $('#browse-modal').click(function() {
        // 	$('#myModal').modal('show');
        // });

        // $(document).ready(function(){
        // 	$("browse-modal").click(function(){
        // 		$("#dataModal").modal();
        // 	});
        // });
    </script>

</body>


<!-- //  var id_bahan = $('#id_bahan').val();
		// 	var nama_bahan = $('#nama_bahan').val();
		// 	var berat_takaran = $('#berat_takaran').val();
		// 	var golongan = $('#golongan').val();
		// 	var energi_bahan = $('#energi_bahan').val();
		// 	var karbohidrat_bahan = $('#karbohidrat_bahan').val();
		// 	var protein_bahan = $('#protein_bahan').val();
		// 	var lemak_protein = $('#lemak_protein').val();

		// $('#data-table tbody:last-child').append(
			// '<tr>'+
			// 		'<td>'+id_bahan+'</td>'+
			// 		'<td>'+nama_bahan+'</td>'+
			// 		'<td>'+berat_takaran+'</td>'+
			// 		'<td>'+golongan+'</td>'+
			// 		'<td>'+energi_bahan+'</td>'+
			// 		'<td>'+karbohidrat_bahan+'</td>'+
			// 		'<td>'+protein_bahan+'</td>'+
			// 		'<td>'+lemak_bahan+'</td>'+					
			// 	'</tr>'
		// ); -->

</html>