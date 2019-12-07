<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

    <head>
        <title>AKI 24 Jam Bali | Produk</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url();?>asset2/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url();?>asset2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset2/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset2/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset2/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset2/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset2/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset2/css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <header class="site-navbar site-navbar-target" role="banner">

          <div class="container">
            <div class="row align-items-center position-relative ">

              <div class="col-5 ">
                <div class="site-logo black">
                  <a href="<?php echo base_url(). 'index.php/Welcome'; ?>" class="font-weight-bold">AKI 24 Jam Bali</a>
                </div>
              </div>
              <div class="col-6 text-right topnav" id="myTopNav">
                <ul class="menu text-right">
                  <li class="menu-item"><a class="btn-navi btn-navi-primary btn-navi-outline-black py-3 px-4" href="<?php echo base_url(). 'index.php/Welcome'; ?>">Beranda</a></li>
                  <li class="menu-item"><a class="btn-navi btn-navi-primary btn-navi-outline-black current py-3 px-3" href="<?php echo base_url(). 'index.php/halaman_produk'; ?>">Produk</a></li>
                  <li class="menu-item"><a class="btn-navi btn-navi-primary btn-navi-outline-black py-3 px-3" href="<?php echo base_url(). 'index.php/halaman_galeri'; ?>">Galeri</a></li>
                  <li class="menu-item"><a class="btn-navi btn-navi-primary btn-navi-outline-black py-3 px-3" href="<?php echo base_url(). 'index.php/kontak'; ?>">Kontak</a></li>
                </ul>
              </div>

              <div class="col-1 text-left topbar black">
                <span class="d-inline-block d-lg-block"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-black"><span class="icon-menu h3 text-black"></span></a></span>
                <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                  <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li><a href="<?php echo base_url(). 'index.php/Welcome'; ?>" class="nav-link">Beranda</a></li>
                  <li class="active"><a href="<?php echo base_url(). 'index.php/halaman_produk'; ?>" class="nav-link">Produk</a></li>
                  <li><a href="<?php echo base_url(). 'index.php/halaman_galeri'; ?>" class="nav-link">Galeri</a></li>
                  <li><a href="<?php echo base_url(). 'index.php/kontak'; ?>" class="nav-link">Kontak</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </header>

        <div class="site-section">
      <div class="container martop" >     
          <div class="row">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="produk.html">Produk</a></li>
                    <li class="breadcrumb-item active" aria-current="page">NS 40 ZL</li>
                  </ol>
                </nav>
          </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 mb-5">
            <div class="uk-card-detail">
                <img src="<?php echo base_url();?>asset2/images/vs2.jpg" alt="Image">
            </div>  
          </div>     
          <div class="col-lg-6 col-md-6 mb-5">
            <div class="card-info">
              <div class="card-title">NS 40 ZL </div>
              <div class="card-merk">Yuasa</div>
              <div class="d-flex">
                <span class="icon-circle icon-green"></span>
                <span class="card-tag">Mobil</span>
              </div>
              <div class="card-isi">AKI KERING ORIGINAL</div>
              <div class="card-price"><strong>Rp. 100.000</strong></div>    
            </div>
          </div> 
        </div>
    </div>
    
    <div class="container" >
      <h4>Produk serupa</h4>        
      <div class="col-md-12">
        <div class="row">
          <div class="col-lg-3 col-md-3 mb-4">
            <div class="uk-card">
              <a href="<?php echo base_url(). 'index.php/detail_produk'; ?>">
              <img src="<?php echo base_url();?>asset2/images/vs.jpg" alt="Image" class="img-card"> 
              <div class="card-container">
                <div class="card-title ">NS 40 ZL </div> 
                <div class="d-flex">
                    <span class="col-md-6 text-left card-merk">Yuasa</span>
                    <span class="col-md-6 text-center card-tag">Mobil</span>
                  </div> 
                <div class="card-price">Rp. 100.000</div>
              </div>
            </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 mb-4">
            <div class="uk-card">
              <a href="<?php echo base_url(). 'index.php/detail_produk'; ?>">
              <img src="<?php echo base_url();?>asset2/images/vs.jpg" alt="Image" class="img-card"> 
              <div class="card-container">
                <div class="card-title ">NS 40 ZL </div> 
                <div class="d-flex">
                    <span class="col-md-6 text-left card-merk">Yuasa</span>
                    <span class="col-md-6 text-center card-tag">Mobil</span>
                  </div> 
                <div class="card-price">Rp. 100.000</div>
              </div>
            </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 mb-4">
            <div class="uk-card">
              <a href="<?php echo base_url(). 'index.php/detail_produk'; ?>">
              <img src="<?php echo base_url();?>asset2/images/vs.jpg" alt="Image" class="img-card"> 
              <div class="card-container">
                <div class="card-title ">NS 40 ZL </div> 
                <div class="d-flex">
                    <span class="col-md-6 text-left card-merk">Yuasa</span>
                    <span class="col-md-6 text-center card-tag">Mobil</span>
                  </div> 
                <div class="card-price">Rp. 100.000</div>
              </div>
            </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 mb-4">
              <a href="#">
                <img src="<?php echo base_url();?>asset2/images/arrow.png" alt="Image" class="img-card-next" style="background-position: center;"> 
                <h5 style="margin-left: 35px; margin-top: 10px;">selanjutnya</h5>
              </a>
          </div>
        </div> 
      </div>
    </div>
  </div>
    <!-- END .site-section -->
    

    <footer class="site-footer">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-12">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> AKI 24 Jam Bali
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
    </footer>
    </div>

    <script src="<?php echo base_url();?>asset2/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>asset2/js/jquery-migrate-3.0.0.js"></script>
    <script src="<?php echo base_url();?>asset2/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>asset2/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>asset2/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>asset2/js/jquery.sticky.js"></script>
    <script src="<?php echo base_url();?>asset2/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url();?>asset2/js/jquery.animateNumber.min.js"></script>
    <script src="<?php echo base_url();?>asset2/js/jquery.fancybox.min.js"></script>
    <script src="<?php echo base_url();?>asset2/js/jquery.stellar.min.js"></script>
    <script src="<?php echo base_url();?>asset2/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url();?>asset2/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url();?>asset2/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url();?>asset2/js/aos.js"></script>

    <script src="<?php echo base_url();?>asset2/js/main.js"></script>

  </body>

</html>