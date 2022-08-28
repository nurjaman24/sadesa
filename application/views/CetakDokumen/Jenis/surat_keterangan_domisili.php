<?php foreach ($tb_sdomisili as $tsdom) { ?>
    <div class="container-fluid">
        <div class="" 
            style="
                text-align:left;
                color:black;
                background-color:white;
                padding: 2.54cm 2.54cm 2.54cm 2.54cm;
                font-family:'Times New Roman', Times, serif;
            ">
            <!-- KOP SURAT -->
                <div class="row" style="
                    margin: 0.05cm 0.05cm 0.05cm 0.05cm;
                    text-align:center;
                ">
                    <!-- Logo -->
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <img src="<?= base_url('asset/img/logo/'.$tsdom->logo_desa)?>" width="100%">
                    </div>
                    <!-- Identitas Desa -->
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <font style="font-size:24pt;"><b>PEMERINTAH DAERAH <?= strtoupper($tsdom->kabupaten_desa)?></b></font><br>
                        <font style="font-size:18pt;"><?= strtoupper($tsdom->kecamatan_desa)?></font><br>
                        <font style="font-size:24pt;"><b><?= strtoupper($tsdom->nama_desa)?></b></font><br>
                        <font style="font-size:18pt;"><?= ucwords($tsdom->alamat_desa)?></font><br>
                    </div>
                </div>
            <!-- /KOP SURAT -->
            <hr color="black">
            <br>

            <div style="
                text-align:center;
                font-weight:bold
            ">
                <b><u><font style="font-size:18pt;">SURAT KETERANGAN DOMISILI</font></u></b><br>
                <font style="font-size:18pt;">Nomor: <?= $tsdom->nomor_surat?></font><br>
            </div>
            <br>

            <div style="text-align:justify;">
                <p style="font-size:20pt;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Yang bertanda tangan di bawah ini Kepala <?= ucwords(strtolower($tsdom->nama_desa))?> <?= ucwords(strtolower($tsdom->kecamatan_desa))?> <?= ucwords(strtolower($tsdom->kabupaten_desa))?>, menerangkan bahwa:
                </p>
            </div>
            <br>
            
            <!-- Tabel Data Diri -->
            <div style="font-size:20pt;">
                <!-- <table border="1" width="95%" id="table"> -->
                <table id="table" data-toggle="table">
                    <tr style="text-align:left;"><td width="40%">&nbsp;Nama Lengkap</td><td width="5%" style="text-align: center;">:</td>
                    <td>&nbsp;<?= ucwords(strtolower($tsdom->nama))?></td></tr>

                    <tr style="text-align:left;"><td width="40%">&nbsp;NIK</td><td width="5%" style="text-align: center;">:</td>
                    <td>&nbsp;<?= ucwords(strtolower($tsdom->nik))?></td></tr>

                    <tr style="text-align:left;"><td width="40%">&nbsp;No. KK</td><td width="5%" style="text-align: center;">:</td>
                    <td>&nbsp;<?= ucwords(strtolower($tsdom->no_kk))?></td></tr>

                    <tr style="text-align:left;"><td width="40%">&nbsp;Tempat/Tgl Lahir</td><td width="5%" style="text-align: center;">:</td>
                    <td>&nbsp;<?= ucwords(strtolower($tsdom->tempat_lahir))." ".ucwords(strtolower($tsdom->tanggal_lahir))?></td></tr>

                    <tr style="text-align:left;"><td width="40%">&nbsp;Jenis Kelamin</td><td width="5%" style="text-align: center;">:</td>
                    <td>&nbsp;<?= ucwords(strtolower($tsdom->jenis_kelamin))?></td></tr>
                    
                    <tr style="text-align:left;"><td width="40%">&nbsp;Status Perkawinan</td><td width="5%" style="text-align: center;">:</td>
                    <td>&nbsp;<?= ucwords(strtolower($tsdom->status_perkawinan))?></td></tr>

                    <tr style="text-align:left;"><td width="40%">&nbsp;Pekerjaan</td><td width="5%" style="text-align: center;">:</td>
                    <td>&nbsp;<?= ucwords(strtolower($tsdom->jenis_pekerjaan))?></td></tr>

                    <tr style="text-align:left;"><td width="40%">&nbsp;Kewarganegaraan</td><td width="5%" style="text-align: center;">:</td>
                    <td>&nbsp;<?= $tsdom->kewarganegaraan?></td></tr>
                    
                    <tr style="text-align:left;"><td width="40%">&nbsp;Agama</td><td width="5%" style="text-align: center;">:</td>
                    <td>&nbsp;<?= ucwords(strtolower($tsdom->agama))?></td></tr>
                    
                    <tr style="text-align:left;"><td width="40%">&nbsp;Alamat Domisili</td><td width="5%" style="text-align: center;">:</td>
                    <td>&nbsp;<?= ucwords(strtolower($tsdom->alamat))." ".ucwords(strtolower($tsdom->rukun_tetangga))."/".ucwords(strtolower($tsdom->rukun_warga))." ".ucwords(strtolower($tsdom->nama_desa))." ".ucwords(strtolower($tsdom->kecamatan_desa))." ".ucwords(strtolower($tsdom->kabupaten))?></td></tr>
                </table>
            </div>
            <br>
            <div style="font-size:20pt;text-align:left;">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Perlu kami jelaskan bahwa Orang tersebut diatas adalah benar warga kami  yang berdomisili 
                    di <?= ucwords(strtolower($tsdom->alamat))?> <?= ucwords(strtolower($tsdom->nama_desa))?> <?= ucwords(strtolower($tsdom->kecamatan_desa))?> 
                    <?= ucwords(strtolower($tsdom->kabupaten_desa))?>,  Surat keterangan ini dibuat untuk ...................
                    Berdasarkan data yang ada pada kami bahwa orang tersebut diatas adalah benar warga  yang saat ini berdomisili dialamat tersebut di atas.
                </p>
            </div>
            <div style="font-size:20pt;text-align:left;">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Demikian Surat Keterangan ini dibuat dengan sebenarnya, agar dapat digunakan sebagaimana mestinya.
                </p>
            </div>
            <br>
            <!-- Tertanda -->
            <div style="font-size:20pt;text-align:justify;">
                <table width="100%" class="text-center">
                    <tr><td width="60%"></td><td width="40%"><?= $tsdom->tanggal_surat?></td></tr>
                    <tr><td width="60%"></td><td width="40%">Kepala <?= ucwords(strtolower($tsdom->nama_desa))?></td></tr>
                    <tr><td width="60%"></td><td width="40%"><br><br><br><br></td></tr>
                    <tr><td width="60%"></td><td width="40%"><b><?= $tsdom->nama_kepala_desa?></b></td></tr>
                </table>
            </div>
        </div>
    </div>
<?php } ?>