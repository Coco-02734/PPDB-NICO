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
            <?= form_open_multipart('user_admin/terjawab') ?>

            <div class="form-group">
                <label for="nama">Penanya</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $kontak['nama']; ?>" readonly>
                <input type="hidden" class="form-control" name="id" value="<?= $kontak['id']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="email">Email Tujuan</label>
                <input type="text" class="form-control" id="email" name="email" value="<?= $kontak['email']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="tansya">Yang Ditanyakan</label>
                <textarea class="form-control" id="tansya" rows="3" readonly><?= $kontak['isi']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="isi_berifta">Isi Pesan / Jawaban</label>
                <textarea class="form-control" id="isi_berifta" name="isinya" rows="10" required></textarea>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
</div>
</div>