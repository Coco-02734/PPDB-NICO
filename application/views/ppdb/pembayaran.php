  <!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">

      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
          </ol>
      </div>

      <div class="row">
          <div class="col-lg-6">
              <div class="card mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Tata Cara Pembayaran</h6>
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
          <div class="col-lg-6">
              <div class="card mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Cetak Pembayaran Formulir Pendaftaran</h6>
                  </div>

                  <div class="card">
                      <div class="card-body">
                          <?php if ($user['benar'] == 0) { ?>
                              <div class="alert alert-danger" role="alert">
                                  Harap lengkapi dan simpan permanen untuk mencetak formulir dan pembayaran
                              </div>
                          <?php } else { ?>
                              <table>

                                  <tr>

                                      <th width="35%">NIS</th>
                                      <th width="35%">: <?= $user['nis_siswa']; ?></th>

                                  </tr>
                                  <tr>
                                      <th>Nama</th>
                                      <th>: <?= $user['nama']; ?></th>
                                  </tr>
                                  <tr>
                                      <th>Status Pendaftar</th>
                                      <th>: <?= $user['status']; ?></th>
                                  </tr>
                                  <tr>
                                      <th>Tempat, Tgl Lahir</th>
                                      <th>: <?= $user['tempat_lahir'] . ', ' . $user['tgl_lahir'] ?></th>
                                  </tr>
                                  <tr>
                                      <th>Umur</th>
                                      <th>: <?= $user['umur']; ?></th>
                                  </tr>
                                  <tr>
                                      <th>Jenis Kelamin</th>
                                      <th>:<?= $user['jenis_kelamin']; ?></th>
                                  </tr>

                                  <tr>
                                      <th>Agama</th>
                                      <th>: <?= $user['agama']; ?></th>
                                  </tr>
                                  <tr>
                                      <th>No Hp</th>
                                      <th>: <?= $user['no_tlpn']; ?></th>
                                  </tr>
                                  <tr>
                                      <th>Asal SMP</th>
                                      <th>: <?= $user['asal_smp']; ?></th>
                                  </tr>
                                  <tr>
                                      <th>Kecamatan SMP</th>
                                      <th>: <?= $user['kecamatan_smp']; ?></th>
                                  </tr>

                                  <tr>
                                      <th>Kota SMP</th>
                                      <th>: <?= $user['kota_smp']; ?></th>
                                  </tr>

                                  <tr>
                                      <th>Provinsi SMP</th>
                                      <th>: <?= $user['provinsi_smp']; ?></th>
                                  </tr>

                                  <?php if ($user['nama_wali'] == null) { ?>
                                      <tr>
                                          <th>Nama Orang Tua</th>
                                          <th>: <?= $user['nama_ortu']; ?></th>
                                      </tr>
                                      <tr>
                                          <th>No Hp Orang Tua</th>
                                          <th>: <?= $user['no_tlpn_ortu']; ?></th>
                                      </tr>
                                      <tr>
                                          <th>Alamat Orang Tua</th>
                                          <th>: <?= $user['alamat']; ?></th>
                                      </tr>
                                  <?php } else { ?>
                                      <tr>
                                          <th>Nama Orang Tua</th>
                                          <th>: <?= $user['nama_ortu']; ?></th>
                                      </tr>
                                      <tr>
                                          <th>No Hp Orang Tua</th>
                                          <th>: <?= $user['no_tlpn_ortu']; ?></th>
                                      </tr>
                                      <tr>
                                          <th>Alamat Orang Tua</th>
                                          <th>: <?= $user['alamat']; ?></th>
                                      </tr>
                                      <tr>
                                          <th>Nama Wali</th>
                                          <th>: <?= $user['nama_wali']; ?></th>
                                      </tr>
                                      <tr>
                                          <th>Alamat Wali</th>
                                          <th>: <?= $user['alamat_wali']; ?></th>
                                      </tr>
                                      <tr>
                                          <th>No Hp Wali</th>
                                          <th>: <?= $user['no_wali']; ?></th>
                                      </tr>
                                  <?php } ?>

                                  <tr>
                                      <th>Sudah Mendaftar Di</th>
                                      <th>: <?= $user['sudah_daftar_di']; ?></th>
                                  </tr>


                              </table>
                              <br>
                              <br>
                              <a href="<?= base_url('user_ppdb/cetak_formulir') ?>" class="btn btn-success">
                                  Cetak Formulir
                              </a>

                          <?php } ?>

                      </div>
                  </div>
              </div>

          </div>

      </div>


  </div>
  </div>
  <!--Row-->
  </div>
  <!---Container Fluid-->
  </div>