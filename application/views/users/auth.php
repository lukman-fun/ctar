<?php
if(isset($this->session->id)){
    redirect(base_url());
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            background-color: #f1f5f9;
        }

        .bg-based{
            background-color: #7386D5;
        }

        .color-based{
            color: #7386D5;
        }

        .nav-pills .nav-item .nav-link{
            color: #7386D5;
        }

        .nav-pills .nav-item .active{
            background-color: #7386D5;
            color: white;
        }

    </style>
    <title>Auth</title>
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
            </ul>
        </div>
    </nav>
    <div class="container" style="height: 90vh;">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-11 col-md-5">
                <div class="card" style="border-radius: 10px; box-shadow: 1px 1px 10px #DDDDDD; outline: none; border: none;">
                    <div class="card-body">
                        <ul class="nav nav-pills mb-3 d-flex" id="pills-tab" role="tablist">
                            <li class="nav-item text-center" role="presentation" style="flex: 1;">
                                <a class="nav-link active" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
                            </li>
                            <li class="nav-item text-center" role="presentation" style="flex: 1;">
                                <a class="nav-link" id="pills-daftar-tab" data-toggle="pill" href="#pills-daftar" role="tab" aria-controls="pills-daftar" aria-selected="false">Daftar</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                                <h3 class="font-weight-bold">Login.</h3>
                                <form action="<?= base_url(); ?>Auth/do_login" method="POST" class="mt-4">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" id="" class="form-control" placeholder="E-mail">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" id="" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group text-center mt-4">
                                        <input type="submit" value="Login" class="btn bg-based text-light" style="padding-left: 2rem; padding-right: 2rem; box-shadow: 0px 1px 8px 2px #7386D5;">
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-daftar" role="tabpanel" aria-labelledby="pills-daftar-tab">
                                <h3 class="font-weight-bold">Daftar.</h3>
                                <form action="<?= base_url(); ?>Auth/do_daftar" method="POST" class="mt-4">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="">Nama Lengkap</label>
                                            <input type="text" name="nama" id="" class="form-control" placeholder="Nama Lengkap">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="">Nomor Hp</label>
                                            <input type="number" name="no_telp" id="" class="form-control" placeholder="Nomor HP">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Pendidikan Terakhir</label>
                                        <input type="text" name="pendidikan" id="" class="form-control" placeholder="Pendidikan Terakhir">
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="">Email</label>
                                            <input type="email" name="email" id="" class="form-control" placeholder="E-mail">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="">Password</label>
                                            <input type="password" name="password" id="" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group text-center mt-4">
                                        <input type="submit" value="Daftar" class="btn bg-based text-light" style="padding-left: 2rem; padding-right: 2rem; box-shadow: 0px 1px 8px 2px #7386D5;">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>