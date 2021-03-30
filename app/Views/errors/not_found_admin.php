<?= $this->extend('templates/v_super'); ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="/assets/css/page_404.css">
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>
<!-- Page Not Found Content -->
<div class="page-not-found" style="background: none !important; width: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" style="overflow: hidden;">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_afwjhfb2.json"
                    background="transparent" speed="1" style="width: 100%; height: auto;" loop autoplay>
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
</div>
<!-- End of Page Not Found Content -->
<?= $this->endSection(); ?>