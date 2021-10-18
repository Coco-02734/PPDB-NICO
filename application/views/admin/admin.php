<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?= base_url('assets/') ?>img/logo/logo.png" rel="icon">
    <title>Admin Instindo</title>
    <link href="<?= base_url('assets/') ?>admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/') ?>admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/') ?>admin/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-login" style="background-image: url('<?= base_url('assets/') ?>admin/images/taman.jpg')">
    <div class="container-login">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card shadow-sm my-5">\
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                        <img src="<?= base_url('assets/') ?>admin/images/logoii.png" style="height: 100px;"></img>
                                    </div>
                                    <br />
                                    <!-- cek pesan notifikasi -->

                                    <?= $this->session->flashdata('message'); ?>

                                    <form method="post" action="<?= base_url('admin') ?>">
                                        <div class="form-group">
                                            <td>Username</td>
                                            <td>:</td>
                                            <td><input type="text" name="email" id="email" placeholder="Masukkan Email" class="form-control" value="<?= set_value('email'); ?>"></td>
                                            <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <td>Password</td>
                                            <td>:</td>
                                            <td><input type="password" name="password" id="password" placeholder="Masukkan password" class="form-control"></td>
                                            <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><input type="submit" value="LOGIN" class="btn btn-primary btn-block"></td>
                                        </tr>
                                        </table>
                                    </form>
</body>

</html>