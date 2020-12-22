<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-500">Edit Slider</h1>
        <section class="content">
            <div class="row">
                <div class="col-lg-8">
                    <?php foreach ($berita as $C) { ?>
                        <?php echo form_open_multipart('berita/update'); ?>
                        <form action="<?php echo base_url() . 'berita/update'; ?>" method="post">
                            <div class="form-group">
                                <label>Title 1</label>
                                <input type="hidden" name="id" class="form-control" value="<?php echo $C->id ?>">
                                <input type="text" name="title_1" class="form-control" value="<?php echo $C->title_1 ?>">
                            </div>

                            <div class="form-group">
                                <label>Title 2</label>
                                <input type="text" name="title_2" class="form-control" value="<?php echo $C->title_2 ?>">
                            </div>

                            <div class="form-group">
                                <label>Button</label>
                                <input type="text" name="button" class="form-control" value="<?php echo $C->button ?>">
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2">Gambar</div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('assets/foto/carousel/') . $C->image ?>" class="img-thumbnail">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambar" name="image">
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