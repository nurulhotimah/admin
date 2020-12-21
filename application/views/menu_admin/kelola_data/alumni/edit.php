<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <!-- <h1 class="h3 mb-4 text-gray-500"></h1> -->
        <section class="content">
            <div class="row">
                <?php
                $queryAlumni = "SELECT * FROM alumni";
                $Alumni = $this->db->query($queryAlumni)->result_array();
            
                ?>
                <div class="col-lg-8">
                    <?php foreach ($Alumni as $A) { ?>
                        <?php echo form_open_multipart('alumni/update'); ?>
                        <form action="<?php echo base_url() . 'alumni/update'; ?>" method="post">
                            <div class="form-group">
                                <label>Nama Alumni</label>
                                <input type="hidden" name="id" class="form-control" value="<?php echo $A['id'] ?>">
                                <input type="text" name="nama" class="form-control" value="<?php echo $A['nama'] ?>">
                            </div>

                            <div class="form-group">
                                <label>Tempat Bekerja</label>
                                <input type="text" name="tempat_bekerja" class="form-control" value="<?php echo $A['tempat_bekerja'] ?>">
                            </div>

                            <div class="form-group">
                                <label>Pesan dan Kesan</label>
                                <input type="text" name="pesan_kesan" class="form-control" value="<?php echo $A['pesan_kesan'] ?>">
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2">Foto</div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('assets/foto/') . $A['foto'] ?>" class="img-thumbnail">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambar" name="foto">
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