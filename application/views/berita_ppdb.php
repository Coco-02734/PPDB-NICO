<!--Main layout-->
<main class="mt-5 pt-5">
    <div class="container">

        <!--Section: Post-->
        <section class="mt-4">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-8 mb-4">
                    <?php foreach ($berita as $b) : ?>
                        <!--Featured Image-->
                        <div class="card mb-4 wow fadeIn">

                            <img src="<?= base_url('assets/gambar/') . $b['image']; ?>" class="img-fluid" alt="">

                        </div>
                        <!--/.Featured Image-->

                        <!--Card-->
                        <div class="card mb-4 wow fadeIn">



                        </div>
                        <!--/.Card-->

                        <!--Card-->
                        <div class="card mb-4 wow fadeIn">

                            <!--Card content-->
                            <div class="card-body">

                                <p class="h5 my-4"><?= $b['judul']; ?> </p>


                                <blockquote class="blockquote">
                                    <p class="mb-0">Post Date</p>
                                    <footer class="blockquote-footer">
                                        <?= date('d F Y', $b['waktu']); ?>
                                    </footer>
                                </blockquote>

                                <p class="h5 my-4"></p>

                                <p><?= $b['isi']; ?></p>



                            </div>

                        </div>



                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <!--Card-->
                    <div class="card mb-4 wow fadeIn">

                        <div class="card-header">Berita atau Pengumuman lain?</div>

                        <!--Card content-->
                        <div class="card-body">
                            <?php
                            $koneksi = mysqli_connect("localhost", "smainsti_instindo", "Instindojaya123", "smainsti_instindo");
                            $data = mysqli_query($koneksi, "select * from ppdb ORDER BY id DESC limit 4");
                            while ($meong = mysqli_fetch_array($data)) {
                            ?>
                                <ul class="list-unstyled">
                                    <li class="media">
                                        <img class="d-flex mr-3" src="<?= base_url('assets/gambar/') . $meong['image']; ?>" alt="Generic placeholder image" width="100">
                                        <div class="media-body">
                                            <a href="<?= base_url('awal/berita_ppdb/') . $meong['id']; ?>">
                                                <h5 class="mt-0 mb-1 font-weight-bold"><?= $meong['judul']; ?></h5>
                                            </a>
                                            Post Date : <?= date('d F Y', $meong['waktu']); ?>
                                        </div>
                                    </li>

                                </ul>
                            <?php
                            }
                            ?>
                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Post-->
    <?php endforeach ?>
    </div>
</main>
<!--Main layout-->