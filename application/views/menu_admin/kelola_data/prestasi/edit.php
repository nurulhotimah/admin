<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-400"><?= $title; ?></h1>
        <section class="content">
            <div class="row ">
                <div class="col-lg-8">


                    <?php foreach ($berita as $P) { ?>
                        <?php echo form_open_multipart('prestasi/update'); ?>
                        <form action="<?php echo base_url() . 'prestasi/update'; ?>" method="post">


                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama Prestasi</label>
                                <input type="hidden" name="id" class="form-control" value="<?php echo $P->id ?>">
                                <input type="text" name="nama_prestasi" class="form-control" value="<?php echo $P->nama_prestasi ?>">
                            </div>

                            <div class="form-group">
                                <label>Deskripsi Prestasi</label>
                                <input type="text" name="deskripsi" class="form-control" value="<?php echo $P->deskripsi ?>">
                            </div>

                            <div class="form-group">
                                <label>Deskripsi Prestasi</label>
                                <input type="date" name="tanggal" class="form-control" value="<?php echo $P->tanggal ?>">
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2">Foto</div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('assets/foto/prestasi/') . $P->foto ?>" class="img-thumbnail">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="foto">
                                                <label class="custom-file-label" for="image">Choose file</label>
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