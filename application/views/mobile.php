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
        <div id="menu-home" class="row logo">
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
        <div id="tombol-menu2" class="tombol-menu2 p-3 animate__animated animate__backInDown noClose">
            <i class="fa-solid fa-bars noClose"></i>
        </div>
        <div id="menu-bar" class="menu-bar hide-menu noClose">
            <div class="row tombol-close btn-danger close-menu">
                <div class="col">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="row">
                <div class="col list-menu">
                    <ul>
                        <li id="home" class="aktif"><a href=""><i class="fa-solid fa-house"></i>Home</a></li>
                    </ul>
                    <ul>
                        <li id="project" ><a href=""><i class="fa-solid fa-handshake"></i>Project</a></li>
                    </ul>
                    <ul>
                        <li id="legal" ><a href=""><i class="fa-solid fa-file-contract"></i>Legal</a></li>
                    </ul>
                    <ul>
                        <li id="kontak" ><a href=""><i class="fa-solid fa-headset"></i>Kontak</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col cs">
                    <!-- <i class="fa-solid fa-headset"></i> -->
                </div>
            </div>
        </div>
        <div class="row judul">
            <h1>Rumah Rasya</h1><hr>
        </div>
        <div class="row subJudul">
            <h5>Desain Interior</h3>
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
        <div class="row isi mt-3">
            <p>Desain dan pengerjaan Exterior dan interior Rumah, kantor, Cafe dll</p>
        </div>
        <div id="menu-project" class="row mt-4">
            <div class="col-12 row">
                <div class="col-12 judul-menu">
                    <h1>Project</h1>
                </div>
            </div>
            <div class="row isi">
                <div class="col-12">
                    <p>Berikut Before After Dari Pekerjaan Kami...</p>
                </div>
            </div>
            <div class="col-12 row boxs-project mt-3">
                <div class="col-6 box-project6">
                    <div class="row foto">
                        <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?= base_url('assets/foto/rum.jpg') ?>" alt="First slide">
                                <div class="carousel-caption">
                                    <h5>Before</h5>
                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?= base_url('assets/foto/salon.jpg') ?>" alt="Second slide">
                                <div class="carousel-caption">
                                    <h5>After</h5>
                                    
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 box-project6">
                    <div class="row foto">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?= base_url('assets/foto/rum.jpg') ?>" alt="First slide">
                                <div class="carousel-caption">
                                    <h5>Before</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?= base_url('assets/foto/salon.jpg') ?>" alt="Second slide">
                                <div class="carousel-caption">
                                    <h5>After</h5>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 box-project6">
                    <div class="row foto">
                        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active min-vh-100">
                                <img class="d-block w-100" src="<?= base_url('assets/foto/rum.jpg') ?>" alt="First slide">
                                <div class="carousel-caption">
                                    <h5>Before</h5>
                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?= base_url('assets/foto/salon.jpg') ?>" alt="Second slide">
                                <div class="carousel-caption">
                                    <h5>After</h5>
                                    
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 box-project6">
                    <div class="row foto">
                        <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?= base_url('assets/foto/rum.jpg') ?>" alt="First slide">
                                <div class="carousel-caption">
                                    <h5>Before</h5>
                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?= base_url('assets/foto/salon.jpg') ?>" alt="Second slide">
                                <div class="carousel-caption">
                                    <h5>After</h5>
                                    
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 box-project6">
                    <div class="row foto">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?= base_url('assets/foto/rum.jpg') ?>" alt="First slide">
                                <div class="carousel-caption">
                                    <h5>Before</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?= base_url('assets/foto/salon.jpg') ?>" alt="Second slide">
                                <div class="carousel-caption">
                                    <h5>After</h5>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 box-project6">
                    <div class="row foto">
                        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active min-vh-100">
                                <img class="d-block w-100" src="<?= base_url('assets/foto/rum.jpg') ?>" alt="First slide">
                                <div class="carousel-caption">
                                    <h5>Before</h5>
                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?= base_url('assets/foto/salon.jpg') ?>" alt="Second slide">
                                <div class="carousel-caption">
                                    <h5>After</h5>
                                    
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>