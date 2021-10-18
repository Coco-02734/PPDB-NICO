  <!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">
      <!-- Attention -->
      <?php if ($user['benar'] == 0) { ?>
          <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              Harap segera melengkapi data formulir untuk mencetak formulir pendaftaran.
          </div>
      <?php } ?>
      <!-- Attention -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Halaman Utama</li>
          </ol>
      </div>

      <div class="row">
          <div class="col-lg-6">
              <div class="card mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Biodata Singkat</h6>
                  </div>
                  <div class="col-md-4">
                      <img src="<?= base_url('assets/gambar/foto_siswa/') . $user['image']; ?>" class="card-img">

                  </div>

                  <div class="col-md-8">

                      <div class="card-body">
                          <table style="width:100%">
                              <tr>
                                  <th>Nama </th>
                                  <th>: <?= $user['nama']; ?></th>
                              </tr>
                              <tr>
                                  <th>NIS Siswa </th>
                                  <th>: <?= $user['nis_siswa']; ?></th>
                              </tr>
                              <tr>
                                  <th>Asal SMP </th>
                                  <th>: <?= $user['asal_smp']; ?></th>
                              </tr>
                              <tr>
                                  <th>Jenis Kelamin </th>
                                  <th>: <?= $user['jenis_kelamin']; ?></th>
                              </tr>

                          </table>

                          <p class="card-text"><small class="text-muted">Waktu Pendaftaran <?= date('d F Y', $user['date_created']); ?></small></p>
                      </div>
                  </div>

              </div>
          </div>
          <div class="col-lg-6">
              <div class="card mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Untuk Pertanyaan Seputar PPDB</h6>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <h7>Untuk pembayaran SPI bisa menghubungi CP di bawah ini :</h7>
                          <table width="100%">
                              <?php foreach ($cp as $a) : ?>
                                  <tr>
                                      <th>
                                          - <?= $a['nama']; ?>
                                      </th>
                                      <th width="50%">WA. <?= $a['nomor']; ?></th>
                                  </tr>
                              <?php endforeach; ?>


                          </table>

                      </div>
                  </div>
              </div>
          </div>

      </div>

      <!--Row-->
  </div>
  <!---Container Fluid-->
  </div>