<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data3" data-flashdata3="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>




        <section class="content">




            <?php
            $queryGuru = "SELECT * FROM guru";
            $Guru = $this->db->query($queryGuru)->result_array();
            $i = 1;
            ?>

            <!-- looping berita -->


            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <div class="row">
                            <div class="col-md-10">
                                DATA GURU
                                <button class="btn btn-primary btn-sm ml-3" data-toggle="modal" data-target="#exampleModal"> ++Tambah Guru</button>
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
                                    <th scope="col">No</th>
                                    <th scope="col">NIP</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Bidang</th>
                                    <th scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIP</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Bidang</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($Guru as $Gr) : ?>
                                    <tr>


                                        <td><?php echo $i++ ?></td>

                                        <td><?php echo $Gr['nip'] ?></td>
                                        <td><?php echo $Gr['nama'] ?></td>

                                        <td><img src="<?php echo base_url(); ?>assets/foto/guru/<?php echo $Gr['foto']; ?>" width="60" height="50"></td>
                                        <td><?php echo $Gr['bidang'] ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>guru/detail/<?= $Gr['id']; ?>" class="btn btn-success btn-icon-split btn-sm ">
                                                <span class="text"><i class="fas fa-eye"></i></span>
                                            </a> |

                                            <a href="<?php echo base_url(); ?>guru/edit/<?= $Gr['id']; ?>" class="btn btn-warning btn-icon-split btn-sm">
                                                <span class="text"><i class="fas fa-edit"></i></span>
                                            </a> |
                                            <a href="<?php echo base_url(); ?>guru/hapus/<?= $Gr['id']; ?>" class="btn btn-danger btn-icon-split btn-sm tombol-hapus3">
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
                            <h4 class="modal-title" id="exampleModalLabel">Form Tambah Guru</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <!-- modal tambah berita -->
                        <div class="modal-body">
                            <?php echo form_open_multipart('guru/tambah_aksi'); ?>
                            <form method="post" action="<?php echo base_url() . 'guru/tambah_aksi'; ?>">

                                <div class="form-group">
                                    <label>NIP</label>
                                    <input type="text" name="nip" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama</label>
                                    <input type="text" name="nama" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label>Upload Foto</label>
                                    <input type="file" name="foto" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Bidang</label>
                                    <select class="form-control" name="bidang">
                                        <option>--Pilih Bidang--</option>
                                        <option>Bahasa Inggris/Inggris Maritim</option>
                                        <option>PPKn</option>
                                        <option>PJOK</option>
                                        <option>Kepsek/PPKn</option>
                                        <option>Bahasa Indonesia</option>
                                        <option>Matematika</option>
                                        <option>Produktif</option>
                                        <option>Simulasi Digital</option>
                                    </select>


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