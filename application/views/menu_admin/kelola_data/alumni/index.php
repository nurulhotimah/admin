<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>


        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-primary-800"><?= $title; ?></h1>

        <section class="content">

            <!-- button tambah -->
            <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Alumni</button>


            <?php
            $queryAlumni = "SELECT * FROM alumni";
            $Alumni = $this->db->query($queryAlumni)->result_array();
            $i = 1;
            ?>

            <!-- looping berita -->

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tempat Bekerja</th>
                        <th scope="col">Pesan dan Kesan</th>
                        <th scope="col">Foto</th>

                        <th scope="col" colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Alumni as $A) : ?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $A['nama'] ?></td>
                            <td><?php echo $A['tempat_bekerja'] ?></td>
                            <td><?php echo  character_limiter($A['pesan_kesan'], 3) ?></td>
                            <td><img src="<?php echo base_url(); ?>assets/foto/<?php echo $A['foto']; ?>" width="90" height="50"></td>
                            <td>
                                <a href="<?php echo base_url(); ?>alumni/detail/<?= $A['id']; ?>" class="btn btn-success btn-sm ml-3"><i class="fa fa-search-plus"></i></a>
                                <a href="<?php echo base_url(); ?>alumni/edit/<?= $A['id']; ?>" class="btn btn-primary btn-sm ml-3"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo base_url(); ?>alumni/hapus/<?= $A['id']; ?>" class="btn btn-danger btn-sm ml-3 tombol-hapus"><i class="fa fa-trash"></i></a>
                            </td>

                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>


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

                        <!-- modal tambah berita -->
                        <div class="modal-body">
                            <?php echo form_open_multipart('alumni/tambah_aksi'); ?>
                            <form method="post" action="<?php echo base_url() . 'alumni/tambah_aksi'; ?>">

                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" autocomplete='off'>
                                </div>

                                <div class="form-group">
                                    <label>Tempat Bekerja</label>
                                    <input type="text" name="tempat_bekerja" class="form-control">
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
                        <!-- akhir modal -->

        </section>
        <!-- section content -->





    </div>
    <!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->