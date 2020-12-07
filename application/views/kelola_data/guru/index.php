<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata3="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>


        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-primary-800"><?= $title; ?></h1>
        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Guru</button>

        <!-- query berita -->
        <?php
        $queryGuru = "SELECT * FROM guru ";
        $Guru = $this->db->query($queryGuru)->result_array();
        ?>

        <!-- looping berita -->

        <?php foreach ($Guru as $G) : ?>



            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>



        <?php endforeach ?>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Form Tambah Guru</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- modal tambah berita -->
                    <div class="modal-body">
                        <?php echo form_open_multipart('guru/tambah_aksi'); ?>
                        <form method="post" action="<?php echo base_url() . 'berita/tambah_aksi'; ?>">

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Foto</label>
                                <input type="file" name="tanggal" class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlInput1">Bidang</label>
                                <input type="text" name="bidang" class="form-control">
                            </div>



                            <button type="submit" class="btn btn-primary">Tambah</button>

                            <?php echo form_close(); ?>

                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        </div>