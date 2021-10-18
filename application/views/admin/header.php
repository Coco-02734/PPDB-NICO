<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?= base_url('assets/admin/') ?>img/logo/logoii.png" rel="icon">
    <title><?= $title ?></title>
    <link href="<?= base_url('assets/admin/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/admin/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/admin/') ?>css/ruang-admin.min.css" rel="stylesheet">

</head>

<body id="page-top">
      <?php
    date_default_timezone_set('Asia/Jakarta');
    ?>
    <br />


    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <img src="<?= base_url('assets/admin/') ?>img/logo/logoii.png">
                </div>

                <div class="sidebar-brand-text mx-3">Admin II</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('user_admin') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Kesiswaan
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user_admin/hasil_un') ?>">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span>Input Hasil Kelulusan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user_admin/pesan_alumni') ?>">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span>Pesan Alumni</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#halamanppdb" aria-expanded="true" aria-controls="halamanppdb">
                    <i class="fa fa-sitemap"></i>
                    <span>Halaman PPDB</span>
                </a>
                <div id="halamanppdb" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Halaman PPDB</h6>
                        <a class="collapse-item" href="<?= base_url('user_admin/data_siswa') ?>">Data Siswa Full </a>
                        <a class="collapse-item" href="<?= base_url('user_admin/verify_data_siswa') ?>">Konfirmasi Data Siswa</a>
                        <a class="collapse-item" href="<?= base_url('user_admin/verify_siswa') ?>">Siswa Terkonfirmasi</a>
                        <a class="collapse-item" type="button" data-toggle="modal" data-target="#exampleModal">Ubah Gelombang</a>

                    </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user_admin/kontak') ?>">
                    <i class="fas fa-question"></i>
                    <span>Pertanyaan User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true" aria-controls="collapseTable">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Konten WEB</span>
                </a>
                <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Konten WEB</h6>
                        <a class="collapse-item" href="<?= base_url('user_admin/hapus_berita') ?>">Kelola Berita PPDB</a>
                        <a class="collapse-item" href="<?= base_url('user_admin/berita_web') ?>">Update Berita</a>
                        <a class="collapse-item" href="<?= base_url('user_admin/kegiatan') ?>">Update Kegiatan</a>
                        <a class="collapse-item" href="<?= base_url('user_admin/prestasi') ?>">Update Prestasi</a>
                         <a class="collapse-item" href="<?= base_url('user_admin/updateVideo') ?>">Update Video</a>
                         <a class="collapse-item" href="<?= base_url('user_admin/updateFoto') ?>">Update Foto</a>

                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Guru / Karyawan
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true" aria-controls="collapsePage">
                    <i class="fas fa-fw fa-columns"></i>
                    <span>Data Guru</span>
                </a>
                <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                         <h6 class="collapse-header">Data Guru dan Karyawan</h6>
                        <a class="collapse-item" href="<?= base_url('user_admin/updateGuru') ?>">Data dan Update</a>
                    </div>
                </div>
            </li>
             <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Lainnya
            </div>
            <li class="nav-item">
                <a class="nav-link" href="https://drive.google.com/drive/folders/1NNtFMjSHoPb1J1Wp5WHGLXLbCGIRoAx3?usp=sharing">
                    <i class="fas fa-question"></i>
                    <span>Video Tutorial</span>
                </a>
            </li>

            <hr class="sidebar-divider">
            <div class="version" id="version-ruangadmin"></div>
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
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?" aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">


                            <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/admin/') ?>img/boy.png" style="max-width: 60px">
                                <span class="ml-2 d-none d-lg-inline text-white small"><?= $user['nama']; ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('admin/logout') ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->
              