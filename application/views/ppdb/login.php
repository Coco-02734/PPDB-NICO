<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
    <?= $this->session->flashdata('message'); ?>

    <?= form_open_multipart('auth'); ?>
    <span class="login100-form-title p-b-49">
        Login PPDB
    </span>

    <div class="wrap-input100 ">
        <span class="label-input100">NISN Siswa</span>
        <input class="input100" type="text" name="nis_siswa" id="nis_siswa" placeholder="Masukan NISN Siswa" value="<?= set_value('nis_siswa'); ?>">
        <?= form_error('nis_siswa', ' <small class="text-danger pl-3">', '</small>'); ?>
        <span class="focus-input100" data-symbol="&#xf2c3;"></span>
    </div>

    <div class="wrap-input100 ">
        <span class="label-input100">Buat Passwrod</span>
        <input class="input100" type="password" name="password" id="password" placeholder="Password">
        <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
        <span class="focus-input100" data-symbol="&#xf190;"></span>
    </div>

    <br>
    <br>

    <div class="container-login100-form-btn">
        <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button type="submit" class="login100-form-btn">
                Login Peserta
            </button>
        </div>
    </div>
    </form>
    <br>
    <br>
    <a href="<?= base_url('awal/pendaftaran') ?>">Kembali Ke Awal</a>
</div>