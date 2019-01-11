<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view("ibuhamil/_partials/head.php") ?>

</head>

<body id="page-top">

    <?php $this->load->view("ibuhamil/_partials/navbar.php") ?>

    <div id="wrapper">

        <!-- <?php //echo $this->load->view("ibuhamil/_partials/sidebar"); ?> -->

        <div id="content-wrapper">

            <div class="container-fluid">

                <?php $this->load->view("ibuhamil/_partials/breadcrumb.php") ?>

                <!-- Notifikasi data berhasil di simpan -->
                <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
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

                        <table class="table table-striped table-hover ">
                          <thead>
                            <tr>
                              <td>Tinggi Badan</td>
                              <td>Berat Badan</td>
                              <td>Usia Ibu</td>
                              <td>Usia Kehamilan</td>
                              <!-- <td>Indeks Masa Tubuh</td> -->
                              <td>Berat Badan Ideal</td>
                              <td>Total Energi</td>
                              <td>Kebutuhan Karbohidrat</td>
                              <td>Kebutuhan Protein</td>
                              <td>Kebutuhan Lemak</td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td><?php echo $hasil->tinggi_badan; ?> cm</td>
                                <td><?php echo $hasil->berat_badan; ?> kg</td>
                                <td><?php echo $hasil->usia_ibuhamil; ?> tahun</td>
                                <td><?php echo $hasil->usia_kehamilan;?> minggu</td>
                                <!-- <td><?php echo $hasil->imt; ?></td> digantu status ibu -->
                                <td><?php echo $hasil->bbih; ?> kg</td>
                                <td><?php echo $hasil->tee; ?> kalori</td>
                                <td><?php echo $hasil->kebutuhan_karbohidrat; ?> gram</td>
                                <td><?php echo $hasil->kebutuhan_protein; ?> gram</td>
                                <td><?php echo $hasil->kebutuhan_lemak; ?> gram</td>
                            </tr>
                          </tbody>
                        </table>

                        <h4>Saran Makanan</h4>

                        <!-- data list makanan -->

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
