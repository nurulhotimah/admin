<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data2" data-flashdata2="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>


        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-primary-800"><?= $title; ?></h1>

        <section class="content">

            <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Galeri</button>


            <?php
            $queryGaleri = "SELECT * FROM galeri";
            $Galeri = $this->db->query($queryGaleri)->result_array();
            $i = 1;
            ?>

            <!-- looping berita -->



            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Gambar</th>

                        <th scope="col" colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Galeri as $G) : ?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $G['judul'] ?></td>
                            <td><?php echo $G['tanggal'] ?></td>
                            <td><img src="<?php echo base_url(); ?>assets/foto/<?php echo $G['gambar']; ?>" width="90" height="50"></td>
                            <td>
                                <a href="<?php echo base_url(); ?>galeri/detail/<?= $G['id']; ?>" class="btn btn-success btn-sm ml-3"><i class="fa fa-search-plus"></i></a>
                                <a href="<?php echo base_url(); ?>galeri/edit/<?= $G['id']; ?>" class="btn btn-primary btn-sm ml-3"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo base_url(); ?>galeri/hapus/<?= $G['id']; ?>" class="btn btn-danger btn-sm ml-3 tombol-hapus2"><i class="fa fa-trash"></i></a>
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
                            <h4 class="modal-title" id="exampleModalLabel">Form Tambah Galeri</h4>
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

        </section>
        <!-- section content -->





    </div>
    <!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->