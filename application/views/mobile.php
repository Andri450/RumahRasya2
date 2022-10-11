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
    <link rel="apple-touch-icon" href="<?= base_url('assets/foto/'. $logo[0]->logo .'') ?>" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('assets/foto/'. $logo[0]->logo .'') ?>" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('assets/foto/'. $logo[0]->logo .'') ?>" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('assets/foto/'. $logo[0]->logo .'') ?>" />
</head>
<body>
    <div class="container-fluid">
        <div id="menu-home" class="row logo">
            <div class="col p-0">
                <div class="boxLogo">
                    <img src="<?= base_url('assets/foto/'. $logo[0]->logo .'') ?>" alt="Logo">
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
                <img class="d-block" src="<?= base_url('assets/foto/'. $foto_heading[0]->foto .'') ?>" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block" src="<?= base_url('assets/foto/'. $foto_heading[1]->foto .'') ?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block" src="<?= base_url('assets/foto/'. $foto_heading[2]->foto .'') ?>" alt="Third slide">
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
            <p><?= $isi_heading[0]->isi ?></p>
        </div>
        <div id="menu-project" class="row mt-4">
            <div class="col-12 row">
                <div class="col-12 judul-menu">
                    <h2>Project</h2>
                </div>
            </div>
            <div class="row isi">
                <div class="col-12">
                    <p><?= $sub_judul_project[0]->isi ?></p>
                </div>
            </div>
            <div class="col-12 row boxs-project mt-3">
                <div class="col-6 ">
                    <div class="row foto">
                    <?php
                                            $file = $media_project[0]->file_media;
                                            $info = pathinfo($file);
                                            $ekstensi = $info['extension'];
                                            
                                            if(strtoupper($ekstensi) == strtoupper('jpg') || strtoupper($ekstensi) == strtoupper('jpeg') || strtoupper($ekstensi) == strtoupper('png')){
                                        ?>
                                        <img src="<?= base_url('assets/foto/'. $media_project[0]->file_media .'') ?>" alt="s">
                                        <?php
                                            }elseif(strtoupper($ekstensi) == strtoupper('mp4')){
                                        ?> 
                                        <video class="" src="<?= base_url('assets/foto/'. $media_project[0]->file_media .'') ?>" controls alt="s"></video>
                                        <?php } ?>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="row foto">
                    <?php
                                            $file = $media_project[1]->file_media;
                                            $info = pathinfo($file);
                                            $ekstensi = $info['extension'];
                                            
                                            if(strtoupper($ekstensi) == strtoupper('jpg') || strtoupper($ekstensi) == strtoupper('jpeg') || strtoupper($ekstensi) == strtoupper('png')){
                                        ?>
                                        <img src="<?= base_url('assets/foto/'. $media_project[1]->file_media .'') ?>" alt="s">
                                        <?php
                                            }elseif(strtoupper($ekstensi) == strtoupper('mp4')){
                                        ?> 
                                        <video class="" src="<?= base_url('assets/foto/'. $media_project[1]->file_media .'') ?>" controls alt="s"></video>
                                        <?php } ?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row foto">
                    <?php
                                            $file = $media_project[2]->file_media;
                                            $info = pathinfo($file);
                                            $ekstensi = $info['extension'];
                                            
                                            if(strtoupper($ekstensi) == strtoupper('jpg') || strtoupper($ekstensi) == strtoupper('jpeg') || strtoupper($ekstensi) == strtoupper('png')){
                                        ?>
                                        <img src="<?= base_url('assets/foto/'. $media_project[2]->file_media .'') ?>" alt="s">
                                        <?php
                                            }elseif(strtoupper($ekstensi) == strtoupper('mp4')){
                                        ?> 
                                        <video class="" src="<?= base_url('assets/foto/'. $media_project[2]->file_media .'') ?>" controls alt="s"></video>
                                        <?php } ?>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="row foto">
                    <?php
                                            $file = $media_project[3]->file_media;
                                            $info = pathinfo($file);
                                            $ekstensi = $info['extension'];
                                            
                                            if(strtoupper($ekstensi) == strtoupper('jpg') || strtoupper($ekstensi) == strtoupper('jpeg') || strtoupper($ekstensi) == strtoupper('png')){
                                        ?>
                                        <img src="<?= base_url('assets/foto/'. $media_project[3]->file_media .'') ?>" alt="s">
                                        <?php
                                            }elseif(strtoupper($ekstensi) == strtoupper('mp4')){
                                        ?> 
                                        <video class="" src="<?= base_url('assets/foto/'. $media_project[3]->file_media .'') ?>" controls alt="s"></video>
                                        <?php } ?>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="row foto">
                    <?php
                                            $file = $media_project[4]->file_media;
                                            $info = pathinfo($file);
                                            $ekstensi = $info['extension'];
                                            
                                            if(strtoupper($ekstensi) == strtoupper('jpg') || strtoupper($ekstensi) == strtoupper('jpeg') || strtoupper($ekstensi) == strtoupper('png')){
                                        ?>
                                        <img src="<?= base_url('assets/foto/'. $media_project[4]->file_media .'') ?>" alt="s">
                                        <?php
                                            }elseif(strtoupper($ekstensi) == strtoupper('mp4')){
                                        ?> 
                                        <video class="" src="<?= base_url('assets/foto/'. $media_project[4]->file_media .'') ?>" controls alt="s"></video>
                                        <?php } ?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row foto">
                    <?php
                                            $file = $media_project[5]->file_media;
                                            $info = pathinfo($file);
                                            $ekstensi = $info['extension'];
                                            
                                            if(strtoupper($ekstensi) == strtoupper('jpg') || strtoupper($ekstensi) == strtoupper('jpeg') || strtoupper($ekstensi) == strtoupper('png')){
                                        ?>
                                        <img src="<?= base_url('assets/foto/'. $media_project[5]->file_media .'') ?>" alt="s">
                                        <?php
                                            }elseif(strtoupper($ekstensi) == strtoupper('mp4')){
                                        ?> 
                                        <video class="" src="<?= base_url('assets/foto/'. $media_project[5]->file_media .'') ?>" controls alt="s"></video>
                                        <?php } ?>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="row foto">
                    <?php
                                            $file = $media_project[6]->file_media;
                                            $info = pathinfo($file);
                                            $ekstensi = $info['extension'];
                                            
                                            if(strtoupper($ekstensi) == strtoupper('jpg') || strtoupper($ekstensi) == strtoupper('jpeg') || strtoupper($ekstensi) == strtoupper('png')){
                                        ?>
                                        <img src="<?= base_url('assets/foto/'. $media_project[6]->file_media .'') ?>" alt="s">
                                        <?php
                                            }elseif(strtoupper($ekstensi) == strtoupper('mp4')){
                                        ?> 
                                        <video class="" src="<?= base_url('assets/foto/'. $media_project[6]->file_media .'') ?>" controls alt="s"></video>
                                        <?php } ?>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="row foto">
                    <?php
                                            $file = $media_project[7]->file_media;
                                            $info = pathinfo($file);
                                            $ekstensi = $info['extension'];
                                            
                                            if(strtoupper($ekstensi) == strtoupper('jpg') || strtoupper($ekstensi) == strtoupper('jpeg') || strtoupper($ekstensi) == strtoupper('png')){
                                        ?>
                                        <img src="<?= base_url('assets/foto/'. $media_project[7]->file_media .'') ?>" alt="s">
                                        <?php
                                            }elseif(strtoupper($ekstensi) == strtoupper('mp4')){
                                        ?> 
                                        <video class="" src="<?= base_url('assets/foto/'. $media_project[7]->file_media .'') ?>" controls alt="s"></video>
                                        <?php } ?>
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
                    <p><?= $sub_legal[0]->isi_sub_legal ?></p>
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
                        <input type="hidden" id="per-meter" value="<?= $harga[0]->perMeter ?>">
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
                    <form method="POST" action="<?= base_url('Mobile/upload_feedback') ?>">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Masukan Nama</label>
                        <input type="text" name="nama" class="form-control" id="formGroupExampleInput" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Email</label>
                        <input type="text" name="email" class="form-control" id="formGroupExampleInput" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">No WhatsApp</label>
                        <input type="number" name="wa" class="form-control" id="formGroupExampleInput" placeholder="no whatsapp">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Pesan</label>
                        <textarea name="pesan" id="" class="form-control" cols="40" rows="6"></textarea>
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
                <div class="row mt-5 mapBox">
                    <div class="col-12 judul-menu">
                        <h2>Lokasi</h2>
                    </div>
                    <div class="mx-auto col-12">
                        <div class="iframe-container map">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sms">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.26074538116563!2d105.24413607599782!3d-5.39075081818087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5c41bbd30b0445af!2zNcKwMjMnMjYuNSJTIDEwNcKwMTQnMzkuNCJF!5e0!3m2!1sid!2sid!4v1661850241615!5m2!1sid!2sid" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="row foot mt-3">
            <div class="col-12">
                <p>RumahRasya.id © All Rights Reserved</p>
            </div>
        </div>
    </div>  
</body>
</html>

<style>
@media only screen and (min-width: 768px) {
    body {
      width: 600px;
      margin: auto;
    }
}
</style>