<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Pixarts</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <!-- style css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">
    <!-- fevicon -->
    <link href="<?= base_url('assets/images/fevicon.png') ?>" rel="icon">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery.mCustomScrollbar.min.css') ?>">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="<?= base_url('assets/images/loading.gif'); ?>"/></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div  class="head_top" id="home">
            <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="index.html"><img src="<?= base_url('assets/images/logo.png'); ?>" alt="#" /></a>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#produk">Produk</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#kontak">Kontak</a>
                                </li>
                            </ul>
                        </div>
                        </nav>
                    </div>
                </div>
            </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <!-- banner -->
            <section class="banner_main">
            <div class="container-fluid">
                <div class="row d_flex">
                    <div class="col-md-6">
                        <div class="text-bg">
                        <h1>Digital TopUp</h1>
                        <p>Isi pulsa, paket data, bayar tagihan dan TopUp bisa langsung dengan sekali klik, mudah aman terpercaya</p>
                        <a href="#produk">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-img">
                        <figure><img src="<?= base_url('assets/images/box_img.png'); ?>" alt="#"/></figure>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </div>
    </header>
    <!-- end banner -->
    
    <?= $this->renderSection('content') ?>

    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="cont">
                        <h3> <strong class="multi">Pixarts</strong><br>
                        </h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="social_icon">
                        <div>
                            <li>
                                <a href="https://wa.me/6282322525083" target="_blank">
                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fa fa-telegram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                        </div>
                        <div>
                            <a href="https://play.google.com/store" aria-hidden="true">
                                <img src="<?= base_url('assets/images/play-store.png'); ?>" alt="#" width="200"/>
                            </a>
                        </div>
                    </ul>
                </div>
            </div>
            </div>
            <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>&#169; Reserved By <a href="<?= '#' ?>">Pixarts</a></p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery-3.0.0.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugin.js') ?>"></script>
    <script src="<?= base_url('assets/js/send_email.js') ?>"></script>
    <!-- sidebar -->
    <script src="<?= base_url('assets/js/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/custom.js') ?>"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/blanter/design@master/blanter-owlcarousel.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            center: true,
            items: 3,
            margin: 15,
            autoplay: true,
            dots: true,
            nav: true,
            autoplayTimeout: 8500,
            smartSpeed: 450,
            responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1170: {
                items: 3
            }
            }
        });
    </script>
</body>
</html>