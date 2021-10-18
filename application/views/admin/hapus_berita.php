<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Data Siswa</li>
            <li class="breadcrumb-item active" aria-current="page">Pesan Alumni</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <a href="<?= base_url('user_admin/update_ppdb') ?>" class="btn btn-outline-primary">Update Berita</a>
            <br>
            <br>

            <div class="card">

                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>

                                <th scope="col">Judul</th>
                                <th scope="col">Isi Singkat</th>
                                <th scope="col">Tanggal Update</th>
                                <th scope="col">Aksi</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($ppdb as $m) : ?>
                                <tr>

                                    <td><?= $m['judul']; ?></td>
                                    <td><?= $m['isi_singkat']; ?></td>
                                    <td><?= date('d F Y', $m['waktu']); ?></td>

                                    <td>
                                        <a href="<?= base_url('user_admin/edit_berita/' . $m['id']) ?>" class="badge badge-primary"> Edit </a>
                                        <a href="<?= base_url('user_admin/hapus_berita_ok/' . $m['id']) ?>" class="badge badge-danger"> Delete </a>
                                    </td>
                                </tr>
                        </tbody>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>