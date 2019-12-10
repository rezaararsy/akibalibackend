<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

  <head>
    <title>AKI 24 Jam Bali</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset2/css/style.css">
    <style>
    html {
      scroll-behavior: smooth;
    }

    </style>
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
          <div class="row align-items-center position-relative">

            <div class="col-5">
              <div class="site-logo">
                <a href="<?php echo base_url(). 'index.php/Welcome'; ?>" class="font-weight-bold">AKI 24 Jam Bali</a>
              </div>
            </div>

            <div class="col-6 text-right topnav" id="myTopNav">
              <ul class="menu text-right">
                <li class="menu-item"><a class="btn-navi btn-navi-primary btn-navi-outline-none current py-3 px-4" href="<?php echo base_url(). 'index.php/Welcome'; ?>">Beranda</a></li>
                <li class="menu-item"><a class="btn-navi btn-navi-primary btn-navi-outline-none py-3 px-3" href="<?php echo base_url(). 'index.php/halaman_produk'; ?>">Produk</a></li>
                <li class="menu-item"><a class="btn-navi btn-navi-primary btn-navi-outline-none py-3 px-3" href="<?php echo base_url(). 'index.php/halaman_galeri'; ?>">Galeri</a></li>
                <li class="menu-item"><a class="btn-navi btn-navi-primary btn-navi-outline-none py-3 px-3" href="<?php echo base_url(). 'index.php/kontak'; ?>">Kontak</a></li>
              </ul>
            </div>

            <div class="col-1 text-left topbar" >
              <span class="d-inline-block d-lg-block"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>
              <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                <li class="active"><a href="<?php echo base_url(). 'index.php/Welcome'; ?>" class="nav-link">Beranda</a></li>
                <li><a href="<?php echo base_url(). 'index.php/halaman_produk'; ?>" class="nav-link">Produk</a></li>
                <li><a href="<?php echo base_url(). 'index.php/halaman_galeri'; ?>" class="nav-link">Galeri</a></li>
                <li><a href="<?php echo base_url(). 'index.php/kontak'; ?>" class="nav-link">Kontak</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('<?php echo base_url();?>asset2/images/gambar_bg.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-12 text-center" style="margin-top:150px;">
              <h1 class="animated fadeInDown mb-4 text-white">Sedulur Makmur</h1>
              <p class="animated fadeInDown mb-0">Menjual Aki Original, Bergaransi, dan Harga Bersaing | Pengiriman 24 Jam</p>
              <h6 class="animated fadeInDown mb-4">WhatsApp : 08123813654</h6>
              <p><a href="#layanan" class="animated fadeInDown btn btn-primary btn-outline-white py-3 px-5 mb-5">Layanan Kami</a></p>
              <div class= "col-md-12" style="margin-top: 100px;">
                <a class="animated fadeInDown btn" style="color: #fff;">Tersedia :</a>
                <a href="#"class="animated fadeInDown btn btn-primary btn-outline-white py-1 px-3">Mobil</a>
                <a href="#"class="animated fadeInDown btn btn-primary btn-outline-white py-1 px-3">Motor</a>
                <a href="#"class="animated fadeInDown btn btn-primary btn-outline-white py-1 px-3">Truk</a>
                <a href="#"class="animated fadeInDown btn btn-primary btn-outline-white py-1 px-3">Aksesoris</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="layanan" class="site-section bg-light">
        <div class="container">
            <div class="row ">
                <div class="col-md-7 mx-auto text-center">
                  <h2 class="heading-29190">Melayani</h2>
                </div>
              </div>
          <div class="row">
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
              <div class="fact-39281 d-flex align-items-center">
                <div class="wrap-icon mr-3">
                  <span class="icon-exchange"></span>
                </div>
                <div class="h4">
                  <span>Tukar Tambah</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
              <div class="fact-39281 d-flex align-items-center">
                <div class="wrap-icon mr-3">
                  <span class="icon-send-o"></span>
                </div>
                <div class="h5">
                  <span>Pengiriman & Pemasangan Ke Lokasi</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
              <div class="fact-39281 d-flex align-items-center">
                <div class="wrap-icon mr-3">
                  <span class="icon-flash"></span>
                </div>
                <div class="h4">
                  <span>Setrum Aki</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
              <div class="fact-39281 d-flex align-items-center">
                <div class="wrap-icon mr-3">
                  <span class="icon-store_mall_directory"></span>
                </div>
                <div class="h4">
                  <span>Reseller</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-5 text-center">
            
            <h2 class="h4 mb-4">Tentang Kami</h2>
            <p>Menjual Segala Macam Jenis Aki Untuk Segala Kendaraan. Baik Aki Mobil, Sepeda Motor, Truk, Bus, Kapal, Dan Lainnya. Pemasangan Gratis. Cek Aki Gratis. Menerima Pengiriman Di Wilayah Bali.</p>
            <p><a href="<?php echo base_url(). 'index.php/halaman_produk'; ?>" class="btn btn-primary text-white px-5">Produk Kami</a></p>
          </div>

          <div class="col-md-2">
            <!-- <img src="images/about_1.jpg" alt="Image" class="img-fluid"> -->
          </div>

          <div class="col-md-5 text-center">  
            <h2 class="h4 mb-4">Kelebihan</h2>

            <div class="d-flex wrap-icon mb-3 mr-5">
                <span>Pengiriman 24 Jam</span>
                <span class="ml-auto icon-green icon-check"></span>
            </div>

            <div class="d-flex wrap-icon mb-3 mr-5">
                <span>Bergaransi</span>
                <span class="ml-auto icon-green icon-check"></span>
            </div>

            <div class="d-flex wrap-icon mb-3 mr-5">
                <span>Pemasangan Gratis</span>
                <span class="ml-auto icon-green icon-check"></span>
            </div>

            <div class="d-flex wrap-icon mb-3 mr-5">
                <span>Respon Cepat</span>
                <span class="ml-auto icon-green icon-check"></span>
            </div>

            <div class="d-flex wrap-icon mb-3 mr-5">
                <span>Aki Orisinil Yang Sudah Teruji</span>
                <span class="ml-auto icon-green icon-check"></span>
            </div>
            
          </div>
        </div>
      </div>
    </div>

<!-- END .site-section -->

    <footer class="site-footer">
        <div class="row mt-5 align-items-center justify-content-center text-center">
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

