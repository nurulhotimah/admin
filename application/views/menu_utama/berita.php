<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Pelayaran Nusantara Kota Serang | Home</title>
    <link rel="shortcut icon" href="<?= base_url() ?>assets_2/img/logo.ico">

    <!-- boosttrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets_2/css/bootstrap.min.css">

    <!-- style css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets_2/css/style.css">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-7  d-none d-lg-block">
                    <p><a href="#">Alamat : JL. PELNUS NO. 7 KAMPUNG BARU BANGDES, Panancangan, Kec. Cipocok Jaya, Kota Serang Banten.</a></p>
                </div>
                <div class="col-5 contact d-none d-lg-block">
                    <i class="fa fa-phone"></i><a href="#"> (0254) 7931970</a>
                    <i class="fa fa-envelope"></i><a href="#"> smkpelnusserang@yahoo.co.id</a>
                    <i class="fa fa-phone"></i><a href="#"> 087871922271</a>
                </div>
                `
            </div>
        </div>
    </div>
    <!-- End Top-bar -->

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand"><img src="<?= base_url() ?>assets_2/img/logo.png" alt="logo" title="Logo"></a>
            <div class="judul-logo">
                <h3>SMK PELAYARAN NUSANTARA <br>KOTA SERANG</h3>
            </div>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Visi dan Misi</a>
                            <a class="dropdown-item" href="#">Sejarah Sekolah</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kategori
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Data Guru</a>
                            <a class="dropdown-item" href="#">Data Tenaga Kependidikan</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            BKK
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Lowongan Kerja</a>
                            <a class="dropdown-item" href="#">Data Alumni</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="berita.html">PPDB Tahun 2021</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="berita.html">Galery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="berita.html">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->

    <div class="container py-3">
        <?php
        $queryBerita = "SELECT * from berita limit 1 ";
        $Berita = $this->db->query($queryBerita)->result_array();

        ?>
        <div class="row mt-3">
            <?php foreach ($Berita as $B) : ?>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header img-area">
                            <img src="<?php echo base_url(); ?>assets/foto/berita/<?php echo $B['gambar']; ?>" alt="" width="100%">
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <h3 class="judul-berita"><?php echo  character_limiter($B['judul']) ?></h3>
                                <hr>
                                <p class="blockquote-footer isi-berita"><?php echo character_limiter($B['deskripsi']) ?></p>
                            </blockquote>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?php echo $B['tanggal'] ?></small>
                        </div>
                    <?php endforeach; ?>
                    </div>

                    <!-- berita lainnya -->
                    <div class="col-12 py-4">
                        <h3 class="text-dark">Berita terbaru Lainnya</h3>
                        <div class="border-top border-primary w-25"></div>
                    </div>

                    <div class="container mb-4">
                        <?php
                        $queryBerita = "SELECT * from berita LIMIT 4";
                        $Berita = $this->db->query($queryBerita)->result_array();

                        ?>
                        <div class="row py-3">
                            <?php foreach ($Berita as $B) : ?>
                                <div class="col-md-6">
                                    <div class="card-deck">
                                        <div class="card berita">
                                            <a href="berita.html">
                                                <img src="<?php echo base_url(); ?>assets/foto/berita/<?php echo $B['gambar']; ?>" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo  character_limiter($B['judul'], 20) ?></h5>
                                                    <p class="card-text isi-berita"><?php echo character_limiter($B['deskripsi'], 50) ?></p>
                                                </div>
                                                <div class="card-footer">
                                                    <small class="text-muted"><?php echo $B['tanggal'] ?></small>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <br>
                                </div>

                            <?php endforeach; ?>


                        </div>
                    </div>
                    <!-- akhir berita lainnya -->

                </div>
                <div class="col-md-3 d-none d-md-block">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url() ?>assets_2/img/kepsek.PNG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mustafa Muchtar, S.H</h5>
                            <p class="card-text">Kepala Sekolah</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="https://dapo.kemdikbud.go.id/sekolah/89A5E13361A9ADA8D514" target="_blank">Dapodik</a></li>
                            <li class="list-group-item"><a href="https://referensi.data.kemdikbud.go.id/nisn/index.php/Cindex/formcaribynama" target="_blank">Cek Nisn Siswa</a></li>
                            <li class="list-group-item"><a href="https://info.gtk.kemdikbud.go.id/" target="_blank">Info GTK</a></li>
                            <li class="list-group-item"><a href="https://siap-akm.pusmenjar.kemdikbud.go.id/login" target="_blank">AKM 2021</a></li>
                            <li class="list-group-item"><a href="https://ppdb21.smkpelnusserang.sch.id/" target="_blank">PPDB 2021</a></li>
                        </ul>
                    </div>

                    <h5 class="mt-4"> &nbspBerita Terbaru</h5>
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#">Berita terkait covid 19..</a></li>
                            <li class="list-group-item"><a href="#">Berita terkait covid 19..</a></li>
                            <li class="list-group-item"><a href="#">Berita terkait covid 19..</a></li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>


    <!-- footer -->
    <section id="#contact">
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.1180057958363!2d106.19618004990873!3d-6.114812361646213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41f5020f223dd7%3A0x58fe278450d9009f!2sSMK%20PELAYARAN%20NUSANTARA%20KOTA%20SERANG!5e0!3m2!1sid!2sid!4v1606361508321!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row my-3">
                    <div class="col-md-4 text-center">
                        <img src="<?= base_url()?>assets_2/img/logo.png" alt="" width="100px;">
                        <h5 class="my-1">SMK PELAYARAN NUSANTARA KOTA SERANG</h5>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-center my-1 contact-kami">Kontak Kami</h4>
                        <p>Jl. Panancangan, Kec. Cipocok Jaya, Kota Serang, Banten 42124</p>
                        <i class="fa fa-phone"> Telp : (0254) 7931970, 081906261187</i>
                        <i class="fa fa-envelope"> Email : smkpelnusserang@yahoo.co.id</i>
                    </div>
                    <div class="col-md-4 navigasi d-none d-md-block">
                        <h4 class="text-center my-1">Navigasi</h4>
                        <ul>
                            <li><a href="https://dapo.kemdikbud.go.id/sekolah/89A5E13361A9ADA8D514" target="_blank">Dapodik</a></li>
                            <li><a href="https://referensi.data.kemdikbud.go.id/nisn/index.php/Cindex/formcaribynama" target="_blank">Cek Nisn Siswa</a></li>
                            <li><a href="https://info.gtk.kemdikbud.go.id/" target="_blank">Info GTK</a></li>
                            <li><a href="https://siap-akm.pusmenjar.kemdikbud.go.id/login" target="_blank">AKM 2021</a></li>
                            <li><a href="https://ppdb21.smkpelnusserang.sch.id/" target="_blank">PPDB 2021</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="col-12 text-center my-4">
                    <p>Generasi Gembel Coding&copy Copyright 2020 - smk pelayaran nusantara</p>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir footer -->

    <div class="container my-2"></div>
    <!-- JS and JQUERY -->
    <script src="<?= base_url() ?>assets_2/js/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url() ?>assets_2/js/bootstrap.min.js"></script>


</body>

</html>