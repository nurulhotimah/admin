<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>


        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-primary-800"><?= $title; ?></h1>
        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Berita</button>



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
                <?php foreach ($Berita as $B) : ?>
                    <tr>
                        <td><?php echo $B->id ?></td>
                        <td><?php echo $B->judul ?></td>
                        <td><?php echo $B->tanggal ?></td>
                        <td><?php echo $B->gambar ?></td>

                        <td><?php echo anchor('berita/detail/' . $B->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                        <td onclick="javascript:return confirm('anda yakin ingin menghapusnya?')"><?php echo anchor('berita/hapus/' . $B->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                        <td><?php echo anchor('berita/edit/' . $B->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
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