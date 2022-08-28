<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" crossorigin="anonymous"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/mobile.css') ?>">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="<?= base_url('assets/js/admin.js') ?>"></script>
    <title>Manage Website | Admin</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="icon" href="<?= base_url('assets/foto/logo.jpg') ?>" type ="image/x-icon">
    <link rel="apple-touch-icon" href="<?= base_url('assets/foto/logo.jpg') ?>" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('assets/foto/logo.jpg') ?>" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('assets/foto/logo.jpg') ?>" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('assets/foto/logo.jpg') ?>" />
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="bungkus-mobile">
                    <div class="container-fluid">
                        <div id="menu-home" class="row logo">
                            <div class="col p-0">
                                <div class="boxLogo">
                                    <img src="<?= base_url('assets/foto/logo.jpg') ?>" alt="Logo">
                                </div>
                            </div>
                            <div class="col-4">
                                <div id="tombol-menu" class="tombol-menu p-3 animate__animated animate__backInDown noClose">
                                    <i class="fa-solid fa-bars noClose"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row judul">
                            <h1>Rumah Rasya</h1><hr>
                        </div>
                        <div class="row subJudul">
                            <h2>Desain Dan Pengerjaan Interior Dan Eksterior Rumah</h2>
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
                                <img class="d-block" src="<?= base_url('assets/foto/rum.jpg') ?>" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block" src="<?= base_url('assets/foto/salon.jpg') ?>" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block" src="<?= base_url('assets/foto/img3.jpg') ?>" alt="Third slide">
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
                            <p>"Jasa Desain Dan Pengerjaan Interior Dan Eksterior Rumah Terbaik Di Lampung, Kami Memperkerjakan pekerja Profesional Yang Berpengalaman di Bidangnya"</p>
                        </div>
                        <div id="menu-project" class="row mt-4">
                            <div class="col-12 row">
                                <div class="col-12 judul-menu">
                                    <h2>Project</h2>
                                </div>
                            </div>
                            <div class="row isi">
                                <div class="col-12">
                                    <p>Berikut Before After Dari Pekerjaan Kami...</p>
                                </div>
                            </div>
                            <div class="col-12 row boxs-project mt-3">
                                <div class="col-6 ">
                                    <div class="row foto">
                                        <video class="" src="<?= base_url('assets/foto/vid.mp4') ?>" controls alt="s"></video>
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <div class="row foto">
                                    <img class="" src="<?= base_url('assets/foto/6d6c27bc-5501-4120-bf49-39a5820f7acf.JPG') ?>" alt="s"> 
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row foto">
                                    <img src="<?= base_url('assets/foto/rum.jpg') ?>" alt="s"> 
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <div class="row foto">
                                    <img class="" src="<?= base_url('assets/foto/5040edb4-c8b0-46db-89ed-e75d4c43e651.JPG') ?>" alt="s"> 
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <div class="row foto">
                                        <img src="<?= base_url('assets/foto/09ff3b5b-cb88-4419-b687-fe407325d7f7 (2).JPG') ?>" alt="s">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row foto">
                                        <video class="" src="<?= base_url('assets/foto/vid2.mp4') ?>" controls alt="s"></video>
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <div class="row foto">
                                    <img class="" src="<?= base_url('assets/foto/salon.jpg') ?>" alt="s"> 
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <div class="row foto">
                                        <img src="<?= base_url('assets/foto/09ff3b5b-cb88-4419-b687-fe407325d7f7 (2).JPG') ?>" alt="s">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="bungkus-mobile2">
                    <div class="container-fluid">
                        <div id="menu-home" class="row logo">
                            <div class="col p-0">
                                <div class="boxLogo">
                                    <img src="<?= base_url('assets/foto/logo.jpg') ?>" alt="Logo">
                                </div>
                            </div>
                            <div class="col-4">
                                <div id="tombol-menu" class="tombol-menu p-3 animate__animated animate__backInDown noClose">
                                    <i class="fa-solid fa-bars noClose"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row judul">
                            <h1>Rumah Rasya</h1><hr>
                        </div>
                        <div class="row subJudul">
                            <h2>Desain Dan Pengerjaan Interior Dan Eksterior Rumah</h2>
                        </div>
                        <div class="row fotoAtas mt-4">
                            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img class="d-block" src="<?= base_url('assets/foto/rum.jpg') ?>" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block" src="<?= base_url('assets/foto/salon.jpg') ?>" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block" src="<?= base_url('assets/foto/img3.jpg') ?>" alt="Third slide">
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
                            <p>"Jasa Desain Dan Pengerjaan Interior Dan Eksterior Rumah Terbaik Di Lampung, Kami Memperkerjakan pekerja Profesional Yang Berpengalaman di Bidangnya"</p>
                        </div>
                        <div id="menu-project" class="row mt-4">
                            <div class="col-12 row">
                                <div class="col-12 judul-menu">
                                    <h2>Project</h2>
                                </div>
                            </div>
                            <div class="row isi">
                                <div class="col-12">
                                    <p>Berikut Before After Dari Pekerjaan Kami...</p>
                                </div>
                            </div>
                            <div class="col-12 row boxs-project mt-3">
                                <div class="col-6 ">
                                    <div class="row foto">
                                        <video class="" src="<?= base_url('assets/foto/vid.mp4') ?>" controls alt="s"></video>
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <div class="row foto">
                                    <img class="" src="<?= base_url('assets/foto/6d6c27bc-5501-4120-bf49-39a5820f7acf.JPG') ?>" alt="s"> 
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row foto">
                                    <img src="<?= base_url('assets/foto/rum.jpg') ?>" alt="s"> 
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <div class="row foto">
                                    <img class="" src="<?= base_url('assets/foto/5040edb4-c8b0-46db-89ed-e75d4c43e651.JPG') ?>" alt="s"> 
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <div class="row foto">
                                        <img src="<?= base_url('assets/foto/09ff3b5b-cb88-4419-b687-fe407325d7f7 (2).JPG') ?>" alt="s">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row foto">
                                        <video class="" src="<?= base_url('assets/foto/vid2.mp4') ?>" controls alt="s"></video>
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <div class="row foto">
                                    <img class="" src="<?= base_url('assets/foto/salon.jpg') ?>" alt="s"> 
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <div class="row foto">
                                        <img src="<?= base_url('assets/foto/09ff3b5b-cb88-4419-b687-fe407325d7f7 (2).JPG') ?>" alt="s">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>

<style>
    .bungkus-mobile{
        overflow: auto;
        height: 600px;
        width: 414px;
    }
    .bungkus-mobile2{
        overflow: auto;
        height: 600px;
        width: 414px;
    }
</style>