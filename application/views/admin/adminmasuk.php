<!-- KONTEN DASBOR ATAU HOME-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
  </div>

  <div class="row mb-3">

    <!-- SISWA-->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-uppercase mb-1">Pendaftar Gel 1 ( 2020 )</div>
              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $jml_siswa_1 ?></div>

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
              <div class="text-xs font-weight-bold text-uppercase mb-1">Pendaftar Gel 2 ( 2020 )</div>
              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $jml_siswa_2 ?></div>

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
              <div class="text-xs font-weight-bold text-uppercase mb-1">non</div>
              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">0</div>

            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-info"></i>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Awalan Dsbor-->
    <div class="col-xl-4 col-lg-5">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Statistik Pendaftar</h6>

        </div>
        <div class="card-body">
          <div class="mb-3">
            <div class="small text-gray-500">Pendaftar Belum Konfirmasi
              <div class="small float-right"><b><?= $jml_siswa_0 ?></b></div>
            </div>
            <div class="progress" style="height: 12px;">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="0"></div>
            </div>
          </div>
          <div class="mb-3">
            <div class="small text-gray-500">Pendaftar Terkonfirmasi
              <div class="small float-right"><?= $jml_siswa_1 ?></div>
            </div>
            <div class="progress" style="height: 12px;">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- Data Almuni -->
    <div class="col-xl-8 col-lg-7 mb-4">
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Data Alumni</h6>
          <a class="m-0 float-right btn btn-danger btn-sm" href="<?= base_url('user_admin/data_alumni') ?>">Selengkapnya <i class="fas fa-chevron-right"></i></a>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tahun Lulus</th>
                <th>Status</th>
                <th>Universitas</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($data_alumni as $d) : ?>
                <tr>
                  <th><?php echo $d['nis']; ?></th>
                  <th><?php echo $d['nama']; ?></th>
                  <th><?php echo $d['lulus']; ?></th>
                  <th><?php echo $d['status']; ?></th>
                  <th><?php echo $d['univ']; ?></th>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <div class="card-footer"></div>
      </div>
    </div>
    <!-- TESTIMONI-->
    <div class="col-xl-4 col-lg-5 ">
      <div class="card">
        <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-light">Pesan Alumni/Siswa</h6>
        </div>

        <?php $i = 1; ?>
        <?php foreach ($pesan_alumni as $d) : ?>
          <div>
            <div class="customer-message align-items-center">
              <a class="font-weight-bold" href="#">
                <div class="text-truncate message-title">
                  <tr><?php echo $d['pesan']; ?></tr>
                </div>
                <div class="small text-gray-500 message-time font-weight-bold">
                  <tr><?php echo $d['nama']; ?>&nbsp - &nbsp<?php echo $d['kelas']; ?></tr>
                </div>
              </a>
            </div>
            <?php $i++; ?>
          <?php endforeach; ?>

          <div class="card-footer text-center">
            <a class="m-0 small text-primary card-link" href="<?= base_url('user_admin/pesan_alumni ') ?>">View More <i class="fas fa-chevron-right"></i></a>
          </div>
          </div>
      </div>
    </div>
  </div>



  <!---Container Fluid-->
</div>
</div>