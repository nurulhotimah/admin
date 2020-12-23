<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data6" data-flashdata6="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>


        <!-- Page Heading -->
        <!-- <h1 class="h3 mb-4 text-primary-800"><?= $title; ?></h1> -->


        <section class="content">





            <?php
            $queryAlumni = "SELECT * FROM alumni";
            $Alumni = $this->db->query($queryAlumni)->result_array();
            $i = 1;
            ?>

            <!-- looping berita -->



            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <div class="row">
                            <div class="col-md-10">
                                DATA Alumni
                                <button class="btn btn-primary btn-sm ml-3" data-toggle="modal" data-target="#exampleModal"> ++Tambah Alumni</button>
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
                                    <th>Nama</th>
                                    <th>Tempat Bekerja</th>
                                    <th>Pesan dan Kesan</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tempat Bekerja</th>
                                    <th>Pesan dan Kesan</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($Alumni as $A) : ?>
                                    <tr>


                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo character_limiter($A['nama'], 20) ?></td>
                                        <td><?php echo character_limiter($A['tempat_bekerja'], 20) ?></td>
                                        <td><?php echo  character_limiter($A['pesan_kesan'], 20) ?></td>
                                        <td><img src="<?php echo base_url(); ?>assets/foto/alumni/<?php echo $A['foto']; ?>" width="90" height="50"></td>
                                        <td>

                                            <a href="<?php echo base_url(); ?>alumni/detail/<?= $A['id']; ?>" class="btn btn-success btn-icon-split btn-sm ">
                                                <span class="text"><i class="fas fa-eye text-dark"></i></span>
                                            </a> |

                                            <a href="<?php echo base_url(); ?>alumni/edit/<?= $A['id']; ?>" class="btn btn-warning btn-icon-split btn-sm">
                                                <span class="text"><i class="fas fa-edit"></i></span>
                                            </a> |
                                            <a href="<?php echo base_url(); ?>alumni/hapus/<?= $A['id']; ?>" class="btn btn-danger btn-icon-split btn-sm tombol-hapus6">
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
                            <h4 class="modal-title" id="exampleModalLabel">Form Tambah Alumni</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <!-- modal tambah alumni -->
                        <div class="modal-body">
                            <?php echo form_open_multipart('alumni/tambah_aksi'); ?>
                            <form method="post" action="<?php echo base_url() . 'alumni/tambah_aksi'; ?>">

                                <div class="form-group">
                                    <label>Nama Alumni</label>
                                    <input type="text" name="nama" class="form-control" autocomplete='off'>
                                </div>

                                <div class="form-group">
                                    <label>Tempat Bekerja</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tempat_bekerja"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Pesan dan Kesan</label>
                                    <input type="text" name="pesan_kesan" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label>Upload Foto</label>
                                    <input type="file" name="foto" class="form-control">
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