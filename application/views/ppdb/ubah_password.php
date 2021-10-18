  <!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">

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
                  <?= $this->session->flashdata('message'); ?>
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Ubah Password</h6>
                  </div>

                  <div class="col-md-8">

                      <div class="card-body">

                          <form method="POST" action="<?= base_url('user_ppdb/ubah_pass') ?>">
                              <div class="form-group">
                                  <label for="password">Password Lama</label>
                                  <input type="text" class="form-control" id="password" value="<?= $user['password']; ?>" readonly>
                              </div>
                              <div class="form-group">
                                  <label for="password">Password Baru</label>
                                  <input type="text" class="form-control" id="password" name="password" placeholder="Masukan Password Baru" required>
                              </div>
                              <button type="submit" class="btn btn-primary">Ubah</button>
                          </form>

                      </div>
                  </div>

              </div>
          </div>

      </div>

      <!--Row-->
  </div>
  <!---Container Fluid-->
  </div>