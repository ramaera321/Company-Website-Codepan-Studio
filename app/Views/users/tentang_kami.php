<?= $this->extend('templates/v_super_user'); ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="/assets/css/tentang_kami.css">
<?= $this->endSection(); ?>

<?= $this->section('content_user'); ?>
<!-- Jumbotron Heading -->
<div id="mt" class="centered jumbotron jumbotron-fluid" style="background-image: url('../img/tentang-kami/Jumbotron.png')">
    <div class="container">
        <h1 class="display-4">TENTANG KAMI</h1>
        <p class="lead text-center">
            Codepan Studio secara konsisten berusaha memberikan solusi bisnis
            dengan teknologi yang handal & terbaik.
        </p>
    </div>
</div>
<!-- Akhir JumboTron -->

<div class="atas">
    <!-- Tentang1 -->
    <section id="tentang1">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 text-judul" data-aos="fade-right">
                    <h2>PILIHAN TERPERCAYA DALAM JASA SOFTWARE DAN LAYANAN IT</h2>
                    <a href="#" class="dwnld-btn hvr-bounce-to-top">DOWNLOAD PROFIL PERUSAHAAN</a>
                </div>
                <div class="col-md-5 col-sm-12 margin" data-aos="fade-left">
                    <p>
                        Codepan Studio adalah perusahaan privat yang bergerak dibidang
                        Jasa Software dan Layanan IT yang didirikan pada tahun 2019.
                        Hari ini perusahaan kami telah memiliki tim kuat yang handal dan
                        memiliki spesialisasi tertentu serta siap menyingsingkan lengan
                        baju menyelesaikan masalah IT guna memenuhi kebutuhan bisnis
                        Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Tentang1 -->

    <!-- Tentang2 -->
    <section id="tentang2">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="zoom-in-up" data-aos-delay="200">
                    <div class="card h-100">
                        <div class="card-body">
                            <!-- <img src="/img/compass.png" alt="" /> -->
                            <div class="pembungkus-img-tentang">
                                <lottie-player class="watch" src="https://assets6.lottiefiles.com/packages/lf20_zixiihzc.json" speed="1" style="width: 100%; height: auto; transform: scale(3.5);" loop autoplay>
                                </lottie-player>
                            </div>
                            <h5 class="card-title">MISI KAMI</h5>
                            <p class="card-text" style="padding-bottom: 25px">
                                Memberikan solusi IT yang handal dan terbaik kepada para
                                pengguna.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 batas-card" data-aos="zoom-in-up" data-aos-delay="200">
                    <div class="card h-100">
                        <div class="card-body">
                            <!-- <img src="/img/flag.png" alt="" /> -->
                            <div class="pembungkus-img-tentang">
                                <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_ecpurfi6.json" speed="1" style="width: 100%; height: 100%" loop autoplay>
                                </lottie-player>
                            </div>
                            <h5 class="card-title">PENDEKATAN & BUDAYA KAMI</h5>
                            <p class="card-text">
                                Motivasi utama dalam memberikan layanan terbaik bersumber
                                dari sebuah keinginan untuk mendapatkan kepuasan bagi
                                konsumen.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Tentang2 -->

    <!--Tentang3-->
    <section id="tentang3" class="">
        <div class="cd-intro">
            <div class="container">
                <h3>POIN UNGGULAN</h3>
                <div class="pembungkus-tentang3" data-aos="zoom-in-up" data-aos-delay="200">
                    <div class="animasi-headline">
                        <h1 class="cd-headline push">
                            <span class="cd-words-wrapper text-center">
                                <b class="is-visible">TEPAT WAKTU</b>
                                <b>HASIL SESUAI</b>
                                <b>HANDAL</b>
                                <b>AMAN</b>
                                <b>TEKNOLOGI TERBAIK</b>
                            </span>
                        </h1>
                    </div>
                    <!--Akhir pembungkus-tentang3-->
                    <p>
                        Inilah poin-poin yang menjadi dasar bagi perusahaan kami untuk
                        menghasilkan layanan yang maksimal.
                    </p>
                </div>
                <!--Akhir container-->

                <a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><img class="hvr-pulse" src="../img/tentang-kami/play-button.png" alt="" /></a>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Video</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/pp4SSw_0uXA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Akhir Tentang3 -->
</div>

<!-- Page Blog -->
<div class="page-blog">
    <div class="container">
        <!-- Container Judul -->
        <div class="container-judul text-center">
            <p class="sub-judul">Blog Kami</p>
            <h2 class="judul">GAGASAN, NARASI, DAN INOVASI TEKNOLOGI</h2>
        </div>
        <!-- End of Container Judul -->
        <p class="text-center text-under-judul">Telusuri Blog Codepan Studio untuk gagasan yang berharga dan
            pemikiran inovatif tentang trend IT masa kini</p>

        <!-- Container Blog -->
        <div class="container-blog row">
            <!-- Card Blog 1 -->
            <div class="col-lg-4 col-md-6 margin-blog" data-aos="zoom-out-down">
                <div class="card hvr-underline-reveal">
                    <img src="../img/page-blog/Foto-Blog1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="sub-judul">04/10/2020</p>
                        <h5 class="card-title">Memastikan Keamanan Jaringan dengan Teknologi Firewall</h5>
                        <p class="card-text">Teknologi firewall adalah salah satu dari sekian banyak sistem keamanan
                            yang dapat di terapkan pada jaringan private inte…</p>
                    </div>
                </div>
            </div>

            <!-- Card Blog 2 -->
            <div class="col-lg-4 col-md-6 margin-blog" data-aos="zoom-out-down" data-aos-delay="300">
                <div class="card hvr-underline-reveal">
                    <img src="../img/page-blog/Foto-Blog2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="sub-judul">04/10/2020</p>
                        <h5 class="card-title">Memastikan Keamanan Jaringan dengan Teknologi Firewall</h5>
                        <p class="card-text">Teknologi firewall adalah salah satu dari sekian banyak sistem keamanan
                            yang dapat di terapkan pada jaringan private inte…</p>
                    </div>
                </div>
            </div>

            <!-- Card Blog 3 -->
            <div class="col-lg-4 col-md-6 margin-blog" data-aos="zoom-out-down" data-aos-delay="600">
                <div class="card hvr-underline-reveal">
                    <img src="../img/page-blog/Foto-Blog3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="sub-judul">04/10/2020</p>
                        <h5 class="card-title">Memastikan Keamanan Jaringan dengan Teknologi Firewall</h5>
                        <p class="card-text">Teknologi firewall adalah salah satu dari sekian banyak sistem keamanan
                            yang dapat di terapkan pada jaringan private inte…</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Container Blog -->

        <!-- Text under container -->
        <p class="text-center text-under-container" data-aos="fade-up">Wawasan baru membantu Anda melakukan
            pekerjaan dengan lebih baik dan efisien. <a href="" class="hvr-underline-from-left">Lihat semua
                artikel.</a></p>
    </div>

</div>
<!-- End of Page Blog -->
<div class="svg-wave" style="background-color: transparent">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#2926A9" fill-opacity="1" d="M0,192L34.3,176C68.6,160,137,128,206,138.7C274.3,149,343,203,411,192C480,181,549,107,617,80C685.7,53,754,75,823,106.7C891.4,139,960,181,1029,208C1097.1,235,1166,245,1234,240C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
    </svg>
</div>
<?= $this->endSection(); ?>