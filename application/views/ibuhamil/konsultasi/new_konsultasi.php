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

                        <form action="<?php echo site_url('ibuhamil/konsultasi/hitung'); ?>" method="post" enctype="multipart/form-data">
                            <!-- <h3>Form Konsultasi Ibu</h3>
                            <p>Untuk melakukan konsultasi silahkan isi form dibawah ini:</p> -->
                            <div class="col-lg-12">
                                <div class="row">
                                    <!-- Tinggi Badan -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tinggi_badan">Tinggi Badan* (cm)</label>
                                            <input type="text" class="form-control" name="tinggi_badan" placeholder="Tinggi Badan">
                                            <span style="color: red">
                                                <?php echo form_error('tinggi_badan'); ?>
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Berat Badan -->
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
									<!-- Usia Kehamilan -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="usia_kehamilan">Usia Kehamilan* (minggu/bulan)</label>
                                            <input type="text" class="form-control" name="usia_kehamilan" placeholder="Usia Kehamilan">
                                            <span style="color: red">
                                                <?php echo form_error('usia_kehamilan'); ?>
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Usia Ibu Hamil -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="usia_ibuhamil">Usia Ibu Hamil* (tahun)</label>
                                            <input type="text" class="form-control" name="usia_ibuhamil" placeholder="Usia Ibu Hamil">
                                            <span style="color: red">
                                                <?php echo form_error('usia_ibuhamil'); ?>
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
												<option value="0.2">Ringan</option>
												<option value="0.3">Sedang</option>
                                                <option value="0.4">Berat</option>
												<option value="0.5">Sangat Berat</option>
                                            </select>
                                            <span style="color: red">
                                                <?php echo form_error('kategori_menu'); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./rows -->

                                <button type="submit" name="btn" class="btn btn-success" style="float: right; margin-top: 2%; margin-bottom: 3%;">Hitung</button>

                                <!-- <?php
                                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        echo '<pre>' . var_dump($_POST) . '</pre>';
                                    }
                                ?> -->

                            </div>
                            <!-- .col-lg-12 -->
                        </form>

                        <table class="table table-striped table-hover ">
                          <thead>
                            <tr>
                              <td>Tinggi Badan</td>
                              <td>Berat Badan</td>
                              <td>Usia Ibu</td>
                              <td>Usia Kehamilan</td>
                              <td>Indeks Masa Tubuh</td>
                              <td>Berat Badan Ideal</td>
                              <td>Total Energi</td>
                              <td>Kebutuhan Karbohidrat</td>
                              <td>Kebutuhan Protein</td>
                              <td>Kebutuhan Lemak</td>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach($konsultasis as $konsultasi): ?>
                                <tr>
                                    <td><?php echo $konsultasi->tinggi_badan; ?> cm</td>
                                    <td><?php echo $konsultasi->berat_badan; ?> kg</td>
                                    <td><?php echo $konsultasi->usia_ibuhamil; ?> tahun</td>
                                    <td><?php echo $konsultasi->usia_kehamilan;?> minggu</td>
                                    <td><?php echo $konsultasi->imt; ?></td> <!--digantu status ibu -->
                                    <td><?php echo $konsultasi->bbih; ?> kg</td>
                                    <td><?php echo $konsultasi->tee; ?> kalori</td>
                                    <td><?php echo $konsultasi->kebutuhan_karbohidrat; ?> gram</td>
                                    <td><?php echo $konsultasi->kebutuhan_protein; ?> gram</td>
                                    <td><?php echo $konsultasi->kebutuhan_lemak; ?> gram</td>
                                </tr>
                            <?php endforeach; ?>
                          </tbody>
                        </table>
                    </div>
                    <!-- ./card-body -->
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
