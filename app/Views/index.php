<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<!-- business -->
<div class="business">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="titlepage">
                <span>PIXARTS</span>
                <h2>Layanan PPOB</h2>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="row">
                <div class="col-md-12">
                    <div class="business_box ">
                    <figure><img src="<?= base_url('assets/images/business_img.jpg') ?>" alt="#"/></figure>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believableThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                    <a class="read_more" href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- end business -->

<!-- Projects -->
<div class="projects">
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
        <div>
        <!-- SLIDER BLANTER -->
        <div class='sliderbanner container'>
            <div class='owl-carousel owl-theme' id='blanter-carousel'>
                <!-- START -->
                <div class='blanter-owl-image'>
                    <img src='<?= base_url('assets/images/produk/pixpulsa.png') ?>'/>
                    <!-- <div style="background: url(images/produk/produk-1.jpg)"></div> -->
                </div>
                <div class='blanter-owl-image'>
                    <img src='<?= base_url('assets/images/produk/pixdata.png') ?>'/>
                    <!-- <div style="background: url(images/produk/produk-2.jpg)"></div> -->
                </div>
                <div class='blanter-owl-image'>
                    <img src='<?= base_url('assets/images/produk/pixgames.png') ?>'/>
                    <!-- <div style="background: url(images/produk/produk-1.jpg)"></div> -->
                </div>
                <div class='blanter-owl-image'>
                    <img src='<?= base_url('assets/images/produk/pixbill.png') ?>'/>
                    <!-- <div style="background: url(images/produk/produk-2.jpg)"></div> -->
                </div>
                <!-- END -->
            </div>
        </div>
        <!-- END SLIDER BLANTER -->
        </div>
    </div>
</div>
<!-- end projects -->

<!-- Testimonial -->
<!-- <div class="section">
    <div class="container">
        <div id="" class="Testimonial">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Testimonial</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="Testimonial_box">
                    <i><img src="images/plan1.png" alt="#"/></i>
                </div>
            </div>
            <div class="col-md-9">
                <div class="Testimonial_box">
                    <h4>Donals</h4>
                    <p>Tof Lorem Ipsum, you need to be There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a pass <br>
                    age of Lorem Ipsum, you need to be 
                    </p>
                </div>
            </div>
        </div>
        </div>
    </div>
</div> -->

<!-- end Testimonial -->
<!-- contact -->
<div id="contact" class="contact">
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
        <div class="col-md-12 ">
            <form class="main_form ">
                <div class="row">
                    <div class="col-md-12 ">
                    <input class="form_contril" placeholder="Nama " type="text" name="nama">
                    </div>
                    <div class="col-md-12">
                    <input class="form_contril" placeholder="Nomor HP" type="text" name="notelp">
                    </div>
                    <div class="col-md-12">
                    <input class="form_contril" placeholder="Email" type="text" name="email">
                    </div>
                    <div class="col-md-12">
                    <textarea class="textarea" placeholder="Catatan" type="text" name="catatan" rows="5"></textarea>
                    </div>
                    <div class="col-sm-12">
                    <button class="send_btn">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
<!-- end contact -->
<?= $this->endSection() ?>