<script type='text/javascript'>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading"></div>
        <div class="masthead-heading text-uppercase">MENYEDIAKAN PILIHAN TERBAIK UNTUK ANDA</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#daftarmobil">Sewa Sekarang</a>
    </div>
</header>

<!-- daftar mobil-->
<section class="page-section" id="daftarmobil">
    <?php
        if(!empty($notif))
        {
            echo '<div class="alert alert-success">'.$notif.'</div>';
        }
    ?>    
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">DAFTAR MOBIL</h2>
        </div>
    </div>
    <?php
        if($id->status == 'APPROVED'){
            echo '<div class="row">';
                    foreach ($list_mobil as $mobil){
                        if($mobil->status == 'AVAILABLE'){
                            echo'
                        <div class="column">
                            <img src="'.base_url().'uploads/cars/'.$mobil->fotoMobil.'" width="340px" height="210px" />
                            <p></p>
                            <h5><a href="'.base_url().'Sewa_mobil/detailMobil/'.$mobil->id_mobil.'">'.$mobil->jenisMobil.'</a></h5>
                            <p>'.$mobil->hargaSewa.'</p>
                        </div>';
                    }}
            echo'</div>';
        } else {
            echo '<div class="container d-flex justify-content-center">

                    <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="'.base_url().'Profil">Lengkapi Data Diri</a>
                </div>';
        }
    ?>

    <!-- halaman-->
    <div class="column page">
        <a style="font-size:100%;" href="#1" target="_blank">1</a>
        <a style="font-size:100%;" href="#2">2</a>
        <a style="font-size:100%;" href="#3">3</a><a>></a>
        <a style="font-size:100%;" href="#!">Halaman Selanjutnya</a>
    </div>
    </div>
</section>
