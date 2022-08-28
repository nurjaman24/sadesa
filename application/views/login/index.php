<!doctype html>
<html class="no-js" lang="en">
    <?php include ("Layout-login/head.php") ?>
    <body>
        <!-- [if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif] -->
        <?php
        $pesan = "Hallo Admin, Saya Mau Daftar Akun Warga, Bagaimana Caranya?";

        foreach ($tb_desa as $tdes);
        ?>
        <div class="error-pagewrap">
            <div class="error-page-int">
                <hr>
                <div class="text-center m-b-md custom-login">
                    <div class="row">
                        <img src="<?= base_url('asset/img/logo/IconBaruSatuDesa.png')?>" alt="" class="" width="15%">
                        <img src="<?= base_url('asset/img/logo/ImageTextSatuDesa.png')?>" alt="" class="" width="30%">
                    </div>
                </div>
                <hr>
                <div class="tagline">
                    <marquee behavior="alternatif" direction="left">
                        "Satu Desa - Satu Pintu Dokumen Desa | Membantu mengefisiensi pelayanan administrasi desa"
                    </marquee>
                </div>
                <hr>
                <div class="content-error">
                    <div class="hpanel">
                        <div class="panel-body">
                            <form method="post" action="<?= base_url('Login/auth'); ?>">
                                <div class="form-group">
                                    <label class="control-label" for="username">Nama Pengguna <code>*</code></label>
                                    <input type="text" placeholder="Contoh : adminsadesa" title="Masukan Nama Pengguna" 
                                    required="true" value="" name="username" id="" class="form-control" 
                                    autocomplete="true" autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="password">Password <code>*</code></label>
                                    <input type="password" title="Please enter your password" 
                                    placeholder="******" required="" value="" name="password" 
                                    id="showPassword" class="form-control" autocomplete=""><br>
                                    <input type="checkbox" onclick="myFunction()"> Tampilkan Password
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="password">Akses</label>
                                    <select name="akses" id="" class="form-control" required>
                                        <option class="bg bg-info" value="">Pilih Akses Anda</option>
                                        <option value="Admin">Admin</option>
                                        <option value="AdminDesa">Admin Desa</option>
                                        <option value="Warga">Warga</option>
                                    </select>
                                </div>
                                <button class="btn btn-success btn-block loginbtn" type="submit">Login</button>
                            </form>
                        </div>
                        <div class="panel-footer">
                            Belum Punya Akun ?
                            <a class="" href="https://api.whatsapp.com/send?phone=<?= $tdes->telepon_desa?>&text=<?= $pesan?>">Klik Disini</a>
                            <!--<a class="badge badge-primary btn btn-sm" href="<?= base_url('Login/register')?>">Daftar Disini</a>-->
                        </div>
                    </div>
                </div>
            </div>   
            <div class="text-center login-footer bg bg-info">
                <p>Copyright © 2022. All rights reserved. Developer By <a href="#" class="text-white"><b>STT YBSI</b></a></p>
            </div>
        </div>
        <?php include ("JS-login/mainjs.php")?>
    </body>
</html>