<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
    <?= $this->session->flashdata('message'); ?>

    <form method="POST" action="<?= base_url('ppdb') ?>" class="login100-form validate-form">
        <input type="hidden" name="gel" value="<?= $gel['gelombang']; ?>">
        <span class="login100-form-title p-b-49">
            Formulir Pendaftaran
            <p align="center">Gelombang <?= $gel['gelombang']; ?></p>
        </span>

        <div class="wrap-input100 ">
            <span class="label-input100">NISN Siswa</span>
            <input class="input100" type="text" name="nis_siswa" id="nis_siswa" placeholder="Masukan NISN Siswa">
            <span class="focus-input100" data-symbol="&#xf2c3;"></span>
            <?= form_error('nis_siswa', ' <small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="wrap-input100 validate-input m-b-23" data-validate="Masukan email aktif kamu !">
            <span class="label-input100">Email</span>
            <input class="input100" type="text" name="email" placeholder="Masukan Email">
            <span class="focus-input100" data-symbol="&#xf2c3;"></span>
        </div>
        <div class="wrap-input100 validate-input m-b-23" data-validate="Masukan Nama Lengkap !">
            <span class="label-input100">Nama Lengkap</span>
            <input class="input100" type="text" name="nama" placeholder="Masukan Nama Lengkap Siswa">
            <span class="focus-input100" data-symbol="&#xf206;"></span>
        </div>
        <div class="wrap-input100 validate-input m-b-23" data-validate="Masukan Nama Lengkap !">
            <span class="label-input100">Asal SMP</span>
            <input class="input100" type="text" name="asal_smp" placeholder="Masukan Asal SMP !">
            <span class="focus-input100" data-symbol="&#xf1d8;"></span>
        </div>

        <div class="wrap-input100 validate-input m-b-23" data-validate="Pilih Dulu !">
            <span class="label-input100">Jenis Kelamin</span>
            <select class="input100" type="text" name="jenis_kelamin">
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <span class="focus-input100" data-symbol="&#xf206;"></span>
        </div>
        <div class="wrap-input100 validate-input m-b-23" data-validate="Buat Password Akun Mu !">
            <span class="label-input100">Buat Passwrod</span>
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100" data-symbol="&#xf190;"></span>
        </div>

        <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button type="" class="login100-form-btn">
                    Daftar
                </button>
            </div>
        </div>

    </form>
    <br>
    <a href="<?= base_url('awal/pendaftaran') ?>">Kembali Ke Awal</a>
</div>