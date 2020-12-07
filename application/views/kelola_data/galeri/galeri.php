<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">


        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-primary-800"><?= $title; ?></h1>
        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Galeri</button>
        <div class="flash-data2" data-flashdata2="<?= $this->session->flashdata('flash'); ?>"></div>
        <!-- query berita -->
        <?php
        $queryGaleri = "SELECT * FROM galeri";
        $Galeri = $this->db->query($queryGaleri)->result_array();
        ?>

        <!-- looping berita -->

        <?php foreach ($Galeri as $G) : ?>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-5">
                        <div class="row">
                            <div class="col-md-8"></div>
                            <div class="col-md-4">
                                <a href="" class="btn btn-circle ml-5" data-toggle="modal" data-target="#staticBackdrop">...</a>
                            </div>





                        </div>
                        <img src="<?php echo base_url(); ?>assets/foto/<?php echo ($G['gambar']); ?>" class="card-img-top">

                        <div class="card-body">
                            <h5 class="card-title"><?= ($G['judul']); ?></h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?= ($G['tanggal']); ?></small>
                        </div>

                    </div>
                </div>


            </div>


        <?php endforeach ?>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Form Tambah Berita</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- modal tambah berita -->
                    <div class="modal-body">
                        <?php echo form_open_multipart('galeri/tambah_aksi'); ?>
                        <form method="post" action="<?php echo base_url() . 'galeri/tambah_aksi'; ?>">

                            <div class="form-group">
                                <label for="exampleFormControlInput1">judul</label>
                                <input type="text" name="judul" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">tanggal</label>
                                <input type="date" name="tanggal" class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlInput1">Upload Foto</label>
                                <input type="file" name="gambar" class="form-control">
                            </div>



                            <button type="submit" class="btn btn-primary">Tambah</button>

                            <?php echo form_close(); ?>

                    </div>
                    <!-- akhir modal tambah -->



                    <!-- Modal edit dan hapus-->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Aksi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-footer">
                                    <a href="">
                                        <?php echo anchor('galeri/edit_galeri/' . $G['id'], '<div class="btn btn-primary btn-sm ml-5"><i class="fa fa-edit"></i></div>') ?>
                                    </a>
                                    </a>
                                    <a href="<?php echo base_url(); ?>galeri/hapus/<?= $G['id']; ?>" class="btn btn-danger btn-sm ml-5 tombol-hapus2"><i class="fa fa-trash"></i>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- akhir modal edit dan hapus -->


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        </div>
    </div>