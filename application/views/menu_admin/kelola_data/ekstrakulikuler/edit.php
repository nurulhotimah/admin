<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-500"><?= $title; ?></h1>
        <section class="content">
            <div class="row">
                <div class="col-lg-8">

                    <?php foreach ($berita as $Ekstra) { ?>
                        <?php echo form_open_multipart('ekstrakulikuler/update'); ?>
                        <form action="<?php echo base_url() . 'ekstrakulikuler/update'; ?>" method="post">
                            <div class="form-group">
                                <label>Nama Organisasi</label>
                                <input type="hidden" name="id" class="form-control" value="<?php echo $Ekstra->id ?>">
                                <input type="text" name="nama" class="form-control" value="<?php echo $Ekstra->nama ?>">
                            </div>

                            <div class="form-group">
                                <label>Pembina</label>
                                <input type="text" name="pembina" class="form-control" value="<?php echo $Ekstra->pembina ?>">
                            </div>

                            <div class="form-group">
                                <label>Ketua</label>
                                <input type="text" name="ketua" class="form-control" value="<?php echo $Ekstra->ketua ?>">
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-2">Foto Organisasi</div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('assets/foto/ekstrakulikuler/') . $Ekstra->foto ?>" class="img-thumbnail">
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