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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

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
              <a href="<?php echo base_url(). ''; ?>" class="font-weight-bold">AKI 24 Jam Bali</a>
            </div>
          </div>
          <div class="col-6 text-right topnav" id="myTopNav">
            <ul class="menu text-right">
              <li class="menu-item"><a class="btn-navi btn-navi-primary btn-navi-outline-black py-3 px-4"
                  href="<?php echo base_url(). ''; ?>">Beranda</a></li>
              <li class="menu-item"><a class="btn-navi btn-navi-primary btn-navi-outline-black current py-3 px-3"
                  href="<?php echo base_url(). 'index.php/halaman_produk'; ?>">Produk</a></li>
              <li class="menu-item"><a class="btn-navi btn-navi-primary btn-navi-outline-black py-3 px-3"
                  href="<?php echo base_url(). 'index.php/halaman_galeri'; ?>">Galeri</a></li>
              <li class="menu-item"><a class="btn-navi btn-navi-primary btn-navi-outline-black py-3 px-3"
                  href="<?php echo base_url(). 'index.php/kontak'; ?>">Kontak</a></li>
            </ul>
          </div>

          <div class="col-1 text-left topbar black">
            <span class="d-inline-block d-lg-block"><a href="#"
                class="text-white site-menu-toggle js-menu-toggle py-5 text-black"><span
                  class="icon-menu h3 text-black"></span></a></span>
            <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto ">
                <li><a href="<?php echo base_url(). ''; ?>" class="nav-link">Beranda</a></li>
                <li class="active"><a href="<?php echo base_url(). 'index.php/halaman_produk'; ?>"
                    class="nav-link">Produk</a></li>
                <li><a href="<?php echo base_url(). 'index.php/halaman_galeri'; ?>" class="nav-link">Galeri</a></li>
                <li><a href="<?php echo base_url(). 'index.php/kontak'; ?>" class="nav-link">Kontak</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <!--Kategori Mobil-->
    <div class="site-section">
      <div class="container martop mb-4">
        <div class="row animated fadeIn ">
          <div class="col-6 mb-2">
            <h4>Mobil</h4>
          </div>
          <div class="col-6 text-right topnav mb-2">
            <a href="<?php echo base_url(); ?>index.php/halaman_produk/kategori" class="btn btn-primary text-white px-3 py-1" style="font-weight: lighter;">Lihat lainnya</a>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row animated zoomIn">
            <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-4">
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
            </div> -->

            <?php
              $i = 0;
                  foreach($mobil as $d)
                            {                                                   
                          ?>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-4">
              <div class="uk-card">
                <a href="<?php echo base_url(); ?>index.php/halaman_produk/detail/<?php echo $d->id; ?>">
                  <img src="<?php echo base_url();?><?php echo $d->gambar; ?>" alt="Image" class="img-card">
                  <div class="card-container">
                    <div class="card-title "><?php echo $d->nama; ?> </div>
                    <div class="d-flex">
                      <span class="col-md-6 text-left card-merk"><?php echo $d->merek; ?></span>
                      <span class="col-md-6 text-center card-tag">Mobil</span>
                    </div>
                    <div class="card-price"><?php echo $d->harga; ?></div>
                  </div>
                </a>
              </div>
            </div>
            <?php    
                if (++$i == 4) break;                            
                    	}
                ?>
          </div>
        </div>
      </div>

      <!--Kategori Motor-->
      <div class="container mb-4">
        <div class="row animated fadeIn">
          <div class="col-6 mb-2">
            <h4>Motor</h4>
          </div>
          <div class="col-6 text-right topnav mb-2">
            <a href="<?php echo base_url(); ?>index.php/halaman_produk/kategori" class="btn btn-primary text-white px-3 py-1" style="font-weight: lighter;">Lihat lainnya</a>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row animated zoomIn">
            <?php
              $i = 0;
                  foreach($motor as $d)
                            {                                                   
                          ?>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-4">
              <div class="uk-card">
                <a href="<?php echo base_url(); ?>index.php/halaman_produk/detail/<?php echo $d->id; ?>">
                  <img src="<?php echo base_url();?><?php echo $d->gambar; ?>" alt="Image" class="img-card">
                  <div class="card-container">
                    <div class="card-title "><?php echo $d->nama; ?> </div>
                    <div class="d-flex">
                      <span class="col-md-6 text-left card-merk"><?php echo $d->merek; ?></span>
                      <span class="col-md-6 text-center card-tag">Motor</span>
                    </div>
                    <div class="card-price"><?php echo $d->harga; ?></div>
                  </div>
                </a>
              </div>
            </div>
            <?php    
                if (++$i == 4) break;                            
                    	}
                ?>
          </div>
        </div>
      </div>

      <!--Kategori Truk-->
      <div class="container mb-4">
        <div class="row animated fadeIn">
          <div class="col-6 mb-2">
            <h4>Truk</h4>
          </div>
          <div class="col-6 text-right topnav mb-2">
            <a href="<?php echo base_url(); ?>index.php/halaman_produk/kategori" class="btn btn-primary text-white px-3 py-1" style="font-weight: lighter;">Lihat lainnya</a>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row animated zoomIn">
            <?php
              $i = 0;
                  foreach($truck as $d)
                            {                                                   
                          ?>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-4">
              <div class="uk-card">
                <a href="<?php echo base_url(); ?>index.php/halaman_produk/detail/<?php echo $d->id; ?>">
                  <img src="<?php echo base_url();?><?php echo $d->gambar; ?>" alt="Image" class="img-card">
                  <div class="card-container">
                    <div class="card-title "><?php echo $d->nama; ?> </div>
                    <div class="d-flex">
                      <span class="col-md-6 text-left card-merk"><?php echo $d->merek; ?></span>
                      <span class="col-md-6 text-center card-tag">Truk</span>
                    </div>
                    <div class="card-price"><?php echo $d->harga; ?></div>
                  </div>
                </a>
              </div>
            </div>
            <?php    
                if (++$i == 4) break;                            
                    	}
                ?>
          </div>
        </div>
      </div>

      <!--Kategori Aksesoris-->
      <div class="container mb-4">
        <div class="row animated fadeIn">
          <div class="col-6 mb-2">
            <h4>Aksesoris</h4>
          </div>
          <div class="col-6 text-right topnav mb-2">
            <a href="<?php echo base_url(); ?>index.php/halaman_produk/kategori" class="btn btn-primary text-white px-3 py-1" style="font-weight: lighter;">Lihat lainnya</a>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row animated zoomIn">
            <?php
              $i = 0;
                  foreach($aksesoris as $d)
                            {                                                   
                          ?>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-4">
              <div class="uk-card">
                <a href="<?php echo base_url(); ?>index.php/halaman_produk/detail/<?php echo $d->id; ?>">
                  <img src="<?php echo base_url();?><?php echo $d->gambar; ?>" alt="Image" class="img-card">
                  <div class="card-container">
                    <div class="card-title "><?php echo $d->nama; ?> </div>
                    <div class="d-flex">
                      <span class="col-md-6 text-left card-merk"><?php echo $d->merek; ?></span>
                      <span class="col-md-6 text-center card-tag">Aksesoris</span>
                    </div>
                    <div class="card-price"><?php echo $d->harga; ?></div>
                  </div>
                </a>
              </div>
            </div>
            <?php    
                if (++$i == 4) break;                            
                    	}
                ?>
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
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> AKI 24 Jam Bali
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