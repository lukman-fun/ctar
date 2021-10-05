<?php if(!isset($this->session->id)){
    redirect(base_url().'Auth');
} ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet"> -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/room.css">
    <title>CT-AR</title>
  </head>
  <body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #7386D5; box-shadow: 0px 1px 10px #7386D5;">
        <a class="navbar-brand font-weight-bold" href="#">NAVBAR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto font-weight-bold">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hubungi Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>Logout">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="sidebar-room">
        <div class="sidebar-room-content">
            <div class="list-group">
                <a href="" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Beranda
                </a>
                <a href="" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Download Aplikasi
                </a>
                <a href="" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    FlipBook
                </a>
                <a href="<?= base_url(); ?>Profile" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Profile Saya
                </a>
                <a href="<?= base_url(); ?>Profile/password" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Pengaturan AKun
                </a>
            </div>
        </div>
        <div class="sidebar-room-toggle">
            <div class="sidebar-room-toggle-button"></div>
        </div>
    </div>