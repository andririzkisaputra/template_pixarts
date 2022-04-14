<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
    <!-- Projects -->
    <div class="projects" id="produk">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <span>Produk</span>
                        <h2>Tersedia dengan berbagai macam produk</h2>
                        <p>Produk yang tersedia di jamin murah, aman dan terpercaya</p>
                    </div>
                </div>
            </div>
            <!-- SLIDER BLANTER -->
            <div class='sliderbanner container'>
                <div class='owl-carousel owl-theme' id='blanter-carousel'>
                    <!-- START -->
                    <div class='blanter-owl-image'>
                        <img src='<?= base_url('assets/images/produk/pixpulsa.png') ?>'/>
                    </div>
                    <div class='blanter-owl-image'>
                        <img src='<?= base_url('assets/images/produk/pixdata.png') ?>'/>
                    </div>
                    <div class='blanter-owl-image'>
                        <img src='<?= base_url('assets/images/produk/pixgames.png') ?>'/>
                    </div>
                    <div class='blanter-owl-image'>
                        <img src='<?= base_url('assets/images/produk/pixbill.png') ?>'/>
                    </div>
                    <!-- END -->
                </div>
            </div>
            <!-- END SLIDER BLANTER -->
        </div>
    </div>
    <!-- end projects -->

    <!-- contact -->
    <div id="kontak" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Masukan</h2>
                        <span>Masukan mu sangat berarti buat kami.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <!-- <form class="main_form"> -->
                <div class="main_form row">
                    <div class="col-md-12">
                        <input class="form_contril" placeholder="Nama" type="text" name="nama" id="nama">
                    </div>
                    <div class="col-md-12">
                        <input class="form_contril" placeholder="Nomor HP" type="text" name="notelp" id="notelp">
                    </div>
                    <div class="col-md-12">
                        <input class="form_contril" placeholder="Email" type="text" name="email" id="email">
                    </div>
                    <div class="col-md-12">
                        <textarea class="textarea" placeholder="Catatan" type="text" name="catatan" id="catatan" rows="5"></textarea>
                    </div>
                    <div class="col-sm-12">
                        <button id="send_btn" class="send_btn">Kirim</button>
                    </div>
                </div>
                <!-- </form> -->
            </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
<?= $this->endSection() ?>