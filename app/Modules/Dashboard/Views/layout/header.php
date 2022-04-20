<!DOCTYPE html>
<html lang='<?= $locale ?>'>
    <head>
        <!-- basic -->
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <!-- mobile metas -->
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta name='viewport' content='initial-scale=1, maximum-scale=1'>
        <!-- site metas -->
        <title>Pixarts</title>
        <meta name='keywords' content=''>
        <meta name='description' content=''>
        <meta name='author' content=''>
        <!-- bootstrap css -->
        <link rel='stylesheet' href='<?= base_url('assets-dashboard/css/bootstrap.min.css') ?>'>
        <!-- style css -->
        <link rel='stylesheet' href='<?= base_url('assets-dashboard/css/style.css') ?>'>
        <!-- Responsive-->
        <link rel='stylesheet' href='<?= base_url('assets-dashboard/css/responsive.css') ?>'>
        <!-- fevicon -->
        <link href='<?= base_url('assets-dashboard/images/fevicon.png') ?>' rel='icon'>
        <!-- Scrollbar Custom CSS -->
        <link rel='stylesheet' href='<?= base_url('assets-dashboard/css/jquery.mCustomScrollbar.min.css') ?>'>
        <!-- Tweaks for older IEs-->
        <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css' media='screen'>
    </head>
    <!-- body -->
    <body class='main-layout'>
        <!-- loader  -->
        <div class='loader_bg'>
            <div class='loader'><img src='<?= base_url('assets-dashboard/images/loading.gif'); ?>'/></div>
        </div>
        <!-- end loader -->
        <!-- header -->
        <header>
            <!-- header inner -->
            <div  class='head_top' id='home'>
                <div class='header'>
                <div class='container-fluid'>
                    <div class='row'>
                        <div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section'>
                            <div class='full'>
                            <div class='center-desk'>
                                <div class='logo'>
                                    <a href='index.html'><img src='<?= base_url('assets-dashboard/images/logo.png'); ?>' alt='#' /></a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class='col-xl-9 col-lg-9 col-md-9 col-sm-9'>
                            <nav class='navigation navbar navbar-expand-md navbar-dark '>
                            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarsExample04' aria-controls='navbarsExample04' aria-expanded='false' aria-label='Toggle navigation'>
                            <span class='navbar-toggler-icon'></span>
                            </button>
                            <div class='collapse navbar-collapse' id='navbarsExample04'>
                                <ul class='navbar-nav mr-auto'>
                                    <!-- <li class='nav-item'>
                                        <a class='nav-link' href='#home'><?php lang('lang.beranda'); ?></a>
                                    </li> -->
                                    <li class='nav-item'>
                                        <a class='nav-link' href='#produk'><?= lang('lang.produk'); ?></a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='#kontak'><?= lang('lang.kontak'); ?></a>
                                    </li>
                                    <li class='nav-item dropdown'>
                                        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                            <?= lang('lang.pilih-bahasa'); ?>
                                        </a>
                                        <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                                            <a class='dropdown-item' href='lang/id'>
                                                <img class='bendera' src='<?= base_url('assets-dashboard/images/bendera/indonesia.png'); ?>' width='30'>
                                                <?= lang('lang.indonesia'); ?>
                                            </a>
                                            <a class='dropdown-item' href='lang/en'>
                                                <img class='bendera' src='<?= base_url('assets-dashboard/images/bendera/inggris.png'); ?>' width='30'>
                                                <?= lang('lang.inggris'); ?>
                                            </a>
                                        </div>
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
                <section class='banner_main'>
                <div class='container-fluid'>
                    <div class='row d_flex'>
                        <div class='col-md-6'>
                            <div class='text-bg'>
                            <h1><?= lang('lang.header-top-up') ?></h1>
                            <p><?= lang('lang.title-top-up') ?></p>
                            <a href='#produk'><?= lang('lang.selengkapnya') ?></a>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class='text-img'>
                            <figure><img src='<?= base_url('assets-dashboard/images/box_img.png'); ?>' alt='#'/></figure>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
            </div>
        </header>
        <!-- end banner -->