 <!-- berita lainnya -->

 <div class="col-12 py-4">

 </div>

 <div class="container mb-4">
     <h3 class="text-dark  ">Berita terbaru Lainnya</h3>
     <div class="border-top border-primary w-25  "></div>
     <div class="row py-3">
         <?php
            $queryBerita = "SELECT * from berita LIMIT 3";
            $Berita = $this->db->query($queryBerita)->result_array();

            ?>
         <div class="row py-3">
             <?php foreach ($Berita as $B) : ?>
                 <div class="col-md-4">
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
             <!-- <div class="card berita">
                 <a href="berita.html">
                     <img src="<?php echo base_url() ?>assets/img/galery/16.jpg" class="card-img-top" alt="...">
                     <div class="card-body">
                         <h5 class="card-title">Virus Corona Tak Membatasi Belajar Taruna/I SMK Pelayaran Nusantara</h5>
                         <p class="card-text isi-berita">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     </div>
                     <div class="card-footer">
                         <small class="text-muted">Last updated 3 mins ago</small>
                     </div>
                 </a>
             </div>
         </div>
     </div>
     <div class="card-deck">
         <div class="card berita">
             <a href="berita.html">
                 <img src="<?php echo base_url() ?>assets_2/img/galery/19.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Model Akmil (Peraga SMK Pelnus Serang) 2020</h5>
                     <p class="card-text isi-berita">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                 </div>
                 <div class="card-footer">
                     <small class="text-muted">Last updated 3 mins ago</small>
                 </div>
             </a>
         </div>
         <div class="card berita">
             <a href="berita.html">
                 <img src="<?php echo base_url() ?>assets_2/img/galery/20.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Antara Corona dan Belajar, SMK Pelayaran Nusantara Kota Serang</h5>
                     <p class="card-text isi-berita">This card has supporting text below as a natural lead-in to additional content.</p>
                 </div>
                 <div class="card-footer">
                     <small class="text-muted">Last updated 3 mins ago</small>
                 </div>
             </a>
         </div>
     </div> -->
         </div>

         <script src="<?= base_url(); ?>assets/js/jquery-3.5.1.min.js"></script>
         <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
         <!-- akhir berita lainnya -->