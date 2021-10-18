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
          <div class="col-lg-12">
              <?= $this->session->flashdata('message'); ?>
              <div class="card mb-4">

                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
                  </div>
                  <div class="card-header  align-items-center justify-content-between">
                      <?php
                        if ($user['benar'] == 0) {
                        ?>
                          <div class="col-md-8">
                              <?= form_open_multipart('user_ppdb/update_data') ?>
                              <div class="form-group">
                                  <label for="nis">NIS Siswa</label>
                                  <input type="text" class="form-control" id="nis" name="nis_siswa" value="<?= $user['nis_siswa']; ?>" readonly>
                              </div>
                              <div class="form-group">
                                  <label for="nama">Nama Lengkap</label>
                                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>" readonly>
                              </div>
                              <div class="form-group">
                                  <label for="status">Status Pendaftar</label>
                                  <select type="text" class="form-control" id="status" name="status" required>
                                      <option selected value="<?= $user['status']; ?>"><?= $user['status']; ?></option>
                                      <option value="UMUM">UMUM</option>
                                      <option value="Alumni SMP Institut Indoensia Tahun Pelajaran 2019/2020">Alumni SMP Institut Indoensia Tahun Pelajaran 2019/2020</option>
                                  </select>
                                  <!-- <label style="color:red;">*Untuk syarat kolektif khusus alumni SMP Institut Indonesia berlaku hingga tanggal 30 Mei 2020</label> -->

                              </div>
                              <div class="form-group">
                                  <label for="tempat_lahir">Tempat Lahir</label>
                                  <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $user['tempat_lahir']; ?>" required>
                              </div>
                              <div class="form-group">
                                  <label for="tgl_lahir">Tanggal Lahir</label>
                                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $user['tgl_lahir']; ?>" required>
                              </div>
                              <div class="form-group">
                                  <label for="umur">Umur pada tgl 13 Juli 2020</label>
                                  <input type="text" class="form-control" id="umur" name="umur" value="<?= $user['umur']; ?>" required>
                              </div>
                              <div class="form-group">
                                  <label for="jenis_kelamin">Jenis Kelamin</label>
                                  <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $user['jenis_kelamin']; ?>" readonly>
                              </div>


                              <div class="form-group">
                                  <label for="agama">Agama</label>
                                  <select type="text" class="form-control" id="agama" name="agama" required>
                                      <option selected value="<?= $user['agama']; ?>"><?= $user['agama']; ?></option>
                                      <option value="Islam">Islam</option>
                                      <option value="Kristen">Kriten</option>
                                      <option value="Katolik">Katolik</option>
                                      <option value="Budha">Budha</option>
                                      <option value="Hindu">Hindu</option>
                                  </select>
                                  <div class="form-group">
                                      <label for="no_tlpn">No Hp</label>
                                      <input type="text" class="form-control" id="no_tlpn" name="no_tlpn" value="<?= $user['no_tlpn']; ?>" required>
                                  </div>
                              </div>
                              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                  <h6 class="m-0 font-weight-bold text-primary">Data Sekolah</h6>
                              </div>
                              <div class="form-group">
                                  <label for="asal_smp">Asal SMP</label>
                                  <input type="text" class="form-control" id="asal_smp" name="asal_smp" value="<?= $user['asal_smp']; ?>" required>
                              </div>
                              <div class="form-group">
                                  <label for="kecamatan_smp">Kecamatan</label>
                                  <input type="text" class="form-control" id="kecamatan_smp" name="kecamatan_smp" value="<?= $user['kecamatan_smp']; ?>" required>
                              </div>
                              <div class="form-group">
                                  <label for="kota_smp">Kabupaten/Kota</label>
                                  <input type="text" class="form-control" id="kota_smp" name="kota_smp" value="<?= $user['kota_smp']; ?>" required>
                              </div>
                              <div class="form-group">
                                  <label for="provinsi_smp">Provinsi</label>
                                  <input type="text" class="form-control" id="provinsi_smp" name="provinsi_smp" value="<?= $user['provinsi_smp']; ?>" required>
                              </div>


                              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                  <h6 class="m-0 font-weight-bold text-primary">Data Orang Tua</h6>
                              </div>
                              <div class="form-group">
                                  <label for="nama_ortu">Nama Orang Tua</label>
                                  <input type="text" class="form-control" id="nama_ortu" name="nama_ortu" value="<?= $user['nama_ortu']; ?>">
                              </div>
                              <div class="form-group">
                                  <label for="alamat">Alamat Orang Tua</label>
                                  <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $user['alamat']; ?></textarea>
                              </div>
                              <div class="form-group">
                                  <label for="no_tlpn_ortu">Nomor Hp Orang Tua</label>
                                  <input type="text" class="form-control" id="no_tlpn_ortu" name="no_tlpn_ortu" value="<?= $user['no_tlpn_ortu']; ?>">
                              </div>
                              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                  <h6 class="m-0 font-weight-bold text-primary">Apabali Calon Peserta Didik Ikut Wali</h6>
                              </div>
                              <div class="form-group">
                                  <label for="nama_wali">Nama wali</label>
                                  <input type="text" class="form-control" id="nama_wali" name="nama_wali" value="<?= $user['nama_wali']; ?>">
                              </div>
                              <div class="form-group">
                                  <label for="alamat_wali">Alamat wali</label>
                                  <textarea class="form-control" id="alamat_wali" name="alamat_wali" rows="3"><?= $user['alamat_wali']; ?></textarea>
                              </div>
                              <div class="form-group">
                                  <label for="no_wali">Nomor Hp wali</label>
                                  <input type="text" class="form-control" id="no_wali" name="no_wali" value="<?= $user['no_wali']; ?>">
                              </div>
                              <hr>
                              <div class="form-group">
                                  <label for="sudah_daftar_di">Sudah Mendaftar Di</label>
                                  <input type="text" class="form-control" id="sudah_daftar_di" name="sudah_daftar_di" value="<?= $user['sudah_daftar_di']; ?>">
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="benar" name="benar" value="1" required>
                                  <label class="form-check-label" for="benar" style="color:crimson;">Saya telah mengisi data dengan benar</label>
                              </div>
                              <br>
                              <a class="btn btn-primary" style="color : white;" data-toggle="modal" data-target="#myModal">Submit</a>
                              <!-- Modal -->
                              <div class="modal fade" id="myModal" role="dialog">
                                  <div class="modal-dialog">
                                      <!-- Modal content-->
                                      <div class="modal-content">

                                          <div class="modal-body">
                                              <p>Anda yakin akan simpan permanen data ini? Pastikan data kamu benar !</p>
                                              <p>Data yang telah disimpan tidak bisa diedit.</p>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
                                              <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                                          </div>
                                      </div>

                                  </div>
                              </div>
                              </form>
                          </div>

                      <?php } else { ?>
                          <div class="alert alert-danger" role="alert">Data anda telah disimpan permanen.</div>
                          <div class="col-md-8">

                              <div class="form-group">
                                  <label for="nis">NIS Siswa</label>
                                  <input type="text" class="form-control" id="nis" name="nis_siswa" value="<?= $user['nis_siswa']; ?>" readonly>
                              </div>
                              <div class="form-group">
                                  <label for="nama">Nama Lengkap</label>
                                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>" readonly>
                              </div>
                              <div class="form-group">
                                  <label for="nama">Status Pendaftar</label>
                                  <input type="text" class="form-control" id="status" name="status" value="<?= $user['status']; ?>" readonly>
                              </div>
                              <div class="form-group">
                                  <label for="tempat_lahir">Tempat Lahir</label>
                                  <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $user['tempat_lahir']; ?>" readonly>
                              </div>
                              <div class="form-group">
                                  <label for="tgl_lahir">Tanggal Lahir</label>
                                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $user['tgl_lahir']; ?>" readonly>
                              </div>
                              <div class="form-group">
                                  <label for="umur">Umur pada tgl 13 Juli 2020</label>
                                  <input type="text" class="form-control" id="umur" name="umur" value="<?= $user['umur']; ?>" readonly>
                              </div>
                              <div class="form-group">
                                  <label for="jenis_kelamin">Jenis Kelamin</label>
                                  <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $user['jenis_kelamin']; ?>" readonly>
                              </div>


                              <div class="form-group">
                                  <label for="agama">Agama</label>
                                  <select type="text" class="form-control" id="agama" name="agama" readonly>
                                      <option selected value="<?= $user['agama']; ?>"><?= $user['agama']; ?></option>
                                      <option value="Islam">Islam</option>
                                      <option value="Kristen">Kriten</option>
                                      <option value="Katolik">Katolik</option>
                                      <option value="Budha">Budha</option>
                                      <option value="Hindu">Hindu</option>
                                  </select>
                                  <div class="form-group">
                                      <label for="no_tlpn">No Hp</label>
                                      <input type="text" class="form-control" id="no_tlpn" name="no_tlpn" value="<?= $user['no_tlpn']; ?>" readonly>
                                  </div>
                              </div>
                              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                  <h6 class="m-0 font-weight-bold text-primary">Data Sekolah</h6>
                              </div>
                              <div class="form-group">
                                  <label for="asal_smp">Asal SMP</label>
                                  <input type="text" class="form-control" id="asal_smp" name="asal_smp" value="<?= $user['asal_smp']; ?>" readonly>
                              </div>
                              <div class="form-group">
                                  <label for="kecamatan_smp">Kecamatan</label>
                                  <input type="text" class="form-control" id="kecamatan_smp" name="kecamatan_smp" value="<?= $user['kecamatan_smp']; ?>" readonly>
                              </div>
                              <div class="form-group">
                                  <label for="kota_smp">Kabupaten/Kota</label>
                                  <input type="text" class="form-control" id="kota_smp" name="kota_smp" value="<?= $user['kota_smp']; ?>" readonly>
                              </div>
                              <div class="form-group">
                                  <label for="provinsi_smp">Provinsi</label>
                                  <input type="text" class="form-control" id="provinsi_smp" name="provinsi_smp" value="<?= $user['provinsi_smp']; ?>" readonly>
                              </div>

                              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                  <h6 class="m-0 font-weight-bold text-primary">Data Orang Tua</h6>
                              </div>
                              <div class="form-group">
                                  <label for="nama_ortu">Nama Orang Tua</label>
                                  <input type="text" class="form-control" id="nama_ortu" name="nama_ortu" value="<?= $user['nama_ortu']; ?>" readonly>
                              </div>
                              <div class="form-group">
                                  <label for="alamat">Alamat Orang Tua</label>
                                  <textarea class="form-control" id="alamat" name="alamat" rows="3" readonly><?= $user['alamat']; ?></textarea>
                              </div>
                              <div class="form-group">
                                  <label for="no_tlpn_ortu">Nomor Hp Orang Tua</label>
                                  <input type="text" class="form-control" id="no_tlpn_ortu" name="no_tlpn_ortu" value="<?= $user['no_tlpn_ortu']; ?>" readonly>
                              </div>
                              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                  <h6 class="m-0 font-weight-bold text-primary">Apabali Calon Peserta Didik Ikut Wali</h6>
                              </div>
                              <div class="form-group">
                                  <label for="nama_wali">Nama wali</label>
                                  <input type="text" class="form-control" id="nama_wali" name="nama_wali" value="<?= $user['nama_wali']; ?>" readonly>
                              </div>
                              <div class="form-group">
                                  <label for="alamat_wali">Alamat wali</label>
                                  <textarea class="form-control" id="alamat_wali" name="alamat_wali" rows="3" readonly><?= $user['alamat_wali']; ?></textarea>
                              </div>
                              <div class="form-group">
                                  <label for="no_wali">Nomor Hp wali</label>
                                  <input type="text" class="form-control" id="no_wali" name="no_wali" value="<?= $user['no_wali']; ?>" readonly>
                              </div>
                              <hr>
                              <div class="form-group">
                                  <label for="sudah_daftar_di">Sudah Mendaftar Di</label>
                                  <input type="text" class="form-control" id="sudah_daftar_di" name="sudah_daftar_di" value="<?= $user['sudah_daftar_di']; ?>" readonly>
                              </div>

                              <br>


                          </div>
                      <?php } ?>
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