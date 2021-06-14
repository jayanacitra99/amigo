<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <h1 style="text-align:left;">Hello</h1>
        <p style="text-align:left; font-size:155%; font-family:Lucida Sans;">Ini adalah Halaman Profil anda. Anda bisa memasukkan yang dibutuhkan dalam proses transaksi penyewaan mobil anda</p>
    </div>
    <div class="column left">
        <a class="btn btn-primary" href="#informasipengguna">Edit Profil</a>
    </div>
</header>

<!-- Form Informasi Pengguna-->
<section class="page-section" id="informasipengguna">
    <div class="container">
        <div class="text-left">
            <h2 class="section-heading text-uppercase">INFORMASI PENGGUNA</h2>
            <?php
                if($id->status == 'PENDING'){
                    echo '<div class="alert alert-danger">PROFILE NOT APPROVED YET</div>';
                } else if($id->status == 'WAITING'){
                    echo '<div class="alert alert-primary">PLEASE WAIT FOR YOUR PROFILE APRROVED</div>';
                }
            ?>
        </div>
        <?php
            if(!empty($notif)){
                echo '<div class="alert alert-danger">'.$notif.'</div>';
            }
        ?>
    </div>
    <form action="<?php echo base_url()?>Profil/updateProfile/<?php echo $id->id_user?>" method="post" enctype="multipart/form-data">
        <?php if($id->status == 'PENDING') :?>
        <div class="row">
            <div class="column side">
                <label for="username">Username</label>
                <input type="text" class="form-control form-control-user" value="<?php echo $id->username?>" id="username" name="username" placeholder="" >
            </div>
            <div class="column side">
                <label for="email">Email</label>
                <input type="email" class="form-control form-control-user" value="<?php echo $id->email?>" id="email" name="email" readonly>
            </div>
        </div>
        <div class="row">
            <div class="column side">
                <label for="nama">Nama</label>
                <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="" value="<?php echo $id->nama?>">
            </div>
            <div class="column side">
                <label for="nomorhandphone">Nomor Hanphone</label>
                <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp" value="<?php echo $id->phone?>" placeholder="" >
            </div>
        </div>
        <div class="row">
            <div class="column middle">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control form-control-user" id="alamat" name="alamat" value="<?php echo $id->alamat?>" placeholder="" >
            </div>
        </div>
        <div class="row">
            <div class="column side">
                <label for="nama">Nomor KTP</label>
                <input type="number" class="form-control form-control-user" id="no_ktp" name="no_ktp" placeholder="" value="<?php echo $id->noktp?>">
            </div>
            <div class="column side">
                <label for="nama">Nomor SIM</label>
                <input type="number" class="form-control form-control-user" id="no_sim" name="no_sim" placeholder="" value="<?php echo $id->nosim?>">
            </div>
        </div>

        <div class="row">
            <div class="column side">
                <label for="nama">Kartu Tanda Penudduk (KTP)*</label>
                <div class="text-center">
                    <input type="file" name="ktp" accept=".png,.jpg,.jpeg">
                </div>
            </div>
            <div class="column side">
                <label for="nama">Surat Izin Mengemudi (SIM)*</label>
                <div class="text-center">
                    <input type="file" name="sim" accept=".png,.jpg,.jpeg">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column side">
                <label for="nama">Kartu Tanda Penudduk (KTP)+Selfie*</label>
                <div class="text-center">
                    <input type="file" name="ktpselfie" accept=".png,.jpg,.jpeg">
                </div>
            </div>
            <div class="column side">
                <label for="nama">Surat Izin Mengemudi (SIM)+Selfie*</label>
                <div class="text-center">
                    <input type="file" name="simselfie" accept=".png,.jpg,.jpeg">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column side"></div>
            <div class="column side">
                <button type="submit" value="submit" name="submit" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger">UPDATE PROFILE</button>
            </div>
        </div>
    <?php endif;?>
    <?php if($id->status == 'WAITING') :?>
        <div class="row">
            <div class="column side">
                <label for="username">Username</label>
                <input type="text" class="form-control form-control-user" value="<?php echo $id->username?>" id="username" name="username" placeholder="" readonly>
            </div>
            <div class="column side">
                <label for="email">Email</label>
                <input type="email" class="form-control form-control-user" value="<?php echo $id->email?>" id="email" name="email" readonly>
            </div>
        </div>
        <div class="row">
            <div class="column side">
                <label for="nama">Nama</label>
                <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="" value="<?php echo $id->nama?>" readonly>
            </div>
            <div class="column side">
                <label for="nomorhandphone">Nomor Hanphone</label>
                <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp" value="<?php echo $id->phone?>" placeholder="" readonly>
            </div>
        </div>
        <div class="row">
            <div class="column middle">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control form-control-user" id="alamat" name="alamat" value="<?php echo $id->alamat?>" placeholder="" readonly>
            </div>
        </div>
        <div class="row">
            <div class="column side">
                <label for="nama">Nomor KTP</label>
                <input type="number" class="form-control form-control-user" id="no_ktp" name="no_ktp" placeholder="" value="<?php echo $id->noktp?>" readonly>
            </div>
            <div class="column side">
                <label for="nama">Nomor SIM</label>
                <input type="number" class="form-control form-control-user" id="no_sim" name="no_sim" placeholder="" value="<?php echo $id->nosim?>" readonly>
            </div>
        </div>

        <div class="row">
            <div class="column side">
                <label for="nama">Kartu Tanda Penudduk (KTP)*</label>
                <div class="text-center">
                    <img src="<?php echo base_url()?>uploads/users/<?php echo $id->ktp?>" style="width:300px; height:200px; object-fit:cover;">
                </div>
            </div>
            <div class="column side">
                <label for="nama">Surat Izin Mengemudi (SIM)*</label>
                <div class="text-center">
                    <img src="<?php echo base_url()?>uploads/users/<?php echo $id->sim?>" style="width:300px; height:200px; object-fit:cover;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column side">
                <label for="nama">Kartu Tanda Penudduk (KTP)+Selfie*</label>
                <div class="text-center">
                    <img src="<?php echo base_url()?>uploads/users/<?php echo $id->ktpselfie?>" style="width:300px; height:500px; object-fit:cover;">
                </div>
            </div>
            <div class="column side">
                <label for="nama">Surat Izin Mengemudi (SIM)+Selfie*</label>
                <div class="text-center">
                    <img src="<?php echo base_url()?>uploads/users/<?php echo $id->simselfie?>" style="width:300px; height:500px; object-fit:cover;">
                </div>
            </div>
        </div>
    <?php endif;?>
    <?php if($id->status == 'APPROVED') :?>
        <div class="row">
            <div class="column side">
                <label for="username">Username</label>
                <input type="text" class="form-control form-control-user" value="<?php echo $id->username?>" id="username" name="username" placeholder="">
            </div>
            <div class="column side">
                <label for="email">Email</label>
                <input type="email" class="form-control form-control-user" value="<?php echo $id->email?>" id="email" name="email" readonly>
            </div>
        </div>
        <div class="row">
            <div class="column side">
                <label for="nama">Nama</label>
                <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="" value="<?php echo $id->nama?>" readonly>
            </div>
            <div class="column side">
                <label for="nomorhandphone">Nomor Hanphone</label>
                <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp" value="<?php echo $id->phone?>" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="column middle">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control form-control-user" id="alamat" name="alamat" value="<?php echo $id->alamat?>" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="column side">
                <label for="nama">Nomor KTP</label>
                <input type="number" class="form-control form-control-user" id="no_ktp" name="no_ktp" placeholder="" value="<?php echo $id->noktp?>" readonly>
            </div>
            <div class="column side">
                <label for="nama">Nomor SIM</label>
                <input type="number" class="form-control form-control-user" id="no_sim" name="no_sim" placeholder="" value="<?php echo $id->nosim?>" readonly>
            </div>
        </div>

        <div class="row">
            <div class="column side">
                <label for="nama">Kartu Tanda Penudduk (KTP)*</label>
                <div class="text-center">
                    <img src="<?php echo base_url()?>uploads/users/<?php echo $id->ktp?>" style="width:300px; height:200px; object-fit:cover;">
                </div>
            </div>
            <div class="column side">
                <label for="nama">Surat Izin Mengemudi (SIM)*</label>
                <div class="text-center">
                    <img src="<?php echo base_url()?>uploads/users/<?php echo $id->sim?>" style="width:300px; height:200px; object-fit:cover;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column side">
                <label for="nama">Kartu Tanda Penudduk (KTP)+Selfie*</label>
                <div class="text-center">
                    <img src="<?php echo base_url()?>uploads/users/<?php echo $id->ktpselfie?>" style="width:300px; height:500px; object-fit:cover;">
                </div>
            </div>
            <div class="column side">
                <label for="nama">Surat Izin Mengemudi (SIM)+Selfie*</label>
                <div class="text-center">
                    <img src="<?php echo base_url()?>uploads/users/<?php echo $id->simselfie?>" style="width:300px; height:500px; object-fit:cover;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column side"></div>
            <div class="column side">
                <button type="submit" value="submit" name="submit" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger">UPDATE PROFILE</button>
            </div>
        </div>
    <?php endif;?>
        <div class="row">
            <div>
                <p style="text-align:left; font-size:100%; color:red;">Kelengkapan Informasi akan di Konfirmasi kurang lebih selama 3 Jam. Proses transaksi bisa dilakukan <br>
                jika Kelengkapan Informasi sudah di konfirmasi. Mohon masukkan data informasi dengan sebenar-benarnya.</p>

            </div>
        </div>
    </form>
</section>