<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data4" data-flashdata4="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>


        <!-- Page Heading -->


        <section class="content">




            <?php
            $queryEkstrakulikuler = "SELECT * FROM ekstrakulikuler";
            $Ekstrakulikuler = $this->db->query($queryEkstrakulikuler)->result_array();
            $i = 1;
            ?>

            <!-- looping berita -->



            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <div class="row">
                            <div class="col-md-10">
                                DATA EKSTRAKULIKULER
                                <button class="btn btn-primary btn-sm ml-3" data-toggle="modal" data-target="#exampleModal"> ++Tambah Ekstrakulikuler</button>
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
                                    <th>Nama Organisasi</th>
                                    <th>Pembina</th>
                                    <th>Ketua</th>
                                    <th>Logo Organisasi</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Organisasi</th>
                                    <th>Pembina</th>
                                    <th>Ketua</th>
                                    <th>Logo Organisasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($Ekstrakulikuler as $EK) : ?>
                                    <tr>


                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo character_limiter($EK['nama'], 30) ?></td>
                                        <td><?php echo character_limiter($EK['pembina'], 30) ?></td>
                                        <td><?php echo $EK['ketua'] ?></td>
                                        <td><img src="<?php echo base_url(); ?>assets/foto/ekstrakulikuler/<?php echo $EK['foto']; ?>" width="90" height="50"></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>ekstrakulikuler/detail/<?= $EK['id']; ?>" class="btn btn-success btn-icon-split btn-sm ">
                                                <span class="text"><i class="fas fa-eye"></i></span>
                                            </a> |

                                            <a href="<?php echo base_url(); ?>ekstrakulikuler/edit/<?= $EK['id']; ?>" class="btn btn-warning btn-icon-split btn-sm">
                                                <span class="text"><i class="fas fa-edit"></i></span>
                                            </a> |
                                            <a href="<?php echo base_url(); ?>ekstrakulikuler/hapus/<?= $EK['id']; ?>" class="btn btn-danger btn-icon-split btn-sm tombol-hapus4">
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
                            <h4 class="modal-title" id="exampleModalLabel">Form Tambah Ekstrakulikuler</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <!-- modal tambah berita -->
                        <div class="modal-body">
                            <?php echo form_open_multipart('ekstrakulikuler/tambah_aksi'); ?>
                            <form method="post" action="<?php echo base_url() . 'ekstrakulikuler/tambah_aksi'; ?>">

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama Organisasi</label>
                                    <input type="text" name="nama" class="form-control" autocomplete='off'>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Pembina</label>
                                    <input type="text" name="pembina" class="form-control" autocomplete='off'>
                                </div>


                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Ketua</label>
                                    <input type="text" name="ketua" class="form-control" autocomplete='off'>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Upload Foto</label>
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