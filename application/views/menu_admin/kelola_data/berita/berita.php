<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>


        <!-- Page Heading -->
        <!-- <h1 class="h3 mb-4 text-primary-800"><?= $title; ?></h1> -->


        <section class="content">





            <?php
            $queryBerita = "SELECT * FROM berita";
            $Berita = $this->db->query($queryBerita)->result_array();
            $i = 1;
            ?>

            <!-- looping berita -->



            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <div class="row">
                            <div class="col-md-10">
                                DATA BERITA
                                <button class="btn btn-primary btn-sm ml-3" data-toggle="modal" data-target="#exampleModal"> ++Tambah Berita</button>
                            </div>
                            <div class="col-md-2">
                                <a href="<?= base_url('menu_utama/menu_utama/index'); ?>" class="btn btn-danger btn-sm ml-2" target="_blank">Lihat Web</a>
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
                                    <th>Judul Berita</th>
                                    <th>Deskripsi Berita</th>
                                    <th>Tanggal</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Berita</th>
                                    <th>Deskripsi Berita</th>
                                    <th>Tanggal</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($Berita as $B) : ?>
                                    <tr>


                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo character_limiter($B['judul'], 20) ?></td>
                                        <td><?php echo character_limiter($B['deskripsi'], 20) ?></td>
                                        <td><?php echo $B['tanggal'] ?></td>
                                        <td><img src="<?php echo base_url(); ?>assets/foto/berita/<?php echo $B['gambar']; ?>" width="50" height="50"></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>berita/detail/<?= $B['id']; ?>" class="btn btn-success btn-icon-split btn-sm">
                                                <span class="text"><i class="fas fa-eye"></i></span>
                                            </a> |

                                            <a href="<?php echo base_url(); ?>berita/edit/<?= $B['id']; ?>" class="btn btn-warning btn-icon-split btn-sm">
                                                <span class="text"><i class="fas fa-edit"></i></span>
                                            </a> |
                                            <a href="<?php echo base_url(); ?>berita/hapus/<?= $B['id']; ?>" class="btn btn-danger btn-icon-split btn-sm tombol-hapus">
                                                <span class="text"><i class="fas fa-trash"></i></span>
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
                                    <label>Judul</label>
                                    <input type="text" name="judul" class="form-control" autocomplete='off'>
                                </div>

                                <div class="form-group">
                                    <label>Deskripsi Berita</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Tanggal</label>
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