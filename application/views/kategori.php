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

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.4/dist/css/uikit.min.css" />

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
                            <a href="index.html" class="font-weight-bold">AKI 24 Jam Bali</a>
                        </div>
                    </div>
                    <!-- <div class="col-6 text-right topnav" id="myTopNav">
              <ul class="menu text-right">
                <li class="menu-item"><a class="btn-navi btn-navi-primary btn-navi-outline-black py-3 px-4" href="">Beranda</a></li>
                <li class="menu-item"><a class="btn-navi btn-navi-primary btn-navi-outline-black current py-3 px-3" href="produk.html">Produk</a></li>
                <li class="menu-item"><a class="btn-navi btn-navi-primary btn-navi-outline-black py-3 px-3" href="galeri.html">Galeri</a></li>
                <li class="menu-item"><a class="btn-navi btn-navi-primary btn-navi-outline-black py-3 px-3" href="kontak.html">Kontak</a></li>
              </ul>
            </div> -->
                    <div class="col-6 text-right topnav" id="myTopNav">
                        <ul class="menu text-right">
                            <li class="menu-item"><a class="btn-navi btn-navi-primary btn-navi-outline-black py-3 px-4"
                                    href="<?php echo base_url(). ''; ?>">Beranda</a></li>
                            <li class="menu-item"><a
                                    class="btn-navi btn-navi-primary btn-navi-outline-black current py-3 px-3"
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
                                <li><a href="index.html" class="nav-link">Beranda</a></li>
                                <li class="active"><a href="produk.html" class="nav-link">Produk</a></li>
                                <li><a href="galeri.html" class="nav-link">Galeri</a></li>
                                <li><a href="kontak.html" class="nav-link">Kontak</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <style>
            .category-card {
                min-width: min-content;
                padding: 20px;
                background-color: #fff;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                min-height: 200px;

            }
        </style>
        <!-- Tabel Kategori-->
        <div class="container martop">
            <div class="row col-md-12">
                <div class="site-section col-md-4">
                    <div class="container mb-4">
                        <div class="category-card">
                            <h4 onclick="showData(0,0)"><strong>Kategori</strong></h4>
                            <ul uk-accordion>
                                <!-- <li class="uk-open"> -->
                                <li>
                                    <a class="uk-accordion-title" style="color: #01d28e;" onclick="showData(0,2)"
                                        href="#">Mobil</a>
                                    <div class="uk-accordion-content">
                                        <ul style="list-style: none;">
                                            <!-- <li><a>Yuasa</a></li>
                      <li><a>Gefoce</a></li>
                      <li><a>Incoe</a></li> -->
                                            <?php
                                foreach($merek_mobil as $d)
                                {                               
                                    echo "<li><a onclick='showData($d->id_merek,2)'>$d->nama</a></li>";                
                                }
                            ?>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" style="color: #ef3e36;" onclick="showData(0,1)"
                                        href="#">Motor</a>
                                    <div class="uk-accordion-content">
                                        <ul style="list-style: none;">
                                            <!-- <li><a>Yuasa</a></li>
                      <li><a>Gefoce</a></li>
                      <li><a<>Incoe</a></li> -->
                                            <?php
                                foreach($merek_motor as $d)
                                {                               
                                    echo "<li><a onclick='showData($d->id_merek,1)'>$d->nama</a></li>";                
                                }
                            ?>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" style="color: #2e282a;" onclick="showData(0,3)"
                                        href="#">Truk</a>
                                    <div class="uk-accordion-content">
                                        <ul style="list-style: none;">
                                            <!-- <li><a>Yuasa</a></li>
                      <li><a>Gefoce</a></li>
                      <li><a<>Incoe</a></li> -->
                                            <?php
                                foreach($merek_truck as $d)
                                {                               
                                    echo "<li><a onclick='showData($d->id_merek,3)'>$d->nama</a></li>";                
                                }
                            ?>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" style="color: #ffc43d;" onclick="showData(0,4)"
                                        href="#">Aksesoris</a>
                                    <div class="uk-accordion-content">
                                        <ul style="list-style: none;">
                                            <!-- <li><a>Yuasa</a></li>
                      <li><a>Gefoce</a></li>
                      <li><a<>Incoe</a></li> -->
                                            <?php
                                foreach($merek_aksesoris as $d)
                                {                               
                                    echo "<li><a onclick='showData($d->id_merek,4)'>$d->nama</a></li>";                
                                }
                            ?>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Kategori Mobil-->
                <div class="site-section col-md-8">
                    <div class="container mb-4">
                        <div class="col-md-12">
                            <div class="row animated zoomIn" id="kontenya">
                                <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
                                    <div class="uk-card">
                                        <a href="produk-detail.html">
                                            <img src="<?php echo base_url();?>asset2/images/vs.jpg" alt="Image"
                                                class="img-card">
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






                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END .site-section -->


        <footer class="site-footer" style="margin-top:50px">
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

        <script>

        </script>
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

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.4/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.4/dist/js/uikit-icons.min.js"></script>
        <script>
            $(document).ready(function () {
                console.log('this is run on page load');
                showData(0, 0);
            });
            function showData(merek, kategori) {
                $('#kontenya').html("");
                urlnya = "";
                if (merek == 0 && kategori == 0) {
                    urlnya = "<?php echo base_url();?>index.php/item"
                } else if (merek != 0 && kategori == 0) {
                    urlnya = "<?php echo base_url();?>index.php/item?id=" + merek
                } else if (merek == 0 && kategori != 0) {
                    urlnya = "<?php echo base_url();?>index.php/item?kategori=" + kategori
                } else if (merek != 0 && kategori != 0) {
                    urlnya = "<?php echo base_url();?>index.php/item?id=" + merek + "&kategori=" + kategori
                }
                $.ajax({
                    url: urlnya,
                    type: 'GET',
                    dataType: 'json',
                    success: function (response) {
                        console.log(response)
                        $.each(response, function (key, value) {
                            var jenis = '';
                            if (value.kategori == 1) {
                                jenis = "Motor";
                            } else if (value.kategori == 2) {
                                jenis = "Mobil";
                            }
                            else if (value.kategori == 3) {
                                jenis = "Truk";
                            }
                            else if (value.kategori == 4) {
                                jenis = "Aksesoris";
                            }
                            $("#kontenya").append('<div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-4"><div class="uk-card"><a href="<?php echo base_url(); ?>index.php/halaman_produk/detail/' + value.id + '"><img src="<?php echo base_url();?>' + value.gambar + '" alt="Image"class="img-card"><div class="card-container"><div class="card-title ">' + value.nama + '</div><div class=" text-left card-merk mb-4">' + value.merek + '</div><div class=" text-center card-tag">' + jenis + '</div><div class="card-price">Rp. ' + value.harga + '</div></div></a></div></div>');
                        });
                    }
                });
            }
        </script>
</body>

</html>