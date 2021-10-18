<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Berita</li>
            <li class="breadcrumb-item active" aria-current="page">Kegiatan</li>
        </ol>
    </div>

    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="ml-3 mb-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kegiatan">
                Tambah Kegiatan
            </button>
        </div>
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">judul</th>
                            <th scope="col">keterangan</th>
                            <th scope="col">Disetor Oleh</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($keg as $m) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $m['judul']; ?></td>
                                <td><?= $m['keterangan']; ?></td>
                                <td> <?= $m['disetor']; ?></td>

                                <td>
                                    <a href="<?= base_url('user_admin/delete_keg/' . $m['id']) ?>" class="badge badge-danger"> Delete </a>

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
<div class="modal fade" id="kegiatan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Info Kegiatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('user_admin/add_keg'); ?>
                <div class="form-group">
                    <label for="judul">Judul Kegiatan</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
                </div>
                <div class="custom-file mb-3">
                    <label for="image">Gambar</label>
                    <input type="file" class="custom-file-input" id="image" name="image" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="image">Pilih Gambar</label>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Buat</button>
                </form>
            </div>
        </div>
    </div>
</div>