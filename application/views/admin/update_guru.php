<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Guru</li>
            <li class="breadcrumb-item active" aria-current="page">Guru</li>
        </ol>
    </div>

    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="ml-3 mb-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#guru">
                Tambah Guru atau Karyawan
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
                            <th scope="col">Title</th>
                            <th scope="col">Status</th>
                            <th scope="col">Tanggal Upload</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($guru as $m) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $m['nama']; ?></td>
                                <td><?= $m['title']; ?></td>
                                <td><?php
                                    if ($m['user'] == 1) {
                                        echo "Guru";
                                    } else {
                                        echo "Karyawan";
                                    }
                                    ?></td>
                                <td><?= date('d F Y - G:i:s', $m['date_created']);  ?></td>
                                <td>
                                    <a href="<?= base_url('user_admin/delete_guru/' . $m['id']) ?>" class="badge badge-danger"> Delete </a>

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
<div class="modal fade" id="guru" tabindex="-1" aria-labelledby="guruLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="guruLabel">Tambah Data Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('user_admin/upload_guru'); ?>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Misalkan Guru Matematika...">
                </div>
                <div class="form-group">
                    <label for="inputState">Status</label>
                    <select id="inputState" class="form-control" name="user">
                        <option selected>Pilih salah satu...</option>
                        <option value="1">Guru</option>
                        <option value="2">Karyawan</option>
                    </select>
                </div>
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