<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user_ppdb') ?>">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url('assets/admin/') ?>img/logo/logoii.png">
        </div>
        <div class="sidebar-brand-text mx-3">PPDB SMA Intsindo SMG </div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('user_ppdb') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Halaman Utama</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Data Siswa
    </div>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user_ppdb/data') ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Edit Data</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Cetak Formulir Daftar
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user_ppdb/pembayaran') ?>">
            <i class="fas fa-fw fa-print"></i>
            <span>Halaman Cetak</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="version">versi 2.3v</div>
</ul>
<!-- Sidebar -->
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
            <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <ul class="navbar-nav ml-auto">

                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/gambar/foto_siswa/') . $user['image']; ?>" style="max-width: 60px">
                        <span class="ml-2 d-none d-lg-inline text-white small"><?= $user['nama']; ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                        <a class="dropdown-item" href="<?= base_url('user_ppdb/ubah_password') ?>">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Edit Password
                        </a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- Topbar -->