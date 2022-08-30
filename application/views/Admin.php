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
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
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
                                <div class="edit" id="edit-logo">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </div>
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
                        <div class="row judul">
                            <h1>Rumah Rasya</h1><hr>
                        </div>
                        <div class="row subJudul">
                            <h2><?= $sub_judul[0]->isi ?></h2>
                            <div class="edit" id="edit-subJudul">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </div>
                        </div>
                        <div class="row fotoAtas mt-4">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="edit" id="edit-carousel">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </div>
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
                            <p class="isi-header-prev"><?= $isi_heading[0]->isi ?></p>
                            <div class="edit" id="edit-bawah-carousel">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </div>
                        </div>
                        <div id="menu-project" class="row mt-4">
                            <div class="col-12 row">
                                <div class="col-12 judul-menu">
                                    <h2>Project</h2>
                                </div>
                            </div>
                            <div class="row isi">
                                <div class="col-12">
                                    <p class="isi-sub-project"><?= $sub_judul_project[0]->isi ?></p>
                                </div>
                                <div class="edit" id="edit-subProject">
                                    <i class="fa-solid fa-pen-to-square"></i>
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
                                        <div class="edit" id="edit-media1">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </div>
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
                                        <div class="edit" id="edit-media2">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </div>
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
                                        <div class="edit" id="edit-media3">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </div>
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
                                        <div class="edit" id="edit-media4">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </div>
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
                                        <div class="edit" id="edit-media5">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </div>
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
                                        <div class="edit" id="edit-media6">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </div>
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
                                        <div class="edit" id="edit-media7">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </div>
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
                                        <div class="edit" id="edit-media8">
                                            <i class="fa-solid fa-pen-to-square"></i>
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
                                            <p class="subLegal-asli"><?= $sub_legal[0]->isi_sub_legal ?></p>
                                        </div>
                                        <div class="edit" id="edit-subLegal">
                                            <i class="fa-solid fa-pen-to-square"></i>
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
                                            <input type="hidden" id="harga" value="<?= $harga[0]->perMeter ?>">
                                            <div class="edit" id="edit-harga">
                                                <i class="fa-solid fa-pen-to-square"></i>
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="bungkus-mobile2">
                <div class="penanda">Preview</div>
                <div class="container-fluid">
                        <div id="menu-home" class="row logo">
                            <div class="col p-0">
                                <div class="boxLogo">
                                    <img id="preview-logo" src="<?= base_url('assets/foto/'. $logo[0]->logo .'') ?>" alt="Logo">
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
                        <div class="row subJudul afterSubJudul">
                            <h2><?= $sub_judul[0]->isi ?></h2>
                        </div>
                        <div class="row fotoAtas mt-4">
                            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <input type="hidden" id="tmp-header1" src="<?= base_url('assets/foto/'. $foto_heading[0]->foto .'') ?>">
                                    <img id="img-header1" class="d-block" src="<?= base_url('assets/foto/'. $foto_heading[0]->foto .'') ?>" alt="First slide">
                                </div>
                                
                                <div class="carousel-item">
                                    <input type="hidden" id="tmp-header2" src="<?= base_url('assets/foto/'. $foto_heading[1]->foto .'') ?>">
                                    <img id="img-header2" class="d-block" src="<?= base_url('assets/foto/'. $foto_heading[1]->foto .'') ?>" alt="Second slide">
                                </div>

                                <div class="carousel-item">
                                    <input type="hidden" id="tmp-header3" src="<?= base_url('assets/foto/'. $foto_heading[2]->foto .'') ?>">
                                    <img id="img-header3" class="d-block" src="<?= base_url('assets/foto/'. $foto_heading[2]->foto .'') ?>" alt="Third slide">
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
                            <p class="afterHeader"><?= $isi_heading[0]->isi ?></p>
                        </div>
                        <div id="menu-project" class="row mt-4">
                            <div class="col-12 row">
                                <div class="col-12 judul-menu">
                                    <h2>Project</h2>
                                </div>
                            </div>
                            <div class="row isi">
                                <div class="col-12">
                                    <p class="afterSubProject"><?= $sub_judul_project[0]->isi ?></p>
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
                                        <img class="foto1" src="<?= base_url('assets/foto/'. $media_project[0]->file_media .'') ?>" alt="s">
                                        <?php
                                            }elseif(strtoupper($ekstensi) == strtoupper('mp4')){
                                        ?> 
                                        <video class="foto1" src="<?= base_url('assets/foto/'. $media_project[0]->file_media .'') ?>" controls alt="s"></video>
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
                                        <img class="foto2" src="<?= base_url('assets/foto/'. $media_project[1]->file_media .'') ?>" alt="s">
                                        <?php
                                            }elseif(strtoupper($ekstensi) == strtoupper('mp4')){
                                        ?> 
                                        <video class="foto2" src="<?= base_url('assets/foto/'. $media_project[1]->file_media .'') ?>" controls alt="s"></video>
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
                                        <img class="foto3" src="<?= base_url('assets/foto/'. $media_project[2]->file_media .'') ?>" alt="s">
                                        <?php
                                            }elseif(strtoupper($ekstensi) == strtoupper('mp4')){
                                        ?> 
                                        <video class="foto3" class="" src="<?= base_url('assets/foto/'. $media_project[2]->file_media .'') ?>" controls alt="s"></video>
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
                                        <img class="foto4" src="<?= base_url('assets/foto/'. $media_project[3]->file_media .'') ?>" alt="s">
                                        <?php
                                            }elseif(strtoupper($ekstensi) == strtoupper('mp4')){
                                        ?> 
                                        <video class="foto4" class="" src="<?= base_url('assets/foto/'. $media_project[3]->file_media .'') ?>" controls alt="s"></video>
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
                                        <img class="foto5" src="<?= base_url('assets/foto/'. $media_project[4]->file_media .'') ?>" alt="s">
                                        <?php
                                            }elseif(strtoupper($ekstensi) == strtoupper('mp4')){
                                        ?> 
                                        <video class="foto5" src="<?= base_url('assets/foto/'. $media_project[4]->file_media .'') ?>" controls alt="s"></video>
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
                                        <img class="foto6" src="<?= base_url('assets/foto/'. $media_project[5]->file_media .'') ?>" alt="s">
                                        <?php
                                            }elseif(strtoupper($ekstensi) == strtoupper('mp4')){
                                        ?> 
                                        <video class="foto6" src="<?= base_url('assets/foto/'. $media_project[5]->file_media .'') ?>" controls alt="s"></video>
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
                                        <img class="foto7" src="<?= base_url('assets/foto/'. $media_project[6]->file_media .'') ?>" alt="s">
                                        <?php
                                            }elseif(strtoupper($ekstensi) == strtoupper('mp4')){
                                        ?> 
                                        <video class="foto7" src="<?= base_url('assets/foto/'. $media_project[6]->file_media .'') ?>" controls alt="s"></video>
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
                                        <img class="foto8" src="<?= base_url('assets/foto/'. $media_project[7]->file_media .'') ?>" alt="s">
                                        <?php
                                            }elseif(strtoupper($ekstensi) == strtoupper('mp4')){
                                        ?> 
                                        <video class="foto8" src="<?= base_url('assets/foto/'. $media_project[7]->file_media .'') ?>" controls alt="s"></video>
                                        <?php } ?>
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
                                            <p class="afterSubLegal"><?= $sub_legal[0]->isi_sub_legal ?></p>
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
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <form method="POST" action="<?= base_url('Admin/ubah_logo') ?>" class="edit-logo-form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Upload File Logo</label>
                        </div>
                        <div class="form-group"> 
                            <input type="file" id="input-logo" name="foto" size="33" accept="image/png, image/gif, image/jpeg" onchange="previewFile(this);" />
                        </div>
                        <button class="btn btn-primary">Simpan</button>
                    </form>
                    <form method="POST" action="<?= base_url('Admin/ubah_sub_judul') ?>" class="sub-Judul-form">
                        <div class="form-group">
                            <label>Tuliskan isi</label>
                        </div>
                        <div class="form-group"> 
                            <textarea class="isi-sub-judul" name="isi" id="isi-sub-judul" cols="30" rows="10"></textarea>
                        </div>
                        <button class="btn btn-primary">Simpan</button>
                    </form>
                    <form method="POST" action="<?= base_url('Admin/ubah_fotoHeader') ?>" class="edit-fotoHeader-form" enctype="multipart/form-data">
                        <input type="hidden" id="idheading" name="idHeading">
                        <div class="form-group">
                            <label>Upload Foto Heading <span class="headingKe"></span></label>
                        </div>
                        <div class="form-group"> 
                            <input type="file" id="input-header" name="foto" size="33" accept="image/png, image/gif, image/jpeg" onchange="previewHeading(this);" />
                        </div>
                        <button class="btn btn-primary">Simpan</button>
                    </form>
                    <form method="POST" action="<?= base_url('Admin/ubah_isiHeader') ?>" class="isi-header-form">
                        <div class="form-group">
                            <label>Tuliskan isi</label>
                        </div>
                        <div class="form-group"> 
                            <textarea name="isi" id="isi-header" class="isi-header" cols="30" rows="10"></textarea>
                        </div>
                        <button class="btn btn-primary">Simpan</button>
                    </form>
                    <form method="POST" action="<?= base_url('Admin/ubah_subProject') ?>" class="sub-project-form">
                        <div class="form-group">
                            <label>Tuliskan isi</label>
                        </div>
                        <div class="form-group"> 
                            <textarea name="isi" id="isi-project" class="isi-project" cols="30" rows="10"></textarea>
                        </div>
                        <button class="btn btn-primary">Simpan</button>
                    </form>
                    <form method="POST" action="<?= base_url('Admin/ubah_mediaProject') ?>" class="edit-mediaProject-form" enctype="multipart/form-data">
                        <input type="hidden" id="idMedia" name="idMedia">
                        <div class="form-group">
                            <label>Upload Foto Media <span class="mediaKe"></span></label>
                        </div>
                        <div class="form-group"> 
                            <input type="file" id="mediaProject" name="mediaProject" size="33" accept="image/png, image/gif, image/jpeg, video/mp4" onchange="previewMedia(this);" />
                        </div>
                        <button class="btn btn-primary">Simpan</button>
                    </form>
                    <form method="POST" action="<?= base_url('Admin/ubah_subLegal') ?>" class="sub-legal-form">
                        <div class="form-group">
                            <label>Tuliskan isi</label>
                        </div>
                        <div class="form-group"> 
                            <textarea name="isi" id="isi-subLegal" class="isi-subLegal" cols="30" rows="10"></textarea>
                        </div>
                        <button class="btn btn-primary">Simpan</button>
                    </form>
                    <form method="POST" action="<?= base_url('Admin/ubah_harga') ?>" class="harga-form">
                        <div class="form-group">
                            <label>Harga Per meter</label>
                        </div>
                        <div class="form-group"> 
                            <input type="number" name="perMeter" id="perMeter">
                            <label class="hargaRp" for="">Rp. </label>
                        </div>
                        <button class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>