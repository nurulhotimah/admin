<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data4" data-flashdata4="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>


        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-primary-800"><?= $title; ?></h1>

        <section class="content">

            <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Ekstrakulikuler</button>


            <?php
            $queryEkstrakulikuler = "SELECT * FROM ekstrakulikuler";
            $Ekstrakulikuler = $this->db->query($queryEkstrakulikuler)->result_array();
            $i = 1;
            ?>

            <!-- looping berita -->



            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Organisasi</th>
                        <th scope="col">Pembina</th>
                        <th scope="col">Ketua</th>
                        <th scope="col">Foto</th>


                        <th scope="col" colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Ekstrakulikuler as $Ekstra) : ?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $Ekstra['nama'] ?></td>
                            <td><?php echo $Ekstra['pembina'] ?></td>
                            <td><?php echo $Ekstra['ketua'] ?></td>
                            <td><img src="<?php echo base_url(); ?>assets/foto/<?php echo $Ekstra['foto']; ?>" width="90" height="50"></td>
                            <td>
                                <a href="<?php echo base_url(); ?>ekstrakulikuler/detail/<?= $Ekstra['id']; ?>" class="btn btn-success btn-sm ml-3"><i class="fa fa-search-plus"></i></a>
                                <a href="<?php echo base_url(); ?>ekstrakulikuler/edit/<?= $Ekstra['id']; ?>" class="btn btn-primary btn-sm ml-3"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo base_url(); ?>ekstrakulikuler/hapus/<?= $Ekstra['id']; ?>" class="btn btn-danger btn-sm ml-3 tombol-hapus4"><i class="fa fa-trash"></i></a>
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