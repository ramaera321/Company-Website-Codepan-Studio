<?= $this->extend('templates/v_super_user'); ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="/assets/css/portofolio.css">
<link rel="stylesheet" href="/assets/css/responsive.css">
<?= $this->endSection(); ?>

<?= $this->section('content_user'); ?>
<!-- Isi portofolio  -->
<div id="mt" class="container-isi-portofolio">
    <div class="padding-screen">
        <div class="container">
            <!-- Container Judul portofolio -->
            <div class="container-judul">
                <div class="judul-porto">
                    <h1><?= ucwords($portfolio['judul']); ?></h1>
                    <p>Belajar robotika dikemas secara fun dan langsung di implentasikan kedalam robot secara
                        wirelessly dan hanya satu genggaman</p>
                </div>
                <div class="img-judul">
                    <img src="/assets/img/portfolio/logo/<?= $portfolio['logo']; ?>" alt="">
                </div>
            </div>
            <!-- End of Container Judul portofolio -->

            <!-- Breadcrumb Boostrap -->
            <nav style="--bs-breadcrumb-divider: &#xf061" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="/portofolio">Portofolio</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="/portfolio_kategori/<?= $portfolio['kategori']; ?>"><?= $portfolio['kategori']; ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= ucwords($portfolio['judul']); ?></li>
                </ol>
            </nav>
            <!-- End of Breadcrumb Boostrap -->

            <div id="mt" class="content">
                <div class="img-container" data-aos="fade-up">
                    <img src="/assets/img/portfolio/<?= $portfolio['foto']; ?>" alt="">
                </div>
                <div class="portofolio-main text-justify" data-aos="fade-up">
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <h5>Tentang Mitra</h5>
                        </div>
                        <div class="col-md-9">
                            <?= $portfolio['tentang_mitra']; ?>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-3">
                            <h5>Tantangan</h5>
                        </div>
                        <div class="col-md-9">
                            <?= $portfolio['tantangan']; ?>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-3">
                            <h5>Solusi</h5>
                        </div>
                        <div class="col-md-9">
                            <?= $portfolio['solusi']; ?>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-3">
                            <h5>Hasil</h5>
                        </div>
                        <div class="col-md-9">
                            <?= $portfolio['hasil']; ?>
                        </div>
                    </div>

                    <b>Share Artikel Ini : <br></b>
                    <!-- AddToAny BEGIN -->
                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                        <a class="a2a_button_facebook"></a>
                        <a class="a2a_button_copy_link"></a>
                        <a class="a2a_button_twitter"></a>
                        <a class="a2a_button_whatsapp"></a>
                        <a class="a2a_button_telegram"></a>
                        <a class="a2a_button_email"></a>
                        <a class="a2a_button_line"></a>
                        <a class="a2a_button_facebook_messenger"></a>
                        <a class="a2a_button_linkedin"></a>
                        <a class="a2a_button_google_gmail"></a>
                        <a class="a2a_button_wechat"></a>
                    </div>
                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                    <!-- AddToAny END -->
                </div>

                <?php
                $data_tag = array();
                $daftar_tag = $portfolio_tag['nama_tag'];
                $data_tag = explode(' ', $daftar_tag);
                $i = 0;
                ?>
                <div class="tag">Tags :
                    <?php foreach ($data_tag as $tag) : ?>
                        <a href="/hastag_portfolio/<?= $tag; ?>">#<?= $tag; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Prev Next Navigation -->
            <div class="row prev-next-bar">
                <?php
                if ($query_prev->getRow()->judul) {
                ?>
                    <a href="/portfolio_describ/<?= ($query_prev->getRow()->judul) ? $query_prev->getRow()->slug : ''; ?>" class="col-md-5 col-sm-12 row pl-0 mb-3">
                        <div class="col-2 button">
                            <div class="btn-prev"><i class="fas fa-caret-left"></i></div>
                        </div>
                        <div class="col-10 text-left text-btn">
                            Previous Post<br>
                            <b><?= character_limiter($query_prev->getRow()->judul, 30); ?></b>
                        </div>
                    </a>
                <?php
                } else {
                ?>
                    <a href="/portfolio_describ/" class="col-md-5 col-sm-12 row pl-0 mb-3">
                        <div class="col-2 button">
                        </div>
                        <div class="col-10 text-left text-btn">
                        </div>
                    </a>
                <?php
                }
                ?>
                <a href="/blog" class="col-md-2 col-sm-12 oval mb-3">
                    <div class="cover">
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                    </div>
                </a>
                <?php
                if ($query_next->getRow()->judul) {
                ?>
                    <a href="/portfolio_describ/<?= $query_next->getRow()->slug; ?>" class="col-md-5 col-sm-12 row pr-0 mb-3">
                        <div class="col-10 text-right text-btn">
                            Next Post <br>
                            <b><?= character_limiter($query_next->getRow()->judul, 30); ?></b>
                        </div>
                        <div class="col-2 button">
                            <div class="btn-next"><i class="fas fa-caret-right"></i></div>
                        </div>
                    </a>
                <?php
                } else {
                ?>
                    <a href="/portfolio_describ/" class="col-md-5 col-sm-12 row pl-0 mb-3">
                        <div class="col-2 button">
                        </div>
                        <div class="col-10 text-left text-btn">
                        </div>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#2926A9" fill-opacity="1" d="M0,192L34.3,176C68.6,160,137,128,206,138.7C274.3,149,343,203,411,192C480,181,549,107,617,80C685.7,53,754,75,823,106.7C891.4,139,960,181,1029,208C1097.1,235,1166,245,1234,240C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
    </svg>
</div>
<!-- End of Isi portofolio -->
<?= $this->endSection(); ?>