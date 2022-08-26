<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" crossorigin="anonymous"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/mobile.css') ?>">
    <script src="<?= base_url('assets/js/mobile.js') ?>"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Mobile</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row logo">
            <div class="col p-0">
                <div class="boxLogo">
                    <img src="<?= base_url('assets/foto/logo.jpg') ?>" alt="">
                </div>
            </div>
            <div class="col-4">
                <div id="tombol-menu" class="tombol-menu p-3 animate__animated animate__backInDown noClose">
                    <i class="fa-solid fa-bars noClose"></i>
                </div>
            </div>
        </div>
        <div id="menu-bar" class="menu-bar hide-menu noClose">

        </div>
        <div class="row judul">
            <h1>Rumah Rasya</h1>
            <h5>Jasa Desain Interior</h3>
        </div>
        <div class="row fotoAtas mt-4">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="<?= base_url('assets/foto/rum.jpg') ?>" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/foto/salon.jpg') ?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/foto/img3.jpg') ?>" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
    </div>
</body>
</html>