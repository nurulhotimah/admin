<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-400"><?= $title; ?></h1>
        <section class="content">
            <div class="row ">
                <div class="col-lg-8">

                    <?php
                    $queryGuru = "SELECT * FROM guru";
                    $Guru = $this->db->query($queryGuru)->result_array();
                    ?>
                    <?php foreach ($Guru as $Gr) { ?>

                        <form action="<?php echo base_url() . 'guru/update'; ?>" method="post">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">NIP</label>
                                <input type="hidden" name="id" class="form-control" value="<?php echo $Gr['id']; ?>">
                                <input type="text" name="nip" class="form-control" value="<?php echo $Gr['nip']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" value="<?php echo $Gr['nama']; ?>">
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2">Gambar</div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('assets/foto/') . $Gr['foto']; ?>" class="img-thumbnail">
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

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Bidang</label>
                                <input type="text" name="bidang" class="form-control" value="<?php echo $Gr['bidang']; ?>">
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