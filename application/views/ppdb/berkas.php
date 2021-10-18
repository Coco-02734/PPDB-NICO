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
              <div class="card mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Data Berkas Siswa</h6>
                  </div>
                  <div class="card-header  align-items-center justify-content-between">
                      <?= $this->session->flashdata('message'); ?>
                      <div class="col-md-8">
                          <?= form_open_multipart('user_ppdb/upload_berkas') ?>
                          <div class="form-group">
                              <label for="nis">NIS Siswa</label>
                              <input type="text" class="form-control" id="nis" name="nis_siswa" value="<?= $user['nis_siswa']; ?>" readonly>
                          </div>
                          <br>
                          Upload Foto Pas
                          <div class="custom-file">

                              <input type="file" class="custom-file-input" id="image" name="image">
                              <label class="custom-file-label" for="image">Pilih File</label>
                          </div>
                          <span style="font-size: 90%; color: red;">*Upload foto pas menggunakan seragam osis, ukuran foto 4 x 6 cm</span>
                          <br>
                          <button type="submit" class="btn btn-primary">Kirim</button>
                          </form>
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