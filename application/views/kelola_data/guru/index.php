<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data3" data-flashdata3="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>


        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-primary-800"><?= $title; ?></h1>

        <section class="content">

            <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Guru</button>


            <?php
            $queryGuru = "SELECT * FROM guru";
            $Guru = $this->db->query($queryGuru)->result_array();
            $i = 1;
            ?>

            <!-- looping berita -->



            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Bidang</th>


                        <th scope="col" colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Guru as $Gr) : ?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $Gr['nip'] ?></td>
                            <td><?php echo $Gr['nama'] ?></td>

                            <td><img src="<?php echo base_url(); ?>assets/foto/<?php echo $Gr['foto']; ?>" width="90" height="50"></td>
                            <td><?php echo $Gr['bidang'] ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>guru/detail/<?= $Gr['id']; ?>" class="btn btn-success btn-sm ml-3"><i class="fa fa-search-plus"></i></a>
                                <a href="<?php echo base_url(); ?>guru/edit/<?= $Gr['id']; ?>" class="btn btn-primary btn-sm ml-3"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo base_url(); ?>guru/hapus/<?= $Gr['id']; ?>" class="btn btn-danger btn-sm ml-3 tombol-hapus3"><i class="fa fa-trash"></i></a>
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
                                    <label for="exampleFormControlInput1">NIP</label>
                                    <input type="text" name="nip" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama</label>
                                    <input type="text" name="nama" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Upload Foto</label>
                                    <input type="file" name="foto" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Bidang</label>
                                    <input type="text" name="bidang" class="form-control">
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