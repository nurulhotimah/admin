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
            <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Berita</button>


            <?php
            $queryBerita = "SELECT * FROM berita";
            $Berita = $this->db->query($queryBerita)->result_array();
            $i = 1;
            ?>

            <!-- looping berita -->

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Gambar</th>

                        <th scope="col" colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Berita as $B) : ?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo  character_limiter($B['judul'], 15) ?></td>
                            <td><?php echo character_limiter($B['deskripsi'], 15) ?></td>
                            <td><?php echo $B['tanggal'] ?></td>
                            <td><img src="<?php echo base_url(); ?>assets/foto/<?php echo $B['gambar']; ?>" width="90" height="50"></td>
                            <td>
                                <a href="<?php echo base_url(); ?>berita/detail/<?= $B['id']; ?>" class="btn btn-success btn-sm ml-3"><i class="fa fa-search-plus"></i></a>
                                <a href="<?php echo base_url(); ?>berita/edit/<?= $B['id']; ?>" class="btn btn-primary btn-sm ml-3"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo base_url(); ?>berita/hapus/<?= $B['id']; ?>" class="btn btn-danger btn-sm ml-3 tombol-hapus"><i class="fa fa-trash"></i></a>
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
                                    <label>judul</label>
                                    <input type="text" name="judul" class="form-control" autocomplete='off'>
                                </div>

                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control" autocomplete='off'>
                                </div>

                                <div class="form-group">
                                    <label>tanggal</label>
                                    <input type="date" name="tanggal" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label>Upload Foto</label>
                                    <input type="file" name="gambar" class="form-control">
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