<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Teman Rental Terbaik Anda!</div>
        <div class="masthead-heading text-uppercase">Senang Bekerja Sama Dengan Anda</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Info Selanjutnya</a>
    </div>
</header>
<!-- Services-->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Mengapa Memilih Kami ?</h2>
        </div>
        <div class="row text-center">
            <div class="col-md-3">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary" style="color:#AE5A5A"></i>
                    <i class="fas fa-search fa-stack-1x"></i>
                </span>
                <h5 class="my-3">Hasil pencarian yang paling komprehensif</h5>
                <p class="text-muted">Cari dan bandingkan berbagai jenis mobil dengan harga lebih murah di AmigoticsRent.</p>
            </div>
            <div class="col-md-3">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary" style="color:#AE5A5A"></i>
                    <i class="fas fa-user-shield fa-stack-1x"></i>
                </span>
                <h5 class="my-3">Jaminan transaksi aman secara online</h5>
                <p class="text-muted">AmigoticsRent memastikan semua informasi aman dalam setiap transaksi.</p>
            </div>
            <div class="col-md-3">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary" style="color:#AE5A5A"></i>
                    <i class="fas fa-cash-register fa-stack-1x"></i>
                </span>
                <h5 class="my-3">Berbagai cara pembayaran</h5>
                <p class="text-muted">Menyediakan beragam metode pembayaran yang mudah dan mudah.</p>
            </div>
            <div class="col-md-3">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary" style="color:#AE5A5A"></i>
                    <i class="fas fa-clock fa-stack-1x"></i>
                </span>
                <h5 class="my-3">24/7 pelayanan pelanggan</h5>
                <p class="text-muted">Siap membantu Anda 24/7 dan juga dalam keadaan darurat.</p>
            </div>
        </div>
    </div>
</section>

<!-- review -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    
    <section class="carousel-inner" id="review">
        <?php
            $no = 1;
            foreach ($review as $data) {
                if ($no == 1) {
                    echo 
                    '<div class="carousel-item active">
                        <div class="f">';
                } else if ($no > 3 && $no % 3 == 1){
                    echo 
                    '<div class="carousel-item">
                        <div class="f">';
                }
                echo
                    '<div class="column1">
                        <img src="assets/img/profile.webp" alt="" style="width:128px;height:128px;">
                        <p></p>
                        <h5>'.$data->nama.'</h5>
                        <p>'.$data->pelayanan.'</p><br>
                        <p>'.$data->mobil.'</p>
                    </div>';
                if($no % 3 == 0){
                    echo '</div>
                    </div>';
                }
                $no++;
            }
        ?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>
</div>

<div id="carouselMobil" class="carousel slide" data-ride="carousel">
    <!-- sewa mobil -->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">SEWA MOBIL POPULER</h2>
            </div>
            <div class="mobil_section">
                <div id="main_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                            $no = 1;
                            foreach ($mobil as $data) {
                                if ($data->totalPinjam > 2) {
                                    if ($no == 1) {
                                        echo 
                                        '<div class="carousel-item active">
                                            <div class="container">
                                                <div class="mobil_section_2">
                                                    <div class="row">';
                                    } else if ($no > 3 && $no % 3 == 1){
                                        echo 
                                        '<div class="carousel-item">
                                            <div class="container">
                                                <div class="mobil_section_2">
                                                    <div class="row">';
                                    }
                                    echo
                                        '<div class="col-lg-4 col-sm-4">
                                            <div class="box_main">
                                                <div class="mobil1"><img src="'.base_url().'uploads/cars/'.$data->fotoMobil.'" alt="" style="width:280px;height:150px;"></div>
                                                <h7 class="shirt_text">'.$data->jenisMobil.'</h7>
                                                <p class="price_text">'.$data->hargaSewa.'</p>
                                                <div class="btn_main">
                                                    <div class="seemore_bt"><a href="'.base_url().'index.php/Sewa_mobil/detailMobil/'.$data->id_mobil.'">Info Selanjutnya</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                    if($no % 3 == 0){
                                        echo '</div>
                                            </div>
                                        </div>
                                    </div>';
                                    }
                                    $no++;   
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="<?php echo base_url();?>assets/mail/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url();?>assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="<?php echo base_url();?>assets/bootstrap/js/scripts.js"></script>
    
</body>
</html>
