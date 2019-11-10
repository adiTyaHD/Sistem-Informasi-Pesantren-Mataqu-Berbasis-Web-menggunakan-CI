<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/style.css">

    <title>
        <?= $title; ?>
    </title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/') ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<header class="blog-header py-2">
    <div class="row flex-nowrap align-top align-items-center">
        <div class="col-2 offset-1 pt-1 text-left ">
            <i class="fas fa-phone fa-sm icon-header"></i> &nbsp;Informasi Sekolah
            <p style="margin-top: 8px; margin-left: 10px;">+62 21-8475880</p>
        </div>
        <div class="col-2 pt-1">
            <i class="fas fa-headset fa-sm"></i> &nbsp;FAX
            <p style="margin-top: 8px;"> 8475830</p>
        </div>
        <div class="col-5 offset-3 pt-2 socmed-header">
            Social Media :
            <a class="text-dark" href="">
                <i class="fab fa-fw fa-twitter-square fa-lg"></i></a>
            <a class="text-dark" href="">
                <i class="fab fa-fw fa-facebook-square fa-lg"></i></a>
            <a class="text-dark" href="">
                <i class="fab fa-fw fa-instagram fa-lg"></i></a>
            <a class="text-dark" href="">
                <i class="fas fa-fw fa-headset fa-lg"></i></a>
        </div>
    </div>
</header>

<!-- NAVBAR MENU -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active col-md-3">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item col-md-3">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item col-md-3">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item col-md-3">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown col-md-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                </li>
            </ul>
            <div class="container col-md-4">
                <form action="" method="post" class="float-right">
                    <div class="input-group ml-5">
                        <input type=" text" class="form-control" placeholder="Cari" name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-success" type="submit"><i class="fas fa-fw fa-search"></i>
                        </div>
                    </div>
                </form>
            </div>
            <a href="<?= base_url('utama/login'); ?>" class="btn btn-primary col-md-1"><i class="fas fa-user"></i> Login </a>
        </div>
</nav> 