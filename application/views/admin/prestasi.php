<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Berita</li>
            <li class="breadcrumb-item active" aria-current="page">Prestasi</li>
        </ol>
    </div>

    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="ml-3 mb-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#prestasi">
                Tambah Prestasi
            </button>
        </div>
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Kejuaraan</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pres as $m) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $m['nama']; ?></td>
                                <td><?= $m['kelas']; ?></td>
                                <td> <?= $m['kejuaraan']; ?></td>
                                <td> <?= $m['tahun']; ?></td>

                                <td>
                                    <a href="<?= base_url('user_admin/delete_pres/' . $m['id']) ?>" class="badge badge-danger"> Delete </a>

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
</div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="prestasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Info Prestasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('user_admin/add_pres'); ?>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" class="form-control" id="kelas" name="kelas">
                </div>
                <div class="form-group">
                    <label for="kejuaraan">Kejuaraan</label>
                    <input type="text" class="form-control" id="kejuaraan" name="kejuaraan">
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="text" class="form-control" id="tahun" name="tahun">
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>