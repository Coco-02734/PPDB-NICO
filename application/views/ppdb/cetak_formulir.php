<!DOCTYPE html>
<html>

<head>
    <link href="<?= base_url('assets/admin/') ?>img/logo/logoii.png" rel="icon">
    <title><?= $title . $user['nama']; ?></title>
    <link href="<?= base_url('assets/admin/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/admin/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/admin/') ?>css/ruang-admin.min.css" rel="stylesheet">
    <style type="text/css">
        .logo {
            position: relative;
            top: 10px;
            left: 130px;


        }
    </style>
</head>

<body>

    <?php
    function tgl_indo($tanggal)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
    }
    ?>
    <style type="text/css">
        .isi {
            padding: 10px 8% 8px 2%;
            text-align: justify;
        }

        h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        td,
        th,
        tr {
            color: black;
        }
    </style>

    <div class="card">
        <div class="card-body">
            <div class="isi">
                <table width="100%">
                    <tr>
                        <td class="logo" width="20"><img src="<?= base_url('assets/gambar/logoii.png') ?>" width="100%"></td>
                        <td width="50" align="center">

                            <h1>
                                <center>
                                    <font size="5" face="arial"><b>YAYASAN INSTITUT INDONESIA 48 SEMARANG<b></font>
                                </center>
                            </h1>
                            <center>
                                <h7>

                                </h7>
                                <b>
                                    <font size="4" face="Courier New">SMA INSTITUT INDONESIA SEMARANG
                                </b></font>

                            </center>
                            <b>
                                <font size="4" face="Courier New">AKREDITASI A
                            </b></font>
                            <center><b>Jalan Maluku 25 Semarang (024) 8318433 </b></center>
                            <center>http://www.smainstindosmg.sch.id Email : smainstindo_48smg@yahoo.co.id </center>

                            <hr>
                        </td>

                    </tr>
                </table>
                <table width="100%">
                    <tr>
                        <th class="logo"> <img src="<?= base_url('assets/gambar/foto_siswa/foto_pas.jpg') ?>" width="100" style="border-style: solid;
                        border-width : 3px;">
                        </th>
                        <th width="300">
                            <h4>
                                No Pendaftaran : <a style="border-style: solid; border-width: 3px;">00<?= $user['id']; ?></a>
                            </h4>
                        </th>

                    </tr>
                </table>
                <br>
                <br>
                <table align="center">
                    <center>
                        <h4>FORMULIR PENDAFTARAN CALON PESERTA DIDIK BARU KELAS X
                        </h4>
                        <h4>TAHUN PELAJARAN 2020/2021</h4>
                    </center>
                    <br>
                    <br>

                    <tr>
                        <th width="50%">1. Nama</th>
                        <th width="40%">:&nbsp;&nbsp;&nbsp; <?= $user['nama']; ?></th>
                    </tr>
                    <tr>
                        <th>&nbsp;&nbsp;&nbsp;Status Pendaftar</th>
                        <th>:&nbsp; <?= $user['status']; ?></th>
                    </tr>
                    <tr>
                        <th>2. Tempat, Tgl Lahir</th>
                        <th>:&nbsp;&nbsp;&nbsp; <?= $user['tempat_lahir'] . ', ' . $user['tgl_lahir'] ?></th>
                    </tr>

                    <tr>
                        <th>3. Umur</th>
                        <th>:&nbsp;&nbsp;&nbsp; <?= $user['umur']; ?></th>
                    </tr>

                    <tr>
                        <th>4. Asal Sekolah</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>&nbsp;&nbsp;&nbsp; 4.1 Dari SMP / MTs</th>
                        <th>:&nbsp;&nbsp;&nbsp; <?= $user['asal_smp']; ?></th>
                    </tr>
                    <tr>
                        <th>&nbsp;&nbsp;&nbsp; 4.2 Kecamatan</th>
                        <th>:&nbsp;&nbsp;&nbsp; <?= $user['kecamatan_smp']; ?></th>
                    </tr>

                    <tr>
                        <th>&nbsp;&nbsp;&nbsp; 4.3 Kabupaten / Kota</th>
                        <th>:&nbsp;&nbsp;&nbsp; <?= $user['kota_smp']; ?></th>
                    </tr>

                    <tr>
                        <th>&nbsp;&nbsp;&nbsp; 4.4 Provinsi</th>
                        <th>:&nbsp;&nbsp;&nbsp; <?= $user['provinsi_smp']; ?></th>
                    </tr>
                    <tr>
                        <th>&nbsp;&nbsp;&nbsp; 4.5 No Ijazah</th>
                        <th>:&nbsp;&nbsp;&nbsp; <?= $user['no_ijazah']; ?></th>
                    </tr>
                    <tr>
                        <th>5. Agama</th>
                        <th>:&nbsp;&nbsp;&nbsp; <?= $user['agama']; ?></th>
                    </tr>

                    <tr>
                        <th>6. Nama Orang Tua</th>
                        <th>:&nbsp;&nbsp;&nbsp; <?= $user['nama_ortu']; ?></th>
                    </tr>
                    <tr>
                        <th>7. Alamat Orang Tua</th>
                        <th>:&nbsp;&nbsp;&nbsp; <?= $user['alamat']; ?></th>
                    </tr>
                    <tr>
                        <th>No Hp Orang Tua</th>
                        <th>:&nbsp;&nbsp;&nbsp; <?= $user['no_tlpn_ortu']; ?></th>
                    </tr>
                    <tr>
                        <th>8. APABILA CALON PESERTA DIDIK IKUT WALI</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>&nbsp;&nbsp;&nbsp; 8.1 Nama Wali</th>
                        <th>:&nbsp;&nbsp;&nbsp; <?= $user['nama_wali']; ?></th>
                    </tr>
                    <tr>
                        <th>&nbsp;&nbsp;&nbsp; 8.2 Alamat Wali</th>
                        <th>:&nbsp;&nbsp;&nbsp; <?= $user['alamat_wali']; ?></th>
                    </tr>
                    <tr>
                        <th>&nbsp;&nbsp;&nbsp; 8.3 No Hp Wali</th>
                        <th>:&nbsp;&nbsp;&nbsp; <?= $user['no_wali']; ?></th>
                    </tr>

                    <tr>
                        <th>9. Sudah Mendaftar Di</th>
                        <th>:&nbsp;&nbsp;&nbsp; <?= $user['sudah_daftar_di']; ?></th>
                    </tr>

                </table>
                <br>
                <br>
                <table>
                    <tr>
                        <th width="30%">
                            <h6><b><ins>PENGUMUMAN : </ins></b></h6>
                            <h6>- Formulir Pendaftaran ini diserahkan kepada Panitia,</h6>
                            <h6> &nbsp;&nbsp;&nbsp;Pendaftaran Siswa Baru dilampiri :</h6>
                            <ul>- Surat Keterangan Lulus (SKL) Asli atau Foto Copy</ul>
                            <h6>- Para Calon yang tidak diterima tidak dapat meminta kembali segala </h6>
                            <h6> &nbsp;&nbsp;&nbsp;persyaratan yang sudah diserahkan pada Panitia</h6>
                            <h6> &nbsp;&nbsp;&nbsp;Pendaftaran Calon Siswa Baru, Kecuali SKL Asli</h6>
                            <h6>- <b>Untuk saat ini sistem pembayaran SPI bisa menyesuaikan kondisi</h6>
                            <h6> &nbsp;&nbsp;&nbsp;calon pendaftar / fleksibel.</b></h6>
                        </th>
                        <th width="30%">

                            <p align="right">Semarang, <?= tgl_indo(date('Y-m-d')); ?></p>
                            <p align="right">Calon Siswa,</p>
                            <br>
                            <br>
                            <br>
                            <br>
                            <p align="right"><?= $user['nama']; ?></p>
                        </th>
                    </tr>
                </table>


            </div>
        </div>

    </div>


    <script>
        window.print();
    </script>

</body>

</html>