<!-- Carousel:Slide foto keterangan mobil yang akan disewa -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo base_url('uploads/cars/'.$details->fotoMobil) ?>" alt="First slide" height="760px">
        </div>
    </div>
</div>

<!-- Deskripsi mobil-->
<section class="page-section" id="desc">
    <div class="container_sewa">
        <div class="text-left">
            <!-- Nama Mobil -->
            <div class="text_underline">
                <h2><?php echo $details->jenisMobil?></h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column">
            <!-- Spesifikasi Mobil -->
            <h3>Informasi Mobil</h3><br>
            <h5>Rental Mobil <?php echo $details->jenisMobil?> </h5><br>
            <p><?php echo $details->jenisMobil?> yang merupakan mobil pilihan crossover, dimensi sebuah mpv dan efisiensi bahan bakar seperti layaknya sebuah city car. <br>
                <?php echo $details->spesifikasi?>
        </div>
    </div>
    <!-- Detail Penyewaan -->
    <div class="container_sewa">
        <div class="text-left">
            <div class="text_underline">
                <h2> DETAIL SEWA MOBIL</h2>
            </div>
        </div>
    </div>
    <!-- Tanggal Penyewaan -->
    <form action="<?php echo base_url()?>Pengembalian/returnCar/<?php echo $details->id_mobil?>" method="post">
        <div class="row">
            <!-- Tanggal Pengembalian -->
            <div class="column side">
                <label for="tglPegembalian">Tanggal Pengembalian </label><br>
                <input type="date" id="tglPengembalian" name="tglPengembalian" style="border: none;border-color: transparent;" readonly>
            </div>
        </div>
        <!-- Lokasi penyewa yang akan diambil kembali mobil yang telah disewakan -->
        <div class="row">
            <div class="column middle-kembali">
                
                    <label>Lokasi Pengembalian </label><br>
                    <p id="demo"></p>
                    <textarea rows="4" cols="50" class="form-control" name="lokasi" id="name" type="text" placeholder="Masukkan Alamat Anda..." required="required" data-validation-required-message="Alamat Anda Harus Diisi!"></textarea>
                    <p class="help-block text-danger"></p>
                
            </div>
        </div>
        <!-- Tagihan denda, untuk penyewa yang menyewa lebih dari batas waktu yang ditentukan -->
        <div class="container_sewa">
            <div class="text-left">
                <div class="text_underline">
                    <h2> TAGIHAN DENDA (Jika Ada)</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column side">
                
                    <label for="tagihan">Total Denda </label><br>
            </div>
            <div class="column side">
                    <input type="text" id="dateDB" value="<?php echo $rent->tgl_kembali?>" name="" style="display: none;">
                    <input type="text" id="keterlambatan" value="" name="keterlambatan" style="display: none;">
                    Rp.<input type="number" id="denda" name="denda" readonly="" style="border: none;border-color: transparent;">
            </div>
        </div>
        <!-- Warning : sebagai tata cara pembayaran denda bagi penyewa -->
        <div class="row">
            <div class="column khusus">
                <p class="warning">* Silahkan melakukan pembayaran denda ketika kami mengambil mobil yang di sewa di lokasi pengembalian yang anda berikan</p><br>
            </div>
        </div>
        <!-- Review Pelayanan yang diberikan Amigotics-Rent -->
        <div class="container_sewa">
            <div class="text-left">
                <div class="text_underline">
                    <h2> REVIEW AMIGOTICS-RENT</h2>
                </div>
            </div>
        </div>
        <!-- Review Pelayanan -->
        <div class="row">
            <div class="column middle">
                
                    <label>Review Pelayanan</label><br>
                    <textarea rows="4" cols="50" class="form-control" id="name" name="r_pelayanan" type="text" placeholder="Masukkan review pelayanan kami..." required="required" data-validation-required-message="Alamat Anda Harus Diisi!"></textarea>
                
            </div>
        </div>
        <!-- Review Mobil yang disewa -->
        <div class="row">
            <div class="column middle">
                
                    <label>Review Mobil</label><br>
                    <textarea rows="4" cols="50" class="form-control" id="name" type="text" name="r_mobil" placeholder="Masukkan review mobil kami..." required="required" data-validation-required-message="Alamat Anda Harus Diisi!"></textarea>
                
            </div>
        </div>
        <!-- button submit form pengembalian -->
        <div class="row">
            <div class="column middle">
                <button class="btn btn-primary btn-selesai" name="submit" value="submit" type="submit">Selesai</button>
            </div>
        </div>
    </form>
</section>
<script type="text/javascript">
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    today = yyyy+'-'+mm+'-'+dd;
    document.getElementById('tglPengembalian').value = today;
    var x = document.getElementById('dateDB').value;             
    if(today == x){
        document.getElementById('denda').value = 0;
        document.getElementById('keterlambatan').value = 0;
    } else {
        var temp1 = parseInt(mm);
        var temp2 = parseInt(x[5]+x[6]);
        if (temp1 < temp2) {
            document.getElementById('denda').value = 0;
            document.getElementById('keterlambatan').value = 0;

        } else if(temp1 == temp2) {
            var temp3 = parseInt(dd);
            var temp4 = parseInt(x[8]+x[9]);
            if(temp3 > temp4){
                document.getElementById('denda').value = (temp3 - temp4) * 50000;
                document.getElementById('keterlambatan').value = temp3 - temp4;
            } else {
                document.getElementById('denda').value = 0;
                document.getElementById('keterlambatan').value = 0;
            }
        } else if(temp1 > temp2){
            var temp5 = 30*(temp1-temp2);
            var temp3 = parseInt(dd) + temp5;
            var temp4 = parseInt(x[8]+x[9]);
            document.getElementById('denda').value = (temp3 - temp4) * 50000;
            document.getElementById('keterlambatan').value = temp3 - temp4;
        }
    }
</script>
