
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>
<!-- <script src="assets/js/bayar-konfirmasi.js" type="text/javascript"></script> -->
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="<?php echo base_url();?>assets/mail/jqBootstrapValidation.js"></script>
<script src="<?php echo base_url();?>assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="<?php echo base_url();?>assets/bootstrap/js/scripts.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bayar-konfirmasi.js"></script>
<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <?php
            if(!empty($success)){
                echo '<div class="alert alert-success">'.$success.'</div>';
            }
        ?>
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Kontak Kami</h2>
        </div>
        <form action="<?php echo base_url()?>Beranda/sendMessage/<?php echo $id->id_user?>" id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="name" name="name" type="text" placeholder="Masukkan Nama Anda..." required="required" data-validation-required-message="Nama Anda Harus Diisi!" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" name="email" type="email" placeholder="Masukkan Email Anda.." required="required" data-validation-required-message="Email Anda Harus Diisi!" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group mb-md-0">
                        <input class="form-control" id="phone" name="phone" type="tel" placeholder="Masukkan Nomor Telepon Anda.." required="required" data-validation-required-message="Nomor Telepon Anda Harus Diisi!" />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea class="form-control" id="message" name="message" placeholder="Tulis Pesanmu Disini" required="required" data-validation-required-message="Pesan Anda Harus Terisi!"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <button type="submit" value="submit" name="submit" class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Kirim Pesan</button>
            </div>
        </form>
    </div>
</section>
<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-left">Copyright © Telkom/AmigoticsRent.com</div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 text-lg-right">
                <a class="mr-3" href="#!">Syarat Ketentuan</a>
            </div>
        </div>
    </div>
</footer>
<!-- </body>
</html> -->
