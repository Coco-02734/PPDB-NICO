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

            <?= form_open_multipart('user_admin/update_berita_ppdb'); ?>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>

            <div class="form-group">
                <label for="isi_singkat">Isi Singkat</label>
                <input type="text" class="form-control" id="isi_singkat" name="isi_singkat" placeholder="Isi Setengah Paragraf Saja" required>
            </div>

            <div class="form-group">
                <label for="isi_berita">Isi Berita</label>
                <textarea class="form-control" id="isi_berita" name="isi" rows="10" required></textarea>

            </div>
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="image" name="image" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="image">Pilih Gambar</label>
            </div>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
    </div>
</div>