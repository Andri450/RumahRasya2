<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" crossorigin="anonymous"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
    <script src="<?= base_url('assets/js/home.js') ?>"></script>
    <title>Rumah Rasya</title>
</head>
<body>

<div class="container">      
      <nav class="p-0 navbar sticky-top navbar-expand-lg navbar-light">
        <a class="" href="#">
          <div class="col-lg-8 col-md-6 col-sm-4 col-2 logo">
              <img class="image-fluid" src="<?= base_url('assets/foto/logo.jpg') ?>" alt="Interior Design">
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Project</a>
            </li>
          </ul>
          <span class="navbar-text d-sm-block d-block d-md-block d-lg-none d-xl-none">
          <div class="row">
            <div class="col iconCs">
              <i class="fa-solid fa-headset"></i>
            </div>
          </div>
        </span>
        </div>
        
        <span class="CsAtas" id="CsAtas">
          <div class="row">
            <div class="col iconCs">
              <i class="fa-solid fa-headset"></i>
            </div>
            <div class="col d-sm-none d-none d-md-none d-lg-block d-xl-block boxCs">
              <span>Customer&nbsp;Service</span>
              <span>085366367457</span>
            </div>
          </div>
        </span>
      </nav>
    </div>
</div>

<div class="container">
  <div class="p-0 row mt-1 box1">
    <div class="col-md-5 hero-text">
      <p>hidshaiodhsao</p>
    </div>
    <div class="col">
      <div class="hero-image d-none d-sm-none d-md-block">
        <img class="img-fluid" src="<?= base_url('assets/foto/rum.jpg') ?>" alt="">
      </div>
    </div>  
  </div>
</div>

</body>
</html>

<!-- style="background-image: url(<?= base_url('assets/foto/rum.jpg') ?>);" -->