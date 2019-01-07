<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view("ibuhamil/_partials/head.php") ?>

</head>

<body id="page-top">

    <?php $this->load->view("ibuhamil/_partials/navbar.php") ?>

    <div id="wrapper">

        <?php $this->load->view("ibuhamil/_partials/sidebar.php") ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <?php $this->load->view("ibuhamil/_partials/breadcrumb.php") ?>

                <!-- Notifikasi data berhasil di simpan -->
                <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-primary" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php endif; ?>

                <!-- DataTables -->
                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('ibuhamil/konsultasi'); ?>">
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

                        <form action="<?php echo site_url('ibuhamil/konsultasi/add'); ?>" method="post" enctype="multipart/form-data">
                            <div class="col-lg-12">
                                <div class="row">
                                    <!-- Nama Menu -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tinggi_badan">Tinggi Badan* (cm)</label>
                                            <input type="text" class="form-control" name="tinggi_badan" placeholder="Tinggi Badan">
                                            <span style="color: red">
                                                <?php echo form_error('tinggi_badan'); ?>
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Karbohidrat Menu -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="berat_badan">Berat Badan* (kg)</label>
                                            <input type="text" class="form-control" name="berat_badan" placeholder="Berat Badan">
                                            <span style="color: red">
                                                <?php echo form_error('berat_badan'); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./rows -->

                                <div class="row">
									<!-- Usia Kandungan -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="usia_kandungan">Usia Kandungan* (minggu/bulan)</label>
                                            <input type="text" class="form-control" name="usia_kandungan" placeholder="Usia Kandungan">
                                            <span style="color: red">
                                                <?php echo form_error('usia_kandungan'); ?>
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Protein Menu -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="usia_bumil">Usia Ibu Hamil* (tahun)</label>
                                            <input type="text" class="form-control" name="usia_bumil" placeholder="Usia Ibu Hamil">
                                            <span style="color: red">
                                                <?php echo form_error('usia_bumil'); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./rows -->

                                <div class="row">
									<div class="col-md-12">
                                        <div class="form-group">
                                            <label for="aktifitas_fisik">Aktifitas Fisik* (penjelasan) / (pakai modal)</label>
                                            <select class="form-control" id="aktifitas_fisik" name="aktifitas_fisik">
                                                <option value="0">Silahkan Pilih</option>
												<option value="1">Ringan</option>
												<option value="2">Sedang</option>
												<option value="3">Berat</option>

                                                <!-- <option <?php if ($aktifitas_fisik==1 ) echo 'selected' ; ?>
                                                    value="1">Sayur Mayur</option>
                                                <option <?php if ($aktifitas_fisik==2 ) echo 'selected' ; ?>
                                                    value="2">Lauk Pauk</option>
                                                <option <?php if ($aktifitas_fisik==3 ) echo 'selected' ; ?>
                                                    value="3">Olahan Buah</option>
                                                <option <?php if ($aktifitas_fisik==4 ) echo 'selected' ; ?>
                                                    value="4">Olahan Daging</option>
                                                <option <?php if ($aktifitas_fisik==5 ) echo 'selected' ; ?>
                                                    value="5">Susu</option>
                                                <option <?php if ($aktifitas_fisik==6 ) echo 'selected' ; ?>
                                                    value="6">Camilan</option>
                                                <option <?php if ($aktifitas_fisik==7 ) echo 'selected' ; ?>
                                                    value="7">Serelia/Umbi</option> -->
                                            </select>
                                            <span style="color: red">
                                                <?php echo form_error('kategori_menu'); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./rows -->

                                <button type="submit" name="btn" class="btn btn-success" style="float: right;">Save</button>
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
            <?php $this->load->view("ibuhamil/_partials/footer.php") ?>

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

    <?php $this->load->view("ibuhamil/_partials/scrolltop.php") ?>
    <?php $this->load->view("ibuhamil/_partials/modal.php") ?>
    <?php $this->load->view("ibuhamil/_partials/js.php") ?>

</body>

</html>
