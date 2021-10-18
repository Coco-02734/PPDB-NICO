<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item"><?= $title; ?></li>
        </ol>
    </div>
   <?php echo $this->session->flashdata('notif') ?>

    <div class="row">
        
        <div class="col-lg-12 mb-4">

            <div class="card" style="width: 60%;">
                <div class="card-body">
                    <?= $this->session->flashdata('message'); ?>
                    <?php foreach ($siswa as $s) : ?>
                        <table style="width:100%">

                            <tr>

                                <th width="35%">NIS</th>
                                <th width="35%">: <?= $s['nis_siswa']; ?></th>

                            </tr>
                            <tr>
                                <th>Nama</th>
                                <th>: <?= $s['nama']; ?></th>
                            </tr>
                            <tr>
                                <th>Tempat, Tgl Lahir</th>
                                <th>: <?= $s['tempat_lahir'] . ', ' . $s['tgl_lahir'] ?></th>
                            </tr>
                            <tr>
                                <th>Umur</th>
                                <th>: <?= $s['umur']; ?></th>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <th>:<?= $s['jenis_kelamin']; ?></th>
                            </tr>

                            <tr>
                                <th>Agama</th>
                                <th>: <?= $s['agama']; ?></th>
                            </tr>
                            <tr>
                                <th>No Hp</th>
                                <th>: <?= $s['no_tlpn']; ?></th>
                            </tr>
                            <tr>
                                <th>Asal SMP</th>
                                <th>: <?= $s['asal_smp']; ?></th>
                            </tr>
                            <tr>
                                <th>Kecamatan SMP</th>
                                <th>: <?= $s['kecamatan_smp']; ?></th>
                            </tr>

                            <tr>
                                <th>Kota SMP</th>
                                <th>: <?= $s['kota_smp']; ?></th>
                            </tr>

                            <tr>
                                <th>Provinsi SMP</th>
                                <th>: <?= $s['provinsi_smp']; ?></th>
                            </tr>
                            <tr>
                                <th>No Ijazah</th>
                                <th>: <?= $s['no_ijazah']; ?></th>
                            </tr>
                            <?php if ($s['nama_wali'] == null) { ?>
                                <tr>
                                    <th>Nama Orang Tua</th>
                                    <th>: <?= $s['nama_ortu']; ?></th>
                                </tr>
                                <tr>
                                    <th>No Hp Orang Tua</th>
                                    <th>: <?= $s['no_tlpn_ortu']; ?></th>
                                </tr>
                                <tr>
                                    <th>Alamat Orang Tua</th>
                                    <th>: <?= $s['alamat']; ?></th>
                                </tr>
                            <?php } else { ?>
                                <tr>
                                    <th>Nama Orang Tua</th>
                                    <th>: <?= $s['nama_ortu']; ?></th>
                                </tr>
                                <tr>
                                    <th>No Hp Orang Tua</th>
                                    <th>: <?= $s['no_tlpn_ortu']; ?></th>
                                </tr>
                                <tr>
                                    <th>Alamat Orang Tua</th>
                                    <th>: <?= $s['alamat']; ?></th>
                                </tr>
                                <tr>
                                    <th>Nama Wali</th>
                                    <th>: <?= $s['nama_wali']; ?></th>
                                </tr>
                                <tr>
                                    <th>Alamat Wali</th>
                                    <th>: <?= $s['alamat_wali']; ?></th>
                                </tr>
                                <tr>
                                    <th>No Hp Wali</th>
                                    <th>: <?= $s['no_wali']; ?></th>
                                </tr>
                            <?php } ?>

                            <tr>
                                <th>Sudah Mendaftar Di</th>
                                <th>: <?= $s['sudah_daftar_di']; ?></th>
                            </tr>


                        </table>
                        <br>
                        <br>
                        <a href="<?= base_url('user_admin/konfirmasi_data/') . $s['nis_siswa']; ?>" class="btn btn-success">
                            Konfirmasi Data
                        </a>
                        <a href="<?= base_url('user_admin/konfirmasi_pembayaran/') . $s['nis_siswa']; ?>" class="btn btn-success">
                            Konfirmasi Pembayaran
                        </a>
                    <?php endforeach ?>
                </div>
            </div>

        </div>
    </div>
    <!--Row-->
</div>
<!---Container Fluid-->
