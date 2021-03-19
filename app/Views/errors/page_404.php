<?= $this->extend('templates/v_super_user'); ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="/assets/css/page_404.css">
<?= $this->endSection(); ?>


<?= $this->section('content_user'); ?>
<!-- Page Not Found Content -->
<div id="mt" class="page-not-found">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_afwjhfb2.json" background="transparent" speed="1" style="width: 100%; height: auto;" loop autoplay>
                </lottie-player>
            </div>
            <div class="col-lg-6 container-text">
                <div class="sub-judul">
                    <p>Page Not Found</p>
                </div>
                <h2>Oh No! Erorr 404</h2>
                <p class="text-under-judul">Ini Bukan Halaman Yang Bos Cari ! Yuk Kembali Ke Jalan Yang Benar
                    Yaaa…..</p>
                <div class="btn-go row">
                    <div class="col-lg-6 col-sm-12 btn-homepage">
                        <a href="../index.php" class="to-homepage text-center">Back To Homepage</a>
                    </div>
                    <div class="col-lg-6 col-sm-12 visit-us">
                        <a href="" class="text-center hvr-icon-wobble-horizontal">
                            <p>Visit About Us</p> <i class="fa fa-arrow-right hvr-icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#2926A9" fill-opacity="1" d="M0,192L34.3,176C68.6,160,137,128,206,138.7C274.3,149,343,203,411,192C480,181,549,107,617,80C685.7,53,754,75,823,106.7C891.4,139,960,181,1029,208C1097.1,235,1166,245,1234,240C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
    </svg>
</div>
<!-- End of Page Not Found Content -->
<?= $this->endSection(); ?>