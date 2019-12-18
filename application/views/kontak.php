<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

  <head>
    <title>AKI 24 Jam Bali | Kontak</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        /* Set the size of the div element that contains the map */
       #map {
         height: 400px;  /* The height is 400 pixels */
         width: 100%;  /* The width is the width of the web page */
        }
     </style>

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
                <a href="<?php echo base_url(). 'index.php/Welcome'; ?>" class="font-weight-bold">AKI 24 Jam Bali</a>
              </div>
            </div>
            <div class="col-6 text-right topnav" id="myTopNav">
              <ul class="menu text-right">
                <li class="menu-item"><a class="btn-navi btn-navi-primary btn-navi-outline-black py-3 px-4" href="<?php echo base_url(); ?>">Beranda</a></li>
                <li class="menu-item"><a class="btn-navi btn-navi-primary btn-navi-outline-black py-3 px-3" href="<?php echo base_url(). 'index.php/halaman_produk'; ?>">Produk</a></li>
                <li class="menu-item"><a class="btn-navi btn-navi-primary btn-navi-outline-black py-3 px-3" href="<?php echo base_url(). 'index.php/halaman_galeri'; ?>">Galeri</a></li>
                <li class="menu-item"><a class="btn-navi btn-navi-primary btn-navi-outline-black current py-3 px-3" href="<?php echo base_url(). 'index.php/kontak'; ?>">Kontak</a></li>
              </ul>
            </div>

            <div class="col-1 text-left topbar black">
              <span class="d-inline-block d-lg-block"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-black"><span class="icon-menu h3 text-black"></span></a></span>
              <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                <li><a href="<?php echo base_url(). 'index.php/Welcome'; ?>" class="nav-link">Beranda</a></li>
                <li><a href="<?php echo base_url(). 'index.php/halaman_produk'; ?>" class="nav-link">Produk</a></li>
                <li><a href="<?php echo base_url(). 'index.php/halaman_galeri'; ?>" class="nav-link">Galeri</a></li>
                <li class="active"><a href="<?php echo base_url(). 'index.php/kontak'; ?>" class="nav-link">Kontak</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>

   <div class="site-section">
      <div class="container martop">
        <div class="row ">
          <div class="col-lg-8 mb-5 animated fadeInDown" >
              <!--The div element for the map -->
              <div id="map"></div>
              <script>
                // Initialize and add the map
                function initMap() {
                  // The location of Uluru
                  var uluru = {lat: -8.552486,lng: 115.141070};
                  // The map, centered at Uluru
                  var map = new google.maps.Map(
                      document.getElementById('map'), {zoom: 18, center: uluru});
                  // The marker, positioned at Uluru
                  var marker = new google.maps.Marker({position: uluru, map: map});
                }
              </script>
              <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBua-FDUL4F9yeiYy7xeRmKaslqXdN-vVg&callback=initMap">
              </script>

          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4 animated fadeInDown">Info Kontak</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3 animated fadeInDown">
                  <span class="d-block text-black">Lokasi Toko:</span>
                  <span>Jln. Ngurah Rai 69 Kediri Tabanan</span></li>
                <li class="d-block mb-3 animated fadeInDown"><span class="d-block text-black">Nomor Telepon:</span><span>08123813654 / 085101409700</span></li>
                <li class="d-block mb-3 animated zoomIn"><a href="https://wa.me/628123813654?text=Halo%20AKI%20Bali%2024%20Jam%20Saya%20ingin%20bertanya" class="btn btn-primary text-white px-5">Whatsapp</span></a></li>
                <li class="d-block mb-3 animated zoomIn"><a href="https://goo.gl/maps/VnTqeve19ff3yGQ49" class="btn btn-primary text-white px-4">Buka Google Map</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- END .site-section -->
    
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