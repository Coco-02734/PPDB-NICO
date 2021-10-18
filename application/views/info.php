<!--Main layout-->
<main class="mt-4 pt-5">
    <div class="container">
        <!--Section: Cards-->
        <section class="pt-5">

            <!-- Heading & Description -->
            <div class="wow fadeIn">
                <!--Section heading-->
                <h2 class="h1 text-center mb-5">Info PPDB</h2>
                <!--Section description-->
                <p class="text-center">Sekitar info-info PPDB di SMA INSTITUT INDONESIA</p>
                <br>
                <br>
            </div>
            <!-- Heading & Description -->

            <!--Grid row-->
            <div class="row wow fadeIn">
                <?php $i = 1; ?>
                <?php foreach ($ppdb as $d) : ?>
                    <!--Grid column-->
                    <div class="col-lg-5 col-xl-4 mb-4">
                        <!--Featured image-->
                        <div class="view overlay rounded z-depth-1-half">
                            <div class="view overlay">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <img class="embed-responsive-item" src="../assets/gambar/<?= $d['image']; ?>"></img>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                        <h3 class="mb-3 font-weight-bold dark-grey-text">
                            <strong><?= $d['judul']; ?></strong>
                        </h3>
                        <p class="grey-text"><?= $d['isi_singkat']; ?></p>
                        <p>
                            <strong><?= date('d F Y', $d['waktu']); ?></strong>
                        </p>
                        <a href="<?= base_url('awal/berita_ppdb/') . $d['id']; ?>" class="btn btn-primary btn-md">Baca Selengkapnya
                            <i class="fas fa-play ml-2"></i>
                        </a>
                    </div>
                    <!--Grid column-->
                    <?php $i++; ?>
                <?php endforeach; ?>
            </div>
            <!--Grid row-->

            <hr class="mb-5">

            <!--Grid row-->
            <div class="row mt-3 wow fadeIn">


                <hr class="mb-5">

                <!--Pagination-->
                <nav class="d-flex justify-content-center wow fadeIn">
                    <ul class="pagination pg-blue">
        </section>
        <!--Section: Cards-->

    </div>
</main>
<!--Main layout-->