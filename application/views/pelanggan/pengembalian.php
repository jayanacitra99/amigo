<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Terima Kasih</div>
        <div class="masthead-heading text-uppercase">Saatnya Untuk Pulang</div>
    </div>
</header>

<!-- pengembalian-->
<section class="page-section" id="pengembalian"> <!--section pengembalian-->
    <?php    
        if(!empty($notif)){
            echo '<div class="alert alert-success">'.$notif.'</div>';
        }
    ?>
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">PENGEMBALIAN</h2>
        </div>
    </div>
    <?php
        $no = 0;
        foreach ($return as $data) {
            if ($data->statusRent == 'WAITING') {
                echo 
                '<div class="row">
                    <div class="column">
                        <img src="'.base_url().'uploads/cars/'.$data->fotoMobil.'" alt="" style="width:350px;height:210px;"><!-- menampilkan image/gambar dari mobil yang disewa-->
                    </div>
                    <div class="column middle"> <!-- mendeskripsikan nama mobil dan tengat waktu sesuai dengan peminjaman sewa mobil oleh user-->
                        <p style="font-size:130%;" style="text-align:left;"> Nama Mobil : '.$data->jenisMobil.'.</p> 
                        <p style="font-size:130%;" style="text-align:left;"> Tengat Waktu : '.$data->tgl_kembali.'</p>
                    </div>
                    <div class="column right">
                        <a class="btn btn-primary" href="'.base_url().'Pengembalian/detailKembali/'.$data->id_mobil.'">Konfirmasi Pengembalian</a>
                    </div>
                    <p>* Silahkan lakukan segera konfirmasi pengembalian ketika tenggat waktu telah habis.<br><!--berisi note untuk user-->
                        Jika ingin menambahkan hari penyewaan silahkan konfirmasi ke Customer Service kami dalam kurung waktu 24 jam ketika tenggat waktu telah habis.<br>
                        Jika dalam kurung waktu tersebut tidak ada konfirmasi dari penyewa. Maka akan kami lanjutkan ke pihak berwajib.</p>
                </div>';
                $no++;
            }
        }
        if ($no == 0) {
            echo '<div class="container d-flex justify-content-center">
                    <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="'.base_url().'Sewa_Mobil">Sewa Sekarang</a>
                </div>';
        }
    ?>
</section>
