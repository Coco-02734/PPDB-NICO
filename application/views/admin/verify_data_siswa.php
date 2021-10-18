<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item"><?= $title; ?></li>

        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
            </div>
            <div class="table-responsive p-3">
                <a href="<?= base_url('user_admin/cetak_siswa'); ?>" class="btn btn-warning">Cetak Data </a>
                <br>
                <br>


                <?php echo $this->session->flashdata('notif') ?>

                <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                        <tr>

                            <th scope="col">No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Asal SMP</th>
                            <th scope="col">No Tlpn Siswa</th>
                            <th scope="col">No Tlpn Ortu</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">No Pendaftaran</th>
                            <th scope="col">Aksi</th>
                            <th scope="col">Status</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($siswa as $m) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $m['nama']; ?></td>
                                <td><?= $m['asal_smp']; ?></td>
                                <td><?= $m['no_tlpn']; ?></td>
                                <td><?= $m['no_tlpn_ortu']; ?></td>
                                <td><?= $m['nis_siswa']; ?></td>
                                <td><?= $m['jenis_kelamin']; ?></td>
                                <td>000<?= $m['id']; ?></td>
                                <td>
                                    <a href="<?= base_url('user_admin/halaman_verify_data_siswa/' .  $m['nis_siswa']) ?>" class="badge badge-warning"> Verifikasi </a>

                                </td>
                                <td>
                                    <?php
                                    if ($m['verify_data'] == 0) {
                                        echo "<a class='badge badge-danger' style='color: white;'> Data </a> ";
                                    } else {
                                        echo "<a class='badge badge-success' style='color: white;' > Data </a> ";
                                    }
                                    if ($m['verify_pembayaran'] == 0) {
                                        echo "<a class='badge badge-danger' style='color: white;' > Bayar </a>";
                                    } else {
                                        echo "<a class='badge badge-success' style='color: white;' > Bayar </a>";
                                    }
                                    ?>
                                </td>
                            </tr>

                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
