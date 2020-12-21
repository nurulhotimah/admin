<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data2" data-flashdata2="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>


        <!-- Page Heading -->
        <!-- <h1 class="h3 mb-4 text-primary-800"><?= $title; ?></h1> -->


        <section class="content">





            <?php
            $queryGaleri = "SELECT * FROM galeri";
            $Galeri = $this->db->query($queryGaleri)->result_array();
            $i = 1;
            ?>

            <!-- looping berita -->



            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <div class="row">
                            <div class="col-md-10">
                                DATA GALERI
                                <button class="btn btn-primary btn-sm ml-3" data-toggle="modal" data-target="#exampleModal"> ++Tambah Galeri</button>
                            </div>
                            <div class="col-md-2">
                                <a href="<?= base_url('menu_utama/menu_utama/index'); ?>" class="btn btn-danger btn-sm ml-2">Lihat Web</a>
                            </div>
                        </div>


                    </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($Galeri as $G) : ?>
                                    <tr>


                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $G['judul'] ?></td>
                                        <td><?php echo $G['tanggal'] ?></td>
                                        <td><img src="<?php echo base_url(); ?>assets/foto/<?php echo $G['gambar']; ?>" width="90" height="50"></td>
                                        <td>

                                            <a href="<?php echo base_url(); ?>galeri/edit/<?= $G['id']; ?>" class="btn btn-warning btn-icon-split btn-sm">
                                                <span class="text">Edit</span>
                                            </a> |
                                            <a href="<?php echo base_url(); ?>galeri/hapus/<?= $G['id']; ?>" class="btn btn-danger btn-icon-split btn-sm tombol-hapus2">
                                                <span class="text">Hapus</span>
                                            </a>

                                        </td>



                                    </tr>
                                <?php endforeach; ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Form Tambah Galeri</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <!-- modal tambah berita -->
                        <div class="modal-body">
                            <?php echo form_open_multipart('galeri/tambah_aksi'); ?>
                            <form method="post" action="<?php echo base_url() . 'galeri/tambah_aksi'; ?>">

                                <div class="form-group">
                                    <label>judul</label>
                                    <input type="text" name="judul" class="form-control" autocomplete='off'>
                                </div>

                                <div class="form-group">
                                    <label>tanggal</label>
                                    <input type="date" name="tanggal" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label>Upload Foto</label>
                                    <input type="file" name="gambar" class="form-control">
                                </div>



                                <button type="submit" class="btn btn-primary">Tambah</button>

                                <?php echo form_close(); ?>

                        </div>

        </section>
        <!-- section content -->





    </div>
    <!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->