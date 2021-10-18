<!--Main layout-->
<main class="mt-5 pt-5">
    <div class="container">

        <!--Section: Jumbotron-->
        <img src="<?= base_url('assets/gambar/ppdb1.jpg') ?>" class="img-fluid">
        </img>
        <!--Section: Jumbotron-->
        <hr class="my-5">
        <!-- Sambutan KEPSEK -->
        <section class="story">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src="<?= base_url('assets/gambar/konten/kepsek.jpg') ?>" class="responsive" width="100%">
                    </div>
                    <div class="col-md-8">
                        <div class="story-content">
                            <h2 class="font-weight-bold">Sambutan Kepala Sekolah</h2>
                            <h6 class="tagline">Assalamu’alaikum Warahmatullahi Wabarakatuh</h6>

                            <p>Selamat datang di Website resmi SMA Institut Indonesia. Dalam perkembangan era globalisasi dan pesatnya
                                kemajuan teknologi dan informasi ini, tidak dapat dipungkiri bahwa keberadaan sebuah website untuk dunia
                                pendidikan khususnya sekolah, sangatlah penting.</p>

                            <p>Website terbaru dan yang telah di kembangkan oleh SMA Institut Indonesia, merupakan pengembangan dari
                                website yang lama. Website SMA Instindo akan memberi gambaran sekilas tentang program-program dalam
                                upaya meningkatkan kualitas pendidikan, kegiatan-kegiatan sekolah, dan informasi-informasi terkini di
                                SMA Instindo.</p>

                            <p>Akhir kata tak lupa saya ucapkan terima kasih kepada pengelola web yang telah memperbaiki web sekolah,
                                serta seluruh guru, karyawan dan siswa SMA Instindo sehingga website sekolah menjadi lebih berguna dan
                                bermanfaat.</p>


                            <h6>
                                <p>Drs.H.Wahyana, M.Si</p>
                            </h6>

                            <h6 class="tagline">Wassalamualaikum Warahmatullahi Wabarakatuh.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="my-5">
        <!-- Konten -->
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Kembali ke WEB</h5>
                    <br>
                    <br>
                    <img src="<?= base_url('assets/gambar/konten/logo_ii.png') ?>" class="card-img-top" alt="...">
                    <br>
                    <br>
                    <br>
                    <center><a href="https://smainstindosmg.sch.id/" type="button" class="btn btn-info">Hubungi Kami</a></center>
                </div>
            </div>
            <div class="card">
                <?php foreach ($ppdb as $b) : ?>
                    <img src="<?= base_url('assets/gambar/') . $b['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $b['judul']; ?></h5>
                        <center><a href="<?= base_url('awal/berita_ppdb/') . $b['id']; ?>" type="button" class="btn btn-info">Selengkapnya</a></center>
                        <p class="card-text"><small class="text-muted">Post Date : <?= date('d F Y', $b['waktu']); ?></small></p>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="card">
                <br>
                <br>
                <center><i class="fa fa-phone fa-5x"></i></center>
                <center>
                    <div class="card-body">
                        <h5 class="card-title">Kontak</h5>
                        <p class="card-text">Masih bingung dengan PPDB?</p>
                        <br>
                        <a href="<?= base_url('awal/kontak') ?>" type="button" class="btn btn-info">Hubungi Kami</a>
                    </div>
            </div>
        </div>
        </center>
        <!-- Selesai Konten -->
    </div>
</main>

<!--Main layout-->