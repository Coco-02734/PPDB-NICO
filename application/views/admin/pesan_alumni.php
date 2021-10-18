<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Data Siswa</li>
            <li class="breadcrumb-item active" aria-current="page">Pesan Alumni</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->

            <div class="table-responsive">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Tahun Lulus</th>
                            <th scope="col">Pesan</th>
                            <th scope="col">Aksi</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pesan as $m) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $m['nama']; ?></td>
                                <td><?= $m['kelas']; ?></td>
                                <td> <?= $m['telepon']; ?></td>
                                <td><?= $m['jk']; ?></td>
                                <td><?= $m['kota']; ?></td>
                                <td><?= $m['tahun']; ?></td>
                                <td><?= $m['pesan']; ?></td>
                                <td>
                                    <a href="<?= base_url('user_admin/hapus_pesan/' . $m['id']) ?>" class="badge badge-danger"> Delete </a>
                                    <a href="<?= base_url('user_admin/tampil/' . $m['id']) ?>" class="badge badge-warning"> Tampil </a>
                                </td>
                                <td><?php
                                    if ($m['aktif'] == 0) {
                                        echo "<span class='badge badge-danger'>Belum Tampil</span>";
                                    } else {
                                        echo "<span class='badge badge-success'>Tampil</span>";
                                    }
                                    ?></td>
                            </tr>

                            <?php $i++; ?>
                        <?php endforeach; ?>

                    </tbody>
                </table>


            </div>

        </div>
    </div>
</div>