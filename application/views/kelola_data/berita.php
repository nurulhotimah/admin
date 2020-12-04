<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>


        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-primary-800"><?= $title; ?></h1>
        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Berita</button>

        <!-- query berita -->
        <?php
        $queryBerita = "SELECT * FROM berita";
        $Berita = $this->db->query($queryBerita)->result_array();
        ?>

        <!-- looping berita -->

        <?php foreach ($Berita as $B) : ?>
            <section id="berita">
                <div class="container">

                    <div class="section-body">
                        <div class="row">
                            <div class="col-md">
                                <div class="section-thumbnail">
                                    <a href=""><img src="assets/image/santunan.jpg" alt=""></a>
                                    <div class="tanggal">
                                        <span class="tgl">14</span>
                                        <span class="tgl-2">Okt, 2020</span>
                                    </div>
                                </div>

                                <div class="section-content">
                                    <a href="">
                                        <h3>SMK Berbagi</h3>
                                    </a>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, incidunt.
                                        Incidunt laborum animi odio beatae velit expedita voluptates
                                        neque vitae harum qui esse, repellat cupiditate ut at totam eum <a href="" class="more">[..]</a>
                                    </p>
                                </div>
                                <div class="section-meta">
                                    <a href="">Kegiatan</a>
                                    <a href=""><i class="fas fa-user"></i>Admin</a>
                                </div>
                            </div>


                            <div class="tombol-selengkapnya">
                                <a href="#" class="btn btn-more">Lihat Berita Lainnya Lainnya</a>
                            </div>
                        </div>
                    </div>
                </div><!-- container -->
            </section>
            <!-- <div class="row">
                <div class="col-md-4">
                    <div class="card mb-5">
                        <img src="<?php echo base_url(); ?>assets/foto/<?php echo ($B['gambar']); ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?= ($B['judul']); ?></h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?= ($B['tanggal']); ?></small>
                            <a href="<?php echo base_url(); ?>berita/edit/<?= $B['id']; ?>" class="btn btn-primary btn-sm ml-5"><i class="fa fa-edit"></i>

                            </a>
                            <a href="<?php echo base_url(); ?>berita/hapus/<?= $B['id']; ?>" class="btn btn-danger btn-sm ml-5 tombol-hapus"><i class="fa fa-trash"></i>

                            </a>
                        </div>

                    </div>
                </div>


            </div> -->


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
                        <?php echo form_open_multipart('berita/tambah_aksi'); ?>
                        <form method="post" action="<?php echo base_url() . 'berita/tambah_aksi'; ?>">

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


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        </div>