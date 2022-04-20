<!-- Projects -->
<div class='projects' id='produk'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class='titlepage'>
                    <span><?= lang('lang.produk'); ?></span>
                    <h2><?= lang('lang.tersedia'); ?></h2>
                    <p><?= lang('lang.produk-tersedia'); ?></p>
                </div>
            </div>
        </div>
        <!-- SLIDER BLANTER -->
        <div class='sliderbanner container'>
            <div class='owl-carousel owl-theme' id='blanter-carousel'>
                <!-- START -->
                <div class='blanter-owl-image'>
                    <img src='<?= base_url('assets-dashboard/images/produk/pixpulsa.png') ?>'/>
                </div>
                <div class='blanter-owl-image'>
                    <img src='<?= base_url('assets-dashboard/images/produk/pixdata.png') ?>'/>
                </div>
                <div class='blanter-owl-image'>
                    <img src='<?= base_url('assets-dashboard/images/produk/pixgames.png') ?>'/>
                </div>
                <div class='blanter-owl-image'>
                    <img src='<?= base_url('assets-dashboard/images/produk/pixbill.png') ?>'/>
                </div>
                <!-- END -->
            </div>
        </div>
        <!-- END SLIDER BLANTER -->
    </div>
</div>
<!-- end projects -->

<!-- contact -->
<div id='kontak' class='contact'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class='titlepage'>
                    <h2><?= lang('lang.masukan'); ?></h2>
                    <span><?= lang('lang.title-masukan'); ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class='container'>
        <div class='row'>
        <div class='col-md-12'>
            <div class='main_form row'>
                <div class='col-md-12'>
                    <input class='form_contril' placeholder='<?= lang('lang.nama'); ?>' type='text' name='nama' id='nama'>
                </div>
                <div class='col-md-12'>
                    <input class='form_contril' placeholder='<?= lang('lang.notelp'); ?>' type='text' name='notelp' id='notelp'>
                </div>
                <div class='col-md-12'>
                    <input class='form_contril' placeholder='<?= lang('lang.e-mail'); ?>' type='text' name='email' id='email'>
                </div>
                <div class='col-md-12'>
                    <textarea class='textarea' placeholder='<?= lang('lang.catatan'); ?>' type='text' name='catatan' id='catatan' rows='5'></textarea>
                </div>
                <div class='col-sm-12'>
                    <button id='send_btn' class='send_btn'>
                        <p id='text-kirim'><?= lang('lang.kirim'); ?></p>
                        <img id='loading-kirim' src='<?= base_url('assets-dashboard/images/loading.gif'); ?>' width='40'>
                    </button>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- end contact -->
