<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>


        <!-- Page Heading -->
        <div class="galery">
            <div class="col-12 text-center my-4">

                <h1 class="text-dark">Galery / dokumentasi</h1>
                <div class="border-top border-primary w-25 mx-auto my-3"></div>
            </div>
            <div class="container">
                <div class="row my-3">
                    <div class="col-md-4">

                    </div>

                    <div class="col-md-4">
                        <div class="card-deck">
                            <div class="card">
                                <img src="<?php echo base_url(); ?>assets/foto/galeri/<?php echo $detail->gambar ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text"><?php echo $detail->judul ?> </p>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>

                <a href="<?php echo base_url('berita/index'); ?>" class='btn btn-primary'>Kembali</a>
            </div>

        </div>




        </section>
        <!-- section content -->





    </div>
    <!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->








<div class="content-wrapper">

</div>