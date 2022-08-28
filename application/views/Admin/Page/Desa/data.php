<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data Desa</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <!-- <select class="form-control dt-tb">
                                    <option value="">Export Dasar</option>
                                    <option value="all">Export Semua</option>
                                    <option value="selected">Export Yang Dipilih</option>
                                </select> -->
                            </div>
                            <div class="">
                                <a href="<?= base_url('Admin/tambahdatadesa')?>" class="btn btn-success">Tambah Data</a>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <!-- <th data-field="state" data-checkbox="true"></th> -->
                                        <th data-field="logo_desa" data-editable="false">Logo Desa</th>
                                        <th data-field="nama_desa" data-editable="false">Nama Desa</th>
                                        <th data-field="nama_kepala_desa" data-editable="false">Nama Kepala Desa</th>
                                        <th data-field="alamat_desa" data-editable="false">Alamat Desa</th>
                                        <th data-field="kecamatan_desa" data-editable="false">Kecamatan</th>
                                        <th data-field="kabupaten_desa" data-editable="false">Kabupaten</th>
                                        <th data-field="email_desa" data-editable="false">Alamat Email</th>
                                        <th data-field="telepon_desa" data-editable="false">Telepon</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($tb_desa as $td){?>
                                    <tr>
                                        <!-- <td></td> -->
                                        <td>
                                            <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#ModalLogo<?= $td->id_desa?>">
                                                <i class="btn btn-primary fa fa-eye"> </i>
                                            </a>
                                            <div id="ModalLogo<?= $td->id_desa?>" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-close-area modal-close-df">
                                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                        </div>
                                                        <div class="modal-body">
                                                            <?php if (empty($td->logo_desa)) {?>
                                                                <!-- Upload -->
                                                                <?= form_open_multipart('Admin/upload_logo_desa'); ?>
                                                                    <div class="row">
                                                                        <div class="col-lg-10 col-md-10">
                                                                            <input type="hidden" name="id_desa" value="<?= $td->id_desa?>">
                                                                            <input type="file" name="upload_logo_desa" id="upload_logo_desa" class="form-control" required>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2">
                                                                            <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Upload</button>
                                                                        </div>
                                                                    </div>
                                                                <?php form_close();?>
                                                            <?php } else { ?>
                                                                <img src="<?= base_url('asset/img/logo/'.$td->logo_desa)?>" alt="<?= $td->logo_desa?>" width="50%">
                                                                <hr>
                                                                <a href="<?= base_url('Admin/hapus_file_logo/'.$td->id_desa)?>">
                                                                    <span class="btn btn-danger text-white">
                                                                        <i class="fa fa-trash"></i> Hapus File
                                                                    </span>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?= $td->nama_desa?></td>
                                        <td><?= $td->nama_kepala_desa?></td>
                                        <td><?= $td->alamat_desa?></td>
                                        <td><?= $td->kecamatan_desa?></td>
                                        <td><?= $td->kabupaten_desa?></td>
                                        <td><?= $td->email_desa?></td>
                                        <td><?= $td->telepon_desa?></td>
                                        <td>
                                            <a href="<?= base_url('Admin/edit_desa/'.$td->id_desa)?>"><i class="fa fa-edit btn btn-warning"></i></a>
                                            <hr>
                                            <a href="<?= base_url('Admin/hapus_desa/'.$td->id_desa)?>"><i class="fa fa-trash btn btn-danger"></i></a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table End -->