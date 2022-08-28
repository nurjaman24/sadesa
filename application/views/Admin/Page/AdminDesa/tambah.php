<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline12-list">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                            <h1>Tambah Data Admin Desa</h1>
                        </div>
                    </div>
                    <hr>
                    <div class="sparkline12-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="all-form-element-inner">
                                        <form action="<?= base_url('Admin/prosestambahdataadmindesa')?>" method="POST">
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Nomor Induk Pegawai (NIP) <code>*</code></label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control" name="nip" required autofocus maxlength="20"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Nama Desa <code>*</code></label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <select name="id_desa" class="form-control" required>
                                                        <?php
                                                            foreach($tb_desa as $td){
                                                        ?>
                                                            <option value="<?= $td->id_desa?>"><?= $td->nama_desa?></option>
                                                        <?php }?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Username <code>*</code></label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control" name="username" required maxlength="20"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Password <code>*</code></label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="password" class="form-control" name="password" required maxlength="12"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="modal-bootstrap shadow-inner mg-tb-30 responsive-mg-b-0">
                                                    <div class="modal-area-button">
                                                        <a class="Danger danger-color" href="<?= base_url('Admin/dataadmindesa')?>">Kembali</a>
                                                        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalalert">Simpan</a>
                                                    </div>
                                                </div>
                                                <div id="PrimaryModalalert" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-close-area modal-close-df">
                                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <i class="educate-icon educate-checked modal-check-pro"></i>
                                                                <!-- <h2>Yakin !</h2> -->
                                                                <p>Pastikan semua data sudah terisi dengan benar !!</p>
                                                                <code>Data yang sudah disimpan tidak dapat diubah.</code>
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <button class="btn btn-md btn-primary" type="submit">Tetap Simpan</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>