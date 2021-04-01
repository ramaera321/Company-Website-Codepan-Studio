<?= $this->extend('templates/v_super_user'); ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="/assets/css/portofolio.css">
<link rel="stylesheet" href="/assets/css/responsive.css">
<?= $this->endSection(); ?>

<?= $this->section('content_user'); ?>
<!-- Portofolio Page -->
<div id="mt" class="portofolio-page">
    <div class="container">
        <!-- Container Judul Portofolio -->
        <div class="container-judul text-center">
            <h1>PORTOFOLIO</h1>
            <p>Berikut kami sajikan portofolio yang telah kami berikan kepada mitra sebagai bukti pengalaman layanan
                kami</p>
        </div>
        <!-- End of Container Judul Portofolio -->

        <div class="container-portofolio">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#all" onclick="refreshAos()"><span>All</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#pengadaan-it" onclick="refreshAos()"><span>Pengadaan
                            IT</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#aplikasi-mobile" onclick="refreshAos()"><span>Aplikasi
                            Mobile</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#sistem-informasi" onclick="refreshAos()"><span>Sistem
                            Informasi</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#integrasi-sistem" onclick="refreshAos()"><span>Integrasi Sistem</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#aplikasi-egov" onclick="refreshAos()"><span>Aplikasi
                            E-Gov</span></a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <!-- All Portofolio -->
                <div id="all" class="container tab-pane active"><br>
                    <div class="row">
                        <?php
                        foreach ($portfolio as $portfolio) :
                        ?>
                            <!-- Card 1 -->
                            <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up">
                                <div class="card h-100">
                                    <div class="img-card-container">
                                        <div id="image-size" class="back-img">
                                            <img src="/assets/img/portfolio/<?= $portfolio['foto']; ?>" class="card-img-top" alt="...">
                                        </div>
                                        <img src="/assets/img/portfolio/logo/<?= $portfolio['logo']; ?>" class="logo" alt="">
                                    </div>
                                    <div class="card-body text-left">
                                        <p class="mini-judul"><?= $portfolio['kategori']; ?></p>
                                        <h5 class="card-title"><?= $portfolio['judul']; ?></h5>
                                        <div class="card-text"><?= word_limiter($portfolio['tentang_mitra'], 10); ?></div>
                                        <a href="/portfolio_describ/<?= $portfolio['slug']; ?>" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endforeach;
                        ?>

                    </div>
                </div>
                <!-- End of All Portofolio -->

                <!-- Pengadaaan IT Portofolio -->
                <div id="pengadaan-it" class="container tab-pane fade"><br>
                    <div class="row">

                        <?php
                        foreach ($portfolio_pengadaan as $portfolio) :
                        ?>
                            <!-- Card 1 -->
                            <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up">
                                <div class="card h-100">
                                    <div class="img-card-container">
                                        <div id="image-size" class="back-img">
                                            <img src="/assets/img/portfolio/<?= $portfolio['foto']; ?>" class="card-img-top" alt="...">
                                        </div>
                                        <img src="/assets/img/portfolio/logo/<?= $portfolio['logo']; ?>" class="logo" alt="">
                                    </div>
                                    <div class="card-body text-left">
                                        <p class="mini-judul"><?= $portfolio['kategori']; ?></p>
                                        <h5 class="card-title"><?= $portfolio['judul']; ?></h5>
                                        <div class="card-text"><?= word_limiter($portfolio['tentang_mitra'], 10); ?></div>
                                        <a href="/portfolio_describ/<?= $portfolio['slug']; ?>" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endforeach;
                        ?>

                    </div>
                </div>
                <!-- End of Pengadaan IT Portofolio -->

                <!-- Aplikasi Mobile Portofolio -->
                <div id="aplikasi-mobile" class="container tab-pane fade"><br>
                    <div class="row">
                        <?php
                        foreach ($portfolio_mobile as $portfolio) :
                        ?>
                            <!-- Card 1 -->
                            <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up">
                                <div class="card h-100">
                                    <div class="img-card-container">
                                        <div id="image-size" class="back-img">
                                            <img src="/assets/img/portfolio/<?= $portfolio['foto']; ?>" class="card-img-top" alt="...">
                                        </div>
                                        <img src="/assets/img/portfolio/logo/<?= $portfolio['logo']; ?>" class="logo" alt="">
                                    </div>
                                    <div class="card-body text-left">
                                        <p class="mini-judul"><?= $portfolio['kategori']; ?></p>
                                        <h5 class="card-title"><?= $portfolio['judul']; ?></h5>
                                        <div class="card-text"><?= word_limiter($portfolio['tentang_mitra'], 10); ?></div>
                                        <a href="/portfolio_describ/<?= $portfolio['slug']; ?>" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>

                </div>
                <!-- End of Aplikasi Mobile Portofolio -->

                <!-- Sistem Informasi Portofolio -->
                <div id="sistem-informasi" class="container tab-pane fade"><br>
                    <div class="row">
                        <?php
                        foreach ($portfolio_SI as $portfolio) :
                        ?>
                            <!-- Card 1 -->
                            <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up">
                                <div class="card h-100">
                                    <div class="img-card-container">
                                        <div id="image-size" class="back-img">
                                            <img src="/assets/img/portfolio/<?= $portfolio['foto']; ?>" class="card-img-top" alt="...">
                                        </div>
                                        <img src="/assets/img/portfolio/logo/<?= $portfolio['logo']; ?>" class="logo" alt="">
                                    </div>
                                    <div class="card-body text-left">
                                        <p class="mini-judul"><?= $portfolio['kategori']; ?></p>
                                        <h5 class="card-title"><?= $portfolio['judul']; ?></h5>
                                        <div class="card-text"><?= word_limiter($portfolio['tentang_mitra'], 10); ?></div>
                                        <a href="/portfolio_describ/<?= $portfolio['slug']; ?>" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
                <!-- End of Sistem Informasi Portofolio -->

                <!-- Integritas Sistem Portofolio -->
                <div id="integrasi-sistem" class="container tab-pane fade"><br>
                    <?php
                    foreach ($portfolio_integrasi as $portfolio) :
                    ?>
                        <!-- Card 1 -->
                        <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up">
                            <div class="card h-100">
                                <div class="img-card-container">
                                    <div id="image-size" class="back-img">
                                        <img src="/assets/img/portfolio/<?= $portfolio['foto']; ?>" class="card-img-top" alt="...">
                                    </div>
                                    <img src="/assets/img/portfolio/logo/<?= $portfolio['logo']; ?>" class="logo" alt="">
                                </div>
                                <div class="card-body text-left">
                                    <p class="mini-judul"><?= $portfolio['kategori']; ?></p>
                                    <h5 class="card-title"><?= $portfolio['judul']; ?></h5>
                                    <div class="card-text"><?= word_limiter($portfolio['tentang_mitra'], 10); ?></div>
                                    <a href="/portfolio_describ/<?= $portfolio['slug']; ?>" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
                <!-- Endf of Integritas Sistem Portofolio -->

                <!-- Apliaksi E-Gov Portofolio -->
                <div id="aplikasi-egov" class="container tab-pane fade"><br>
                    <?php
                    foreach ($portfolio_egov as $portfolio) :
                    ?>
                        <!-- Card 1 -->
                        <div class="col-lg-4 col-md-6 jarak-card" data-aos="fade-up">
                            <div class="card h-100">
                                <div class="img-card-container">
                                    <div id="image-size" class="back-img">
                                        <img src="/assets/img/portfolio/<?= $portfolio['foto']; ?>" class="card-img-top" alt="...">
                                    </div>
                                    <img src="/assets/img/portfolio/logo/<?= $portfolio['logo']; ?>" class="logo" alt="">
                                </div>
                                <div class="card-body text-left">
                                    <p class="mini-judul"><?= $portfolio['kategori']; ?></p>
                                    <h5 class="card-title"><?= $portfolio['judul']; ?></h5>
                                    <div class="card-text"><?= word_limiter($portfolio['tentang_mitra'], 10); ?></div>
                                    <a href="/portfolio_describ/<?= $portfolio['slug']; ?>" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
                <!-- End of Apliaksi E-Gov Portofolio -->
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#2926A9" fill-opacity="1" d="M0,192L34.3,176C68.6,160,137,128,206,138.7C274.3,149,343,203,411,192C480,181,549,107,617,80C685.7,53,754,75,823,106.7C891.4,139,960,181,1029,208C1097.1,235,1166,245,1234,240C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
    </svg>
</div>
<!-- End of Portofolio Page -->
<?= $this->endSection(); ?>