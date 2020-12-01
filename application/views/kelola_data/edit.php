<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-500"><?= $title; ?></h1>
        <section class="content">
            <?php foreach ($berita as $B) { ?>
                <form action="<?php echo base_url() . 'berita/update'; ?>" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="hidden" name="id" class="form-control" value="<?php echo $B->id ?>">
                        <input type="text" name="judul" class="form-control" value="<?php echo $B->judul ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" value="<?php echo $B->tanggal ?>">
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">Picture</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?= base_url('assets/foto/') . $B->gambar ?>" class="img-thumbnail">
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="gambar">
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

        </section>


    </div>
    <!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->