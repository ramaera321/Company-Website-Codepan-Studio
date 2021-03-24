<?= $this->extend('templates/v_super_user'); ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="/assets/css/layanan_it.css">
<link rel="stylesheet" href="/assets/css/responsive.css">
<?= $this->endSection(); ?>

<?= $this->section('content_user'); ?>
<!-- Menu Layanan IT -->
<div id="mt" class="layanan-it">
    <div class="container">
        <div class="container-judul text-center">
            <h1>LAYANAN IT</h1>
            <p class="text-under-judul">Inilah jasa pembuatan aplikasi dan layanan IT yang dibangun secara khusus
                untuk bisnis Anda. Segera konsultasikan dengan kami sekarang juga.</p>
        </div>
        <div class="container-button row">
            <div class="col-lg-4 col-sm-6 batas-button hvr-icon-wobble-horizontal" data-aos="fade-up">
                <a href="" class="sistem-informasi d-flex justify-content-between align-items-center">
                    <p>SISTEM INFORMASI</p>
                    <i class="fa fa-arrow-right hvr-icon"></i>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 batas-button hvr-icon-wobble-horizontal" data-aos="fade-up"
                data-aos-delay="200">
                <a href="" class="aplikasi-mobile d-flex justify-content-between align-items-center">
                    <p>APLIKASI MOBILE</p>
                    <i class="fa fa-arrow-right hvr-icon"></i>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 batas-button hvr-icon-wobble-horizontal" data-aos="fade-up"
                data-aos-delay="400">
                <a href="" class="aplikasi-egov d-flex justify-content-between align-items-center">
                    <p>APLIKASI E-GOV</p>
                    <i class="fa fa-arrow-right hvr-icon"></i>
                </a>
            </div>
            <div class="col-lg-6 col-sm-6 batas-button hvr-icon-wobble-horizontal" data-aos="fade-up">
                <a href="" class="integritas-sistem d-flex justify-content-between align-items-center">
                    <p>INTEGRASI SISTEM</p>
                    <i class="fa fa-arrow-right hvr-icon"></i>
                </a>
            </div>
            <div class="col-lg-6 col-sm-12 batas-button hvr-icon-wobble-horizontal" data-aos="fade-up"
                data-aos-delay="200">
                <a href="" class="pengadaan-it d-flex justify-content-between align-items-center">
                    <p>PENGADAAN IT</p>
                    <i class="fa fa-arrow-right hvr-icon"></i>
                </a>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#2926A9" fill-opacity="1"
            d="M0,192L34.3,176C68.6,160,137,128,206,138.7C274.3,149,343,203,411,192C480,181,549,107,617,80C685.7,53,754,75,823,106.7C891.4,139,960,181,1029,208C1097.1,235,1166,245,1234,240C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
    </svg>
</div>
<!-- End of Menu Layanan IT -->
<?= $this->endSection(); ?>