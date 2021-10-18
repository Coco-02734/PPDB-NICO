<!-- HASIL UN-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Hasil UN</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Hasil UN</li>

    </ol>
  </div>

  <!-- Row -->
  <div class="row">
    <!-- Datatables -->
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Hasil UN</h6>
        </div>
        <div class="table-responsive p-3">
          <a class="m-0 float-right btn btn-danger btn-sm" href="<?= base_url('user_admin/upload_hasil_un') ?>">Upload Hasil UN <i class="fas fa-chevron"></i></a>


          <?php echo $this->session->flashdata('notif') ?>

          <table class="table align-items-center table-flush" id="dataTable">
            <thead class="thead-light">
              <tr>

                <th>NISN</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Hasil</th>
                <th>Aksi</th>

              </tr>
            </thead>

            <tbody>

              <?php $i = 1; ?>
              <?php foreach ($hasil_un as $d) : ?>
                <tr>

                  <th><?php echo $d['nisn']; ?></th>
                  <th><?php echo $d['nama']; ?></th>
                  <th><?php echo $d['kelas']; ?></th>
                  <th><?php echo $d['hasil']; ?></th>
                  <th>
                    <a href="" class="badge badge-primary"> Edit </a>
                    <a href="<?= base_url('user_admin/hapus_un/' . $d['id']) ?>" class="badge badge-danger"> Delete </a>
                  </th>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>