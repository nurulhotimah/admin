<div class="row">
    <div class="col-md-4">
        <div class="card mb-5">
            <img src="<?php echo base_url(); ?>assets/foto/<?php echo ($B['gambar']); ?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?= ($B['judul']); ?></h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted"><?= ($B['tanggal']); ?></small>
                <a href="<?php echo base_url(); ?>berita/edit/<?= $B['id']; ?>" class="btn btn-primary btn-sm ml-5"><i class="fa fa-edit"></i>

                </a>
                <a href="<?php echo base_url(); ?>berita/hapus/<?= $B['id']; ?>" class="btn btn-danger btn-sm ml-5 tombol-hapus"><i class="fa fa-trash"></i>

                </a>
            </div>

        </div>
    </div>


</div>