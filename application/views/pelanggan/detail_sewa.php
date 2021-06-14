<!-- Carousel : Slide Foto Keterangan Mobil yang akan disewa  -->
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
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url('assets/img/spec_1.jpg') ?>" alt="Second slide" height="760px">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url('assets/img/spec_2.jpg') ?>" alt="Third slide" height="760px">
        </div>
    </div>
    <!-- Untuk menggeser foto ke slide berikutnya maupun sebelumnya  -->
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Descripsi mobil-->
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
            <h5>Rental Mobil <?php echo $details->jenisMobil ?> </h5><br>
            <p><?php echo $details->jenisMobil.' '.$details->spesifikasi?></p><br>
            <p>* Gambar unit yang diaplikasi hanya ilustrasi, untuk real picture bisa hubungi customer service kami.</p>
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
    <!-- tanggal penyewaan -->
    <form action="<?php echo base_url();?>Sewa_mobil/rent" method="post" id="rentCar">
        <input type="number" name="idMobil" value="<?php echo $this->uri->segment(3)?>" style="display: none;">
        <div class="row">
            <div class="column side">
                <label for="tglPenyewaan">Tanggal Penyewaan </label><br>
                <input type="date" id="tglPenyewaan" name="tglPenyewaan" onchange="getHari()">
            </div>
            <!-- tanggal pengembalian -->
            <div class="column side">
                <label for="tglPegembalian">Tanggal Pengembalian </label><br>
                <input type="date" id="tglPengembalian" name="tglPengembalian" onchange="getHari()">
            </div>
        </div>
        <!-- Lokasi Penyewa yang akan diantarkan mobil yang akan disewakan -->
        <div class="row">
            <div class="column middle">
                <label>Lokasi Penyewa </label><br>
                <textarea rows="4" cols="50" class="form-control" name="alamat" id="alamat" type="text" placeholder="Masukkan Alamat Anda..." required="required" data-validation-required-message="Alamat Anda Harus Diisi!"></textarea>
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <!-- Waktu penyewaan, atau waktu dimulainya penyewaan -->
        <div class="row">
            <div class="column side">
                <label for="appt">Waktu Penyewaan</label><br>
                <input type="time" id="appt" name="waktu">
            </div>
            <div class="column side">
                <label for="hari">Total Hari</label><br>
                <input type="number" min="0" name="hari" onchange="getHari()" id="hari" readonly style="border: none;border-color: transparent;"> Hari
                <script type="text/javascript">
                    var today = new Date();
                    var dd = String(today.getDate()).padStart(2, '0');
                    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                    var yyyy = today.getFullYear();
                    today = yyyy+'-'+mm+'-'+dd;
                    document.getElementById('tglPenyewaan').min = today;
                    document.getElementById('tglPenyewaan').max = yyyy+"-12-31";
                    document.getElementById('tglPengembalian').max = yyyy+"-12-31";
                    function getHari(){
                        var date1 = document.getElementById('tglPenyewaan').value;
                        document.getElementById('tglPengembalian').min = date1;
                        var date2 = document.getElementById('tglPengembalian').value;
                        if (date1[5] == date2[5]){
                            var i = parseInt(date2[6]) - parseInt(date1[6]);
                        } else {
                            var i = parseInt(date2[5]+date2[6]) - parseInt(date1[6]);
                        }                    
                        var j = 0;
                        for (var k = 0; k < i; k++){
                            j = j + 30;
                        }
                        date1 = date1[8] + date1[9];
                        date2 = date2[8] + date2[9];
                        var date = (parseInt(date2)+j) - parseInt(date1);
                        var x = document.getElementById('hari').value = date;
                        // document.getElementById('optionHari').innerHTML = x;
                        var y = <?php echo $details->hargaSewa;?>;
                        document.getElementById('totalharga').innerHTML = "Total Harga ("+date+" Hari)";
                        document.getElementById('total').value = x * y;
                    }
                    document.getElementById('hari').value = date;
                </script>
            </div>
        </div>
        <!-- Tagihan Penyewaan, atau sejumlah uang yang akan dibayar oleh penyewa -->
        <div class="container_tagih">
            <div class="text-left">
                <div class="text_underline">
                    <h2> TAGIHAN PENYEWAAN</h2>
                </div>
            </div>
        </div>
        <!-- Total harga, disini akan dikalkulasikan berdasarkan durasi penyewaan yang dipilih dan harga sewa mobil perhari -->
        <div class="row">
            <div class="column">
                    <label for="tagihan" id="totalharga">Total Harga (... Hari)</label><br>
            </div>
            <div class="column">
                    Rp.<input style="border: none;border-color: transparent;" type="number" min="0" name="total" id="total" readonly> <br>
            </div>
        </div>
        <!-- Modal Pembayaran -->
        <div class="container">
            <div class="row">
                <div class="col-sm-1">
                    <!-- Button Pemicu Modal Pembayaran -->
                    <a class="btn btn-primary btn-bayar" data-toggle="modal" data-target="#bayarModal">Pembayaran</a>
                </div>
                <div class="modal fade bayar" id="bayarModal" tabindex="-1" role="dialog" aria-labelledby="bayarlabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <!-- Judul Modal yang dibuka : Pembayaran -->
                                <h5 class="modal-title" id="bayarModal">Pembayaran</h5>
                                <!-- Button Close Modal -->
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <!-- Isi Konten Modal Untuk Modal Pembayaran -->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="mx-auto">
                                        <div class="card-modal">
                                            <div class="card-header">
                                                <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                                    <!-- Pilihan Pembayaran ada 2 yaitu transfer bank atau kredit -->
                                                    <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                                        <li class="nav-item"> <a data-toggle="tab" href="#bank-transfer" role="tab" class="nav-link active "> <i class="fas fa-university mr-2"></i> Bank Transfer
                                                            </a>
                                                        </li>
                                                        <li class="nav-item"> <a data-toggle="tab" href="#credit-transfer" role="tab" class="nav-link "> <i class="fas fa-credit-card mr-2"></i>
                                                                Kredit </a> </li>
                                                    </ul>
                                                </div> <!-- Selesai -->
                                            </div>
                                            <!-- Konten Bank-Transfer -->
                                            <div class="tab-content">
                                                <!-- Pembuatan Form Bank - Transfer -->
                                                <div id="bank-transfer" class="tab-pane active pt-3" role="tabpanel">
                                                        <div class="form-group"> <label for="nama-rekening">
                                                                <h6>Nama Rekening</h6>
                                                            </label> <input type="text" name="nama-rekening" placeholder="Masukkan Nama Rekening..." required class="form-control "> </div>
                                                        <div class="form-group"> <label for="nomor-rekening">
                                                                <h6>Nomor Rekening</h6>
                                                            </label>
                                                            <div class="input-group"> <input type="number" name="nomor-rekening" min="0" placeholder="Masukkan Nomor Rekening..." class="form-control " required>
                                                                <div class="input-group-append"> <span class="input-group-text text-muted"><i class="fab fa-cc-mastercard mx-1"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <div class="form-group"> <label><span class="hidden-xs">
                                                                            <h6>Masa Berakhir</h6>
                                                                        </span></label>
                                                                    <div class="input-group"> <input type="number" min="1" max="12" placeholder="MM" name="MM" class="form-control" required> <input type="number" min="0" placeholder="YY" name="YY" class="form-control" required> </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group mb-4"> <label data-toggle="tooltip" title="Tiga Kode Digit CV dibelakang kartu anda">
                                                                        <h6>CVV <i class="fa fa-question-circle d-inline"></i>
                                                                        </h6>
                                                                    </label> <input type="number" name="CVV" required class="form-control" min="0" max="999"> </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer Modal, disini berupa button untuk melakukan konfirmasi pembayaran yaitu di moda berikutnya -->
                            <div class="modal-footer">
                                <input type="submit" name="submit" value="Konfirmasi Pembayaran" form="rentCar" class="btn btn-primary btn-block shadow-sm" >
                            </div>
                            <!-- <script type="text/javascript">
                                function formSubmit(){
                                    document.getElementById('rentCar').submit();
                                }
                            </script> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
