
        <!--  footer -->
        <footer>
            <div class='footer'>
                <div class='container'>
                <div class='row'>
                    <div class='col-md-12 '>
                        <div class='cont'>
                            <h3> <strong class='multi'>Pixarts</strong><br>
                            </h3>
                        </div>
                    </div>
                    <div class='col-md-12'>
                        <ul class='social_icon'>
                            <div>
                                <li>
                                    <a href='https://wa.me/6282322525083' target='_blank'>
                                        <i class='fa fa-whatsapp' aria-hidden='true'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href='#' target='_blank'>
                                        <i class='fa fa-telegram' aria-hidden='true'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href='#' target='_blank'>
                                        <i class='fa fa-instagram' aria-hidden='true'></i>
                                    </a>
                                </li>
                            </div>
                            <div>
                                <a href='https://play.google.com/store' aria-hidden='true'>
                                    <img src='<?= base_url('assets-dashboard/images/play-store.png'); ?>' alt='#' width='200'/>
                                </a>
                            </div>
                        </ul>
                    </div>
                </div>
                </div>
                <div class='copyright'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-md-12'>
                            <p>&#169; Reserved By <a href='<?= '#' ?>'>Pixarts</a></p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- Javascript files-->
        <script src='<?= base_url('assets-dashboard/js/jquery.min.js') ?>'></script>
        <script src='<?= base_url('assets-dashboard/js/popper.min.js') ?>'></script>
        <script src='<?= base_url('assets-dashboard/js/bootstrap.bundle.min.js') ?>'></script>
        <script src='<?= base_url('assets-dashboard/js/jquery-3.0.0.min.js') ?>'></script>
        <script src='<?= base_url('assets-dashboard/js/plugin.js') ?>'></script>
        <script src='<?= base_url('assets-dashboard/js/send_email.js') ?>'></script>
        <!-- sidebar -->
        <script src='<?= base_url('assets-dashboard/js/jquery.mCustomScrollbar.concat.min.js') ?>'></script>
        <script src='<?= base_url('assets-dashboard/js/custom.js') ?>'></script>
        <script src='https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js'></script>
        <script src='https://cdn.jsdelivr.net/gh/blanter/design@master/blanter-owlcarousel.js'></script>
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