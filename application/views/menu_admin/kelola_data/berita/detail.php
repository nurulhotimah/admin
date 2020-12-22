<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>


        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-primary-800">Berita SMK Pelnus Serang</h1>

        <section class="content">

            <div class="card mb-3" style="max-width: 800px;">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="<?php echo base_url(); ?>assets/foto/berita/<?php echo $detail->gambar; ?>" class="card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $detail->judul ?></h5>
                            <p class="card-text"><?php echo $detail->deskripsi ?></p>
                            <p class="card-text"><small class="text-muted"><?php echo $detail->tanggal ?></small></p>
                        </div>
                    </div>
                </div>
            </div>




        </section>
        <a href="<?php echo base_url('berita/index'); ?>" class='btn btn-primary'>Kembali</a>
        <!-- section content -->





    </div>
    <!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->








<div class="content-wrapper">

</div>