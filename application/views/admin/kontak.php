<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            *01 January 1970 = Belum Terjawab
            <div class="card">
                <?= $this->session->flashdata('message'); ?>

                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>

                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Pertanyaan</th>
                                <th scope="col">waktu</th>
                                <th scope="col">waktu terjawab</th>
                                <th scope="col">Aksi</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($kontak as $m) : ?>
                                <tr>

                                    <td><?= $m['nama']; ?></td>
                                    <td><?= $m['email']; ?></td>
                                    <td> <?= $m['isi']; ?></td>
                                    <td><?= date('d F Y', $m['waktu']); ?></td>
                                    <td><?= date('d F Y', $m['waktu_terjawab']); ?></td>

                                    <td>
                                        <a href="<?= base_url('user_admin/hapus_kontak/' . $m['id']) ?>" class="badge badge-danger"> Delete </a>
                                        <a href="<?= base_url('user_admin/jawab/' . $m['id']) ?>" class="badge badge-success"> Jawab </a>
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
