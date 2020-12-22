<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-500">Edit Data Guru</h1>
        <!-- <?php
                $queryGuru = "SELECT * FROM guru";
                $Guru = $this->db->query($queryGuru)->result_array();

                ?> -->
        <section class="content">
            <div class="row">
                <div class="col-lg-8">
                    <?php foreach ($Guru as $Gr) { ?>
                        <?php echo form_open_multipart('guru/update'); ?>
                        <form action="<?php echo base_url() . 'guru/update'; ?>" method="post">
                            <div class="form-group">
                                <label>NIP</label>
                                <input type="hidden" name="id" class="form-control" value="<?php echo $Gr['id'] ?>">
                                <input type="text" name="nip" class="form-control" value="<?php echo $Gr['nip'] ?>">
                            </div>

                            <div class="form-group">
                                <label>Nama Guru</label>
                                <input type="text" name="deskripsi" class="form-control" value="<?php echo $Gr['nama'] ?>">
                            </div>

                            <div class="form-group">
                                <label>Bidang</label>
                                <input type="text" name="bidang" class="form-control" value="<?php echo $Gr['bidang'] ?>">
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2">Gambar</div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('assets/foto/guru/') . $Gr['foto'] ?>" class="img-thumbnail">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                                <label class="custom-file-label" for="gambar">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <button type="reset" class="btn btn-danger">Reset</button>
                            <button type="submit" class="btn btn-primary">Ubah</button>

                        </form>
                    <?php } ?>
                </div>
            </div>


        </section>


    </div>
    <!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->