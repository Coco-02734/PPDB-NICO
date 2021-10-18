<div class="card">
    <div class="table-responsive">
        <br>
        <h3 align="center">Daftar Siswa Terkonfirmasi Data </h3>

        <br>
        <br>

        <table class="table" border="1">
            <thead class="thead-dark">
                <tr>

                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Asal SMP</th>
                    <th scope="col">Gelombang</th>
                    <th scope="col">No Pendaftaran</th>


                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($siswa as $m) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $m['nama']; ?></td>
                        <td><?= $m['nis_siswa']; ?></td>
                        <td><?= $m['jenis_kelamin']; ?></td>
                        <td><?= $m['asal_smp']; ?></td>
                        <td><?= $m['gel']; ?></td>
                        <td>000<?= $m['id']; ?></td>
                    </tr>
            </tbody>
            <?php $i++; ?>
        <?php endforeach; ?>
        </table>
    </div>
</div>
</body>