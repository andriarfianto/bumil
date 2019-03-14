<!DOCTYPE html>
<html lang="en">

    <head>
        <?php $this->load->view("admin/_partials/head.php") ?>
    </head>

    <body id="page-top">	

        <!-- Nyoba navbar -->
        <?php $this->load->view("admin/_partials/navbar.php") ?>

        <div id="wrapper" style="background-color: white;">

            <?php $this->load->view("admin/_partials/sidebar.php") ?>

            <div id="content-wrapper">

                <div class="container-fluid">            
                    <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

                    <!-- Menampilkan data -->
                    <div class="card mb-3">
                        <!-- <div class="card-header">
                            <a href="<?php echo site_url('admin/konsultasi'); ?>">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div> -->

                        <div class="card-header">                                                            
                            <a href="<?php echo base_url('admin/konsultasi'); ?>">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12">
                                <!-- Row untuk penjelasan -->
                                <h3><i class="fas fa-angle-double-right"></i> Riwayat Konsultasi kehamilan</h3>
                                <p>Riwayat konsultasi yang pernah anda lakukan <br>
                                    Silahkan pilih/tekan tombol <strong>Detail</strong> untuk mengetahui informasi lengkap data konsultasi <br> 
                                    beserta informasi saran makan yang dibutuhkan
                                </p>

                                <!-- Row untuk tabel riwayat dan detail-->
                                <ul>                                                             
                                    <li>
                                        <div class="row">
                                            <div class="col-md-2">Nama</div> :
                                            <div class="col-md-6"><?php echo $ibu->nama; ?></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-2">Email</div> :
                                            <div class="col-md-6"><?php echo $ibu->email; ?></div>
                                        </div>
                                    </li>
                                </ul>

                                <!-- Row untuk tabel riwayat dan detail-->
                                Daftar Riwayat Konsultasi
								<hr>
                                
                                <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Tinggi Badan</td>
                                            <td>Berat Badan</td>
                                            <td>Usia Ibu</td>
                                            <td>Usia Kehamilan</td>
                                            <td>Berat Badan Ideal</td>
                                            <td>Total Energi</td>                                            
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach ($konsultasis as $konsultasi): ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $konsultasi->tinggi_badan; ?> cm</td>
                                                <td><?php echo $konsultasi->berat_badan; ?> kg</td>
                                                <td><?php echo $konsultasi->usia_ibuhamil; ?> tahun</td>
                                                <td><?php echo $konsultasi->usia_kehamilan; ?> minggu</td>
                                                <!-- <td>Gemuk</td> -->
                                                <td><?php echo $konsultasi->bbih; ?> kg</td>
                                                <td><?php echo $konsultasi->tee; ?> kalori</td>
                                                <!-- <td>213 gram</td>
                                                <td>445 gram</td>
                                                <td>13 gram</td> -->
                                                <td><a href="<?php echo site_url('admin/konsultasi/detail/'.$konsultasi->id_konsultasi) ?>">Detail</a></td>
                                            </tr>
                                        <?php $no++; endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- ./col-lg-12 -->
                        </div>
                        <!-- ./card-body -->

                        <div class="card-footer small text-muted">
                            * required fields
                        </div>
                    </div>
                    <!-- ./card mb-3 -->                
                </div>
                <!-- /.container-fluid -->

                <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright ©
                        <?php echo SITE_NAME ." ". Date('Y') ?></span>
                    </div>
                </div>
            </footer>

            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->		

        <?php $this->load->view("ibuhamil/_partials/scrolltop.php") ?>
        <?php $this->load->view("ibuhamil/_partials/modal.php") ?>
        <?php $this->load->view("ibuhamil/_partials/js.php") ?>

    </body>

</html>
