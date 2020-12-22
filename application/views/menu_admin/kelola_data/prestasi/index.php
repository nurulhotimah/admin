<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data5" data-flashdata5="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>




        <section class="content">




            <?php
            $queryPrestasi = "SELECT * FROM prestasi";
            $Prestasi = $this->db->query($queryPrestasi)->result_array();
            $i = 1;
            ?>

            <!-- looping berita -->


            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <div class="row">
                            <div class="col-md-10">
                                DATA PRESTASI
                                <button class="btn btn-primary btn-sm ml-3" data-toggle="modal" data-target="#exampleModal"> ++Tambah Prestasi</button>
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
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Prestasi</th>
                                    <th scope="col">Deskripsi Prestasi</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Prestasi</th>
                                    <th scope="col">Deskripsi Prestasi Prestasi</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($Prestasi as $P) : ?>
                                    <tr>


                                        <td><?php echo $i++ ?></td>

                                        <td><?php echo $P['nama_prestasi'] ?></td>
                                        <td><?php echo $P['deskripsi'] ?></td>
                                        <td><?php echo $P['tanggal'] ?></td>
                                        <td><img src="<?php echo base_url(); ?>assets/foto/prestasi/<?php echo $P['foto']; ?>" width="90" height="50"></td>

                                        <td>
                                            <a href="<?php echo base_url(); ?>prestasi/detail/<?= $P['id']; ?>" class="btn btn-success btn-sm "><i class="fas fa-eye"></i></a> |
                                            <a href="<?php echo base_url(); ?>prestasi/edit/<?= $P['id']; ?>" class="btn btn-warning btn-sm "><i class="fas fa-edit"></i></a> |
                                            <a href="<?php echo base_url(); ?>prestasi/hapus/<?= $P['id']; ?>" class="btn btn-danger btn-sm  tombol-hapus5"><i class="fas fa-trash"></i></a>
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
                            <h4 class="modal-title" id="exampleModalLabel">Edit Perestasi</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <!-- modal tambah berita -->
                        <div class="modal-body">
                            <?php echo form_open_multipart('prestasi/tambah_aksi'); ?>
                            <form method="post" action="<?php echo base_url() . 'prestasi/tambah_aksi'; ?>">

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama Prestasi</label>
                                    <input type="text" name="nama_prestasi" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Deskripsi Prestasi</label>
                                    <input type="text" name="deskripsi" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control">
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