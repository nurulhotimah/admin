<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>


        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-primary-500"><?= $title; ?></h1>

        <section class="content">
            <table class="table">
                <?php

                ?>
                <tr>
                    <th>Id</th>
                    <td><?php echo $detail->id ?></td>
                </tr>
                <tr>
                    <th>Judul</th>
                    <td><?php echo $detail->nama ?></td>
                </tr>
                <tr>
                    <th>Tanggal</th>
                    <td><?php echo $detail->tempat_bekerja ?></td>
                </tr>
                <tr>
                    <th>Pesan dan Kesan</th>
                    <td><?php echo $detail->pesan_kesan ?></td>
                </tr>


                <tr>
                    <td>
                        <img src="<?php echo base_url(); ?>assets/foto/<?php echo $detail->foto; ?>" width="90" height="100">
                    </td>
                    <td></td>
                </tr>
            </table>

            <a href="<?php echo base_url('berita/index'); ?>" class='btn btn-primary'>Kembali</a>

        </section>
        <!-- section content -->





    </div>
    <!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->








<div class="content-wrapper">

</div>