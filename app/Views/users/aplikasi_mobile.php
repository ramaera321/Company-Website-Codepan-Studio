<?= $this->extend('templates/v_super_user'); ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="/assets/css/dropdown_item.css">
<link rel="stylesheet" href="/assets/css/responsive.css">
<?= $this->endSection(); ?>

<?= $this->section('content_user'); ?>
<!-- Jumbotron Heading -->
<div id="mt" class="centered jumbotron jumbotron-fluid"
    style="background-image: url('/assets/img/banner/<?= $banner['foto']; ?>');">
    <div class="container" data-aos="fade-up">
        <h1 class="display-4">Aplikasi Mobile</h1>
        <p class="lead text-center">
            Jasa pembuatan aplikasi kami membantu anda mewujudkan kedekatan
            dengan mitra bisnis Anda
        </p>
        <a href="#" class="btn tombol hvr-bounce-to-top">Pesan Sekarang</a>
    </div>
</div>
<!-- Akhir JumboTron -->

<!-- <section id="hadirDenganSolusi"> -->
<section id="hadirDenganSolusi">
    <div class="container">
        <div class="row mb-ket-solusi">
            <div class="col-md-5" id="judulSI" data-aos="fade-right">
                <h1>Kami Hadir dengan Solusi Terbaik</h1>
                <p>Jasa pembuatan aplikasi mobile ini kami hadirkan untuk memberikan layanan dan solusi bagi Anda.
                    Kami menawarkan layanan aplikasi mobile yang kompetitif dan prima menggunakan metode yang handal
                    dan terpercaya.</p>
                <p><a class="hvr-bounce-to-right" href="#">Dapatkan Konsultasi Gratis <i
                            class="fas fa-long-arrow-alt-right hvr-icon-fade"></i></a></p>
            </div>

            <div class="col-md-7" id="bullets" data-aos="fade-left">
                <ul>
                    <li><img src="/assets/img/assets/Pointer.png" alt=""></li>
                    <li class="bullets">
                        <h4>Mendekatkan Konsumen</h4>
                        <p>Smartphone sudah dipakai di semua kalangan, sehingga akan lebih mudah menjangkau konsumen
                            dengan aplikasi mobile.</p>
                    </li>
                </ul>
                <ul>
                    <li><img src="/assets/img/assets/Pointer.png" alt=""></li>
                    <li class="bullets">
                        <h4>Lebih Mudah</h4>
                        <p>Mempermudah akses aplikasi kapanpun hanya melalui satu genggaman.</p>
                    </li>
                </ul>
                <ul>
                    <li><img src="/assets/img/assets/Pointer.png" alt=""></li>
                    <li class="bullets">
                        <h4>Memperlancar Komunikasi</h4>
                        <p>Aplikasi mobile akan memperlancar komunikasi Anda dengan rekan kerja maupun klien..</p>
                    </li>
                </ul>
                <ul>
                    <li><img src="/assets/img/assets/Pointer.png" alt=""></li>
                    <li class="bullets">
                        <h4>Engagement Meningkat</h4>
                        <p>Dengan aplikasi mobile, engagement pengguna terhadap layanan yang Anda tawarkan akan
                            meningkat.</p>
                    </li>
                </ul>
            </div>
        </div>
        <!--Akhir Row-->

        <div class="row" id="row-card" data-aos="fade-down" data-aos-delay="200">
            <div class="col-lg-3 col-md-6 mb-4 margin-rowCard">
                <div class="card h-100">
                    <!-- <img src="/img/Path.png" class="card-img-top" alt="..."> -->
                    <div class="card-img-rowCard">
                        <lottie-player class="graf" src="https://assets2.lottiefiles.com/packages/lf20_nl9bgfle.json"
                            background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay>
                        </lottie-player>
                    </div>
                    <div class="card-body">
                        <div id="counter">
                            <div class="pembungkus-counter d-flex justify-content-center align-items-center">
                                <p class="card-text counter-value" id="count1" data-count="1">20</p>
                                <span id="span1">+</span>
                            </div>
                            <h5 class="card-title">Pengalaman</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 margin-rowCard">
                <div class="card h-100">
                    <!-- <img src="/img/smile.png" class="card-img-top" alt="..."> -->
                    <div class="card-img-rowCard">
                        <lottie-player class="smile" src="https://assets7.lottiefiles.com/packages/lf20_qdbb21wb.json"
                            background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay>
                        </lottie-player>
                    </div>

                    <div class="card-body">
                        <div id="counter">
                            <div class="pembungkus-counter d-flex justify-content-center align-items-center">
                                <p class="card-text counter-value" id="count2" data-count="100">50</p>
                                <span id="span2">+</span>
                            </div>
                            <h5 class="card-title">Kepuasan Pelanggan</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 margin-rowCard">
                <div class="card h-100">
                    <!-- <img src="/img/Shape.png" class="card-img-top" alt="..."> -->
                    <div class="card-img-rowCard">
                        <lottie-player class="phone" src="https://assets4.lottiefiles.com/packages/lf20_tlzxty4j.json"
                            background="transparent" speed="1" style="width: 70px; height: auto;" loop autoplay>
                        </lottie-player>
                    </div>
                    <div class="card-body">
                        <div id="counter">
                            <div class="pembungkus-counter d-flex justify-content-center align-items-center">
                                <p class="card-text counter-value" id="count3" data-count="365">0</p>
                                <span id="span3">24/7</span>
                            </div>
                            <h5 class="card-title">Kepuasan Pelanggan</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 margin-rowCard">
                <div class="card h-100">
                    <!-- <img src="/img/user.png" class="card-img-top" alt="..."> -->
                    <div class="card-img-rowCard">
                        <lottie-player class="partner" src="https://assets1.lottiefiles.com/packages/lf20_2wrjlrbz.json"
                            background="transparent" speed="1" style="width: 100px; height: 100;" loop autoplay>
                        </lottie-player>
                    </div>
                    <div class="card-body">
                        <div id="counter">
                            <div
                                class="pembungkus-counter d-flex justify-content-center align-items-center align-items-center">
                                <p class="card-text counter-value" id="count4" data-count="1">20</p>
                                <span id="span4">partner</span>
                            </div>
                            <h5 class="card-title">Kepuasan Pelanggan</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Akhir Row-Card-->

        <p class="p-bottom">Kami akan membantu Anda mencapai tujuan. <a class="hvr-underline-from-left"
                href="#">Konsultasi sekarang.</a></p>
    </div>
    <!--Akhir Container 1-->

    <div class="container" id="kunci-sukses">
        <div class="row">
            <div class="col">
                <h5 class="tag-kecil">Kunci Sukses</h5>
                <h2 class="tag-besar">SYARAT IMPLEMENTASI APLIKASI MOBILE</h2>
                <p class="capt">Aplikasi mobile yang handal dan terbaik, membutuhkan kerja sama dari semua pihak.
                    Anda bisa membantu kami dalam mengimplementasikannya.</p>
            </div>
        </div>
        <!--Akhir Row1-->
        <div class="row">
            <div class="col-lg-4" data-aos="zoom-out">
                <figure class="figure">
                    <img src="/assets/img/syarat-implementasi/card1.png" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">
                        <h1>1. Masterplan</h1>
                        <p>Memiliki masterplan atau konsep pengembangan teknologi akan menjadi nilai plus dalam
                            mendukung output sistem.</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="200">
                <figure class="figure">
                    <img src="/assets/img/syarat-implementasi/card2.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">
                        <h1>2. Kebijakan</h1>
                        <p>Pemangku kepentingan sudah mengeluarkan keputusan terkait rencana pengembangan sistem
                            informasi sekaligus menentukan goal dari tujuan akhir implementasi sistem informasi.</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                <figure class="figure">
                    <img src="/assets/img/syarat-implementasi/card5.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">
                        <h1>3. Core System</h1>
                        <p>Sudah ada aturan proses kerja dalam institusi yang telah dibakukan dan di sahkan.
                            (contoh: Standard Operational Procedure)</p>
                    </figcaption>
                </figure>
            </div>
        </div>
        <!--AKhir Row2-->

    </div>
    <!--Akhir Container 2-->
    <br><br>
</section>

<section id="portofolio">
    <div class="container">
        <div class="row">
            <div class="col">
                <h5 class="tag-kecil">Portofolio</h5>
                <h2 class="tag-besar">HASIL JASA LAYANAN KAMI</h2>
                <p class="capt">Inilah beberapa hasil aplikasi mobile kami dengan beberapa mitra. Tenaga
                    ahli kami telah mampu menyelesaikan permasalahan dan meningkatkan kinerja perusahaan mitra kami.
                </p>
            </div>
        </div>
        <!--Akhir Row1-->
        <div class="row" data-aos="fade-up" data-aos-offset="10" data-aos-delay="300">
            <?php
            foreach ($portfolio as $portfolio) :
            ?>
            <div class="col-lg-4 col-md-6 porto-margin">
                <div class="card card-portofolio h-100">
                    <!-- Img Contaienr -->
                    <div class="img-card-container">
                        <div class="back-img">
                            <!-- Background Img -->
                            <img id="image-size" src="/assets/img/portfolio/<?= $portfolio['foto']; ?>"
                                class="card-img-top" alt="...">
                        </div>

                        <!-- Logo -->
                        <img src="/assets/img/portfolio/logo/<?= $portfolio['logo']; ?>" class="logo" alt="">
                    </div>
                    <div class="card-body">
                        <small class="card-info"><?= $portfolio['kategori']; ?></small>
                        <h5 class="card-title"><?= $portfolio['judul']; ?></h5>
                        <div class="card-text"><?= word_limiter($portfolio['tentang_mitra'], 10); ?></div>
                        <a href="#" class="btn tombol hvr-bounce-to-top">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <?php
            endforeach;
            ?>

        </div>
        <!--AKhir Row2-->

    </div>
    <!--Akhir Container Portfolio-->
</section>

<section id="mitraKerja">
    <div class="container">
        <div class="row row-biru">
            <div class="col d-flex flex-column align-items-center">
                <h5 class="tag-kecil">Mitra Kerja</h5>
                <h1 class="tag-besar">MITRA KERJA KAMI</h1>
                <p class="capt">Kami bermitra dengan berbagai macam instansi dan perusahaan</p>
                <img src="/assets/img/mitra/Arindra.png" alt="" data-aos="fade-down">
            </div>
        </div>
        <!--Akhir Row1-->
        <!-- Testi -->
        <!-- komentar Admin -->
        <?= $this->include('layout/komentar'); ?>
        <!--Akhir Row2-->

    </div>
    <!--Akhir Container-->
</section>

<!-- Form Solusi -->
<div class="solusi">
    <div class="container">
        <!-- Container Mitra -->
        <div class="row container-mitra" data-aos="fade-up" data-aos-delay="200">
            <div class="col-md-5 text-center keterangan">
                <p class="sub-judul">Cara Kerja Kami</p>
                <h2>DAPATKAN SOLUSINYA SEKARANG</h2>
                <p class="text-under-judul">Silakan hubungi kontak atau isi form yang telah tersedia. Selanjutnya,
                    tim kami akan menghubungi Anda secepatnya.</p>

                <ul class="row items">
                    <li class="col-md-12 item">
                        <div class="row">
                            <div class="col-3 pt-2">
                                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_q75ozg3t.json"
                                    background="transparent" speed="1" style="width: 100%; height: auto;" loop autoplay>
                                </lottie-player>
                            </div>
                            <div class="text text-left col-9">
                                <h3>Mari Berdiskusi</h3>
                                <p>Kami akan menghubungi dan
                                    berdiskusi tentang bisnis Anda,
                                    bagaimana Anda menggunakan teknologi, dan apa saja yang Anda butuhkan.</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-12 item">
                        <div class="row">
                            <div class="col-3 pt-2">
                                <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_my6ldrkt.json"
                                    background="transparent" speed="1" style="width: 100%; height: auto;" loop autoplay>
                                </lottie-player>
                            </div>
                            <div class="text text-left col-9">
                                <h3>Pilih Layanan</h3>
                                <p>Anda bisa pilih paket layanan IT yang sesuai dengan kebutuhan perusahaan Anda.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-12 item">
                        <div class="row">
                            <div class="col-3 pt-4">
                                <lottie-player class="target"
                                    src="https://assets3.lottiefiles.com/packages/lf20_ich37shs.json"
                                    background="transparent" speed="1" style="width: 100%; height: auto;" loop autoplay>
                                </lottie-player>
                            </div>
                            <div class="text text-left col-9">
                                <h3>Mulai Pengerjaan</h3>
                                <p>Tim ahli kami akan mulai pengerjaan sesuai target dan kesepakatan bersama. Hingga
                                    kemudian solusi jitu kami tersedia pada bisnis Anda.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-md-7 form">
                <!-- Container Form -->
                <?= $this->include('layout/pemesanan'); ?>
                <!-- End of Container Form -->
            </div>

        </div>
        <!-- End of Container Mitra -->
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#2926A9" fill-opacity="1"
            d="M0,192L34.3,176C68.6,160,137,128,206,138.7C274.3,149,343,203,411,192C480,181,549,107,617,80C685.7,53,754,75,823,106.7C891.4,139,960,181,1029,208C1097.1,235,1166,245,1234,240C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
    </svg>
</div>
<!-- End of Form Solusi -->
<?= $this->endSection(); ?>