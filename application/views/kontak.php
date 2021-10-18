<!--Main layout-->
<main class="mt-5 pt-5">
    <div class="container">

        <section class="section contact">
            <!-- container start -->
            <div class="container">
                <br>
                <br>

                <div class="row">
                    <div class="col-md-4">
                        <!-- address start -->
                        <div class="address-block">
                            <!-- Location -->
                            <div class="media">
                                <i class="fa fa-map-o fa-2x">&nbsp&nbsp</i>
                                <div class="media-body">
                                    <h3>Lokasi</h3>
                                    <p> Jl. Maluku No.25, Karangtempel.
                                        <br>Kec. Semarang Tim., Kota Semarang, Jawa Tengah 50232</p>
                                </div>
                            </div>
                            <!-- Phone -->
                            <div class="media">
                                <i class="fa fa-phone fa-2x">&nbsp&nbsp</i>
                                <div class="media-body">
                                    <h3>Telepon</h3>
                                    <p>
                                        (024) 8318433</p>
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="media">
                                <i class="fa fa-envelope-o fa-2x">&nbsp&nbsp</i>
                                <div class="media-body">
                                    <h3>Email</h3>
                                    <p>smainstindo_smg@yahoo.com</p>
                                </div>
                            </div>
                        </div>
                        <!-- address end -->
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="contact-area">
                            <div class="section-title">
                                <h3>Hubungi
                                    <span>Kami</span>
                                </h3>
                            </div>

                            <?= $this->session->flashdata('message'); ?>

                            <?= form_open_multipart('awal/kirim_tanya') ?>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required="Harap isi bidang ini">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" required="Harap Isi Bidang Ini">
                            </div>


                            <div class="form-group">
                                <label for="pertanyaan">Pertanyaan</label>
                                <textarea class="form-control" id="pertanyaan" name="isi" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- contact form end -->
    </div>

    <!-- container end -->
    </section>
    <hr>
    <!--====  End of Contact Form  ====-->

    <!--================================
=            Google Map            =
=================================-->
    <section id="section-map" class="clearfix">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1445119117684!2d110.43438321431795!3d-6.992254870420484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ca322163f9f%3A0x5ff03d6e1fa8ddd1!2sSMA%20Institut%20Indonesia!5e0!3m2!1sid!2sid!4v1575788561288!5m2!1sid!2sid" width="100%" height="480" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>

</main>
</div>