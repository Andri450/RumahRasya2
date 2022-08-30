<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" crossorigin="anonymous"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/mobile.css') ?>">
    <script src="<?= base_url('assets/js/mobile.js') ?>"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Jasa Desain Interior Rumah Lampung | RumahRasya.</title>
    <meta name="description" content="Jasa Desain Dan Pengerjaan Interior Dan Eksterior Rumah Terbaik Di Lampung, Kami Memperkerjakan pekerja Profesional di Bidangnya">
    <meta name="keywords" content="Jasa, Desain, Interior, Eksterior, Rumah, Berkualitas, Harga Murah, Lampung, Desain Rumah Terbaik, Interior Rumah, Eksterior Rumah, Bangun Rumah, Tahun, <?= date('Y') ?>">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="icon" href="<?= base_url('assets/foto/logo.jpg') ?>" type ="image/x-icon">
    <link rel="apple-touch-icon" href="<?= base_url('assets/foto/logo.jpg') ?>" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('assets/foto/logo.jpg') ?>" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('assets/foto/logo.jpg') ?>" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('assets/foto/logo.jpg') ?>" />
</head>
<body>
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
                        <li id="kalkulasi" ><a href=""><i class="fa-solid fa-calculator"></i>Kalkulasi Harga</a></li>
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
        <div id="menu-legal" class="row mt-4">
            <div class="col-12 row">
                <div class="col-12 judul-menu">
                    <h2>Legal</h2>
                </div>
            </div>
            <div class="row isi">
                <div class="col-12">
                    <p>Perizinan Usaha Kami...</p>
                </div>
            </div>
            <div class="col-12 row foto-legal boxs-project">
                <img class="mx-auto img-fluid" src="<?= base_url('assets/foto/WhatsApp Image 2022-08-29 at 17.13.39.jpeg') ?>" alt="">
            </div>
        </div>
        <div id="menu-kalkulasi" class="row mt-5 menu-kalkulasi">
            <div class="col-12 row">
                <div class="col-12 judul-menu">
                    <h2>Kalkulasi Estimasi Biaya</h2>
                </div>
            </div>
            <div class="row isi">
                <div class="col-12">
                    <p>Masukan ukuran (meter) yang ingin di kalkulasi...</p>
                </div>
            </div>
            <div class="col-12 row mt-3">
                <div class="row isi">
                    <div class="col-10">
                    <div class="form-group">
                        <input type="hidden" id="per-meter" value="100000">
                        <input type="number" class="form-control" id="meter" aria-describedby="emailHelp" placeholder="Masukan Ukuran">
                    </div>
                    </div>
                    <div class="col-2">
                        <div class="m1">
                            <p>Meter</p>
                        </div>
                    </div>
                </div>
                <div class="row isi">
                    <div class="col-12">
                    <p class="total">Estimasi: Rp. <span id="total">0</span>,-</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu-kontak" class="row mt-3">
            <div class="col-12 row">
                <div class="col-12 judul-menu">
                    <h2>Kontak</h2>
                </div>
            </div>
            <div class="row isi">
                <div class="col-12">
                    <p>Tertarik? Segera hubungi kami...</p>
                </div>
            </div>
            <div class="col-12 row mt-3">
                <div class="row isi">
                    <div class="col-12">
                    <form>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Masukan Nama</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Email</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">No WhatsApp</label>
                        <input type="number" class="form-control" id="formGroupExampleInput" placeholder="no whatsapp">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Pesan</label>
                        <textarea name="" id="" class="form-control" cols="40" rows="6"></textarea>
                    </div>
                    <button class="btn btn-kirim">Kirim</button>
                    </form>
                    </div>
                </div>
                <div class="row isi mt-3">
                    <div class="col-12">
                    <p class="total">Atau Hubungi kontak kami:</p>
                    </div>
                </div>
                <div class="row isi kontaks">
                    <div class="col">
                        <a href="https://api.whatsapp.com/send/?phone=62895610000966&text&type=phone_number&app_absent=0"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                    <div class="col">
                        <a href="https://www.instagram.com/rumah.rasya/?hl=id"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row foot mt-3">
            <div class="col-12">
                <p>RumahRasya.id © All Rights Reserved</p>
            </div>
        </div>
    </div>  
</body>
</html>