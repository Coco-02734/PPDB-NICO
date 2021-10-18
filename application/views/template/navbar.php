<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title ?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <script src="https://kit.fontawesome.com/be484d4171.js" crossorigin="anonymous"></script>
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?= base_url('assets/') ?>css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?= base_url('assets/') ?>css/style.min.css" rel="stylesheet">
</head>

<body class="grey lighten-3">

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="<?= base_url('awal') ?>">
                    <strong class="blue-text"><b>PPDB</b> SMA INSTITUT INDONESIA</strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        </li>
                    </ul>

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-mr-auto">
                        <li class="nav-item">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect" href="<?= base_url('awal') ?>">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="<?= base_url('awal/info') ?>">Info PPDB</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="<?= base_url('awal/pendaftaran') ?>">Pendaftaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="<?= base_url('auth') ?>">Login PPDB</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="<?= base_url('awal/kontak') ?>">Kontak</a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
        <!-- Navbar -->
    </header>