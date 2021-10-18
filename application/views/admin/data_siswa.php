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
    <div class="row mb-3">
        <!-- SISWA-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Pendaftar( 2020 )</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $jml_siswa ?></div>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SISWA-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Siswa Belum Verifikasi</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $siswa_belum_konfirmasi; ?></div>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SISWA-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Siswa Sudah Diverifikasi Admin</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $siswa_konfirmasi; ?></div>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SISWA-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Siswa Sudah Melengkapi Formulir</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $siswa_lengkap; ?></div>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
            </div>
            <div class="table-responsive p-3">

                <?php echo $this->session->flashdata('notif') ?>

                <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                        <tr>

                            <th scope="col">No</th>
                            <th scope="col">No Pendaftaran</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Asal SMP</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Aksi</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($siswa as $m) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td>000<?= $m['id']; ?></td>
                                <td><?= $m['nama']; ?></td>
                                <td><?= $m['asal_smp']; ?></td>
                                <td><?= $m['nis_siswa']; ?></td>
                                <td><?= $m['jenis_kelamin']; ?></td>
                                <td>
                                    <a href="<?= base_url('user_admin/hapus_data_siswa/' .  $m['nis_siswa']) ?>" class="badge badge-danger"> Delete </a>
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
