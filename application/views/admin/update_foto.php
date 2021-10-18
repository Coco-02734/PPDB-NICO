<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Galeri</li>
            <li class="breadcrumb-item active" aria-current="page">Foto</li>
        </ol>
    </div>

    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="ml-3 mb-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#foto">
                Tambah Foto
            </button>
        </div>
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>

                            <th scope="col">Tanggal Upload</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($foto as $m) : ?>
                            <tr>
                                <td><?= $i; ?></td>

                                <td><?= date('d F Y - G:i:s', $m['date_created']);  ?></td>
                                <td>
                                    <a href="<?= base_url('user_admin/delete_foto/' . $m['id']) ?>" class="badge badge-danger"> Delete </a>

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


<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="foto" tabindex="-1" aria-labelledby="fotoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fotoLabel">Tambah Foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('user_admin/upload_foto'); ?>

                <div class="form-group">
                    <label for="file">Masukan File Foto</label>
                    <input type="file" class="form-control-file" id="file" name="file">
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>