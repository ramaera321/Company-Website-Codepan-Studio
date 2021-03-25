<?= $this->extend('templates/v_super_user'); ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="/assets/css/responsive.css">
<?= $this->endSection(); ?>

<?= $this->section('content_user'); ?>
<!-- Jumbotron Heading with background from file -->
<div id="mt" class="jumbotron d-flex justify-content-end"
    style="background-image: url('/assets/img/banner/<?= $banner['foto']; ?>');">
    <!-- Container using boostrap 4 and scroll animation fade from down using Animated On Scroll -->
    <div class="container" data-aos="fade-down">
        <!-- Content -->
        <div class="content">
            <!-- Sub Heading  -->
            <h2>Codepan Studio Melayani</h2>

            <!-- Main Heading with Headline Animation -->
            <h1 class="display-4 cd-headline slide">
                <!-- Wrapper for Headline Animation -->
                <span class="cd-words-wrapper text-right">
                    <!-- Add Text Here -->
                    <!-- Active text (display first) indicator "is-visible" -->
                    <b class="is-visible">Sistem Informasi</b>

                    <!-- Another text -->
                    <b>Aplikasi Mobile</b>
                    <b>Aplikasi E-Gov</b>
                    <b>Integrasi Sistem</b>
                    <b>Pengadaan IT</b>
                </span>
            </h1>
            <!-- End of Main Heading with Headline Animation -->

            <!-- Line Under Main Heading -->
            <hr>

            <!-- Describe text -->
            <p class="col-lg-7 col-sm-12 p-0">Layanan jasa pembuatan software kami telah membantu banyak perusahaan
                untuk mempermudah dan meningkatkan kinerja IT mereka</p>
            <br>

            <!-- Link using hover-effect.css -->
            <p class="hvr-underline-from-left"><a href="">Dapatkan Konsultasi Gratis Sekarang</a></p>
        </div>
    </div>
</div>
<!-- End of Jumbotron Heading -->

<!-- Masalah dan kinerja -->
<div class="page-masalah">
    <div class="container">
        <div class="row">
            <!-- Heading and describe text -->
            <div class="col-md-7 col-sm-12 p-keterangan" data-aos="fade-right">
                <!-- Heading -->
                <h2>CODEPAN STUDIO MENYELESAIKAN 3 MASALAH UTAMA PADA BISNIS ANDA</h2>

                <!-- Describe Text -->
                <div class="caption">
                    <p>
                        Kami tahu bahwa setiap bisnis Anda memerlukan teknologi yang handal dan mampu menekan
                        pengeluaran. Bagi kami, pengalaman pengguna adalah kunci utama untuk menghadirkan sistem
                        yang paling handal
                    </p>
                </div>

                <!-- Link Button -->
                <a href="" class="btn btn-primary">LAYANAN SELENGKAPNYA</a>
            </div>
            <!-- End of Heading and describe text -->

            <!-- Three Point of layanan -->
            <div class="col-md-5 col-sm-12 margin" data-aos="fade-left">
                <!-- List -->
                <ul>
                    <!-- Point Kinerja dan Pelayanan IT -->
                    <li>
                        <div class="number">
                            <h1>1</h1>
                        </div>
                        <div class="text">
                            <h3>Kinerja dan Pelayanan IT</h3>
                            <p>Lemahnya kinerja dan pelayanan IT membuat produktivitas berkurang.</p>
                        </div>
                    </li>

                    <!-- Point Pengaturan Biaya Bisnis -->
                    <li>
                        <div class="number">
                            <h1>2</h1>
                        </div>
                        <div class="text">
                            <h3>Pengaturan Biaya Bisnis</h3>
                            <p>Peningkatan performa layanan IT terbukti meningkatkan kinerja bisnis anda.</p>
                    </li>

                    <!-- Point Dokumentasi dan Pelacakan Data -->
                    <li>
                        <div class="number">
                            <h1>3</h1>
                        </div>
                        <div class="text">
                            <h3>Dokumentasi & Pelacakan Data</h3>
                            <p>Sering kali pengguna merasa kesulitan dalam melacak data-data mereka karena lemahnya
                                pengolahan sistem IT.</p>
                    </li>
                </ul>
                <!-- End of List -->
            </div>
            <!-- End of Three Point of layanan -->
        </div>
    </div>
</div>
<!-- End of Masalah dan kinerja -->

<!-- Layanan -->
<div class="jenis-layanan" data-aos="fade-up">
    <div class="container">
        <!-- Heading Jenis Layanan -->
        <div class="judul">
            <!-- Line left of heading  -->
            <hr>

            <!-- This is Heading  -->
            <h3>Jenis Layanan Kami</h3>

            <!-- Line right of heading -->
            <hr>
        </div>

        <!-- Responsive card carousel container -->
        <div class="owl-carousel">
            <!-- Sistem Informasi -->
            <div>
                <div class="card">
                    <div class="card-body text-center">
                        <!-- Title -->
                        <h5 class="card-title">Sistem Informasi</h5>

                        <!-- Describe Text -->
                        <p class="card-text">Platform sistem informasi terbaik untuk memudahkan bisnis Anda</p>

                        <!-- Icon -->
                        <div class="img-area laptop" style="display:flex; justify-content:center; align-items:center;">
                            </script>
                            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_wkossx6a.json"
                                background="transparent" speed="1" style="width: 170px; height: 170px;" loop autoplay>
                            </lottie-player>

                        </div>

                        <!-- Button Container -->
                        <div class="selengkapnya">
                            <!-- Button with hover-effect.css-->
                            <a href="" class="hvr-icon-wobble-horizontal">SELENGKAPNYA <i
                                    class="fa fa-arrow-right hvr-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Aplikasi Mobile -->
            <div>
                <div class="card">
                    <div class="card-body text-center">
                        <!-- Title -->
                        <h5 class="card-title">Aplikasi Mobile</h5>

                        <!-- Describe Text -->
                        <p class="card-text">Lebih dekat mitra bisnis anda melalui Aplikasi Mobile </p>

                        <!-- Icon -->
                        <div class="img-area phone">
                            </script>
                            <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_viopfy4u.json"
                                background="transparent" speed="1" style="width: 110px; height: 110px;" loop autoplay>
                            </lottie-player>
                        </div>

                        <!-- Button Container -->
                        <div class="selengkapnya">
                            <!-- Button with hover-effect.css-->
                            <a href="" class="hvr-icon-wobble-horizontal"> SELENGKAPNYA <i
                                    class="fa fa-arrow-right hvr-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Aplikasi E-Gov -->
            <div>
                <div class="card">
                    <div class="card-body text-center">
                        <!-- Card Title -->
                        <h5 class="card-title">Aplikasi E-Gov</h5>

                        <!-- Describe Text -->
                        <p class="card-text">Teknologi sebagai solusi mewujudkan Smart Goverment</p>

                        <!-- Icon -->
                        <div class="img-area">
                            </script>
                            <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_qc9iczkv.json"
                                background="transparent" speed="1" style="width: 140px; height: 140px;" loop autoplay>
                            </lottie-player>
                        </div>

                        <!-- Button Container -->
                        <div class="selengkapnya">
                            <!-- Button with hover-effect.css-->
                            <a href="" class="hvr-icon-wobble-horizontal">SELENGKAPNYA <i
                                    class="fa fa-arrow-right hvr-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Integritas Sistem -->
            <div>
                <div class="card">
                    <div class="card-body text-center">
                        <!-- Card Title -->
                        <h5 class="card-title">Integritas Sistem</h5>

                        <!-- Describe Text -->
                        <p class="card-text">Tingkakan kinerja IT Anda dengan data yang terintegrasi</p>

                        <!-- Icon -->
                        <div class="img-area">
                            </script>
                            <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_aanhnju9.json"
                                background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay>
                            </lottie-player>

                        </div>

                        <!-- Button Container -->
                        <div class="selengkapnya">
                            <!-- Button with hover-effect.css-->
                            <a href="" class="hvr-icon-wobble-horizontal">SELENGKAPNYA <i
                                    class="fa fa-arrow-right hvr-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pengadaan IT -->
            <div>
                <div class="card">
                    <div class="card-body text-center">
                        <!-- Card Title -->
                        <h5 class="card-title">Pengadaan IT</h5>

                        <!-- Describe Text -->
                        <p class="card-text">Komponen Instruktur IT yang berkualitas untuk sistem yang handal</p>
                        <div class="img-area">
                            </script>
                            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_ssodehfl.json"
                                background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay>
                            </lottie-player>
                        </div>

                        <!-- Button Container -->
                        <div class="selengkapnya">
                            <!-- Button with hover-effect.css-->
                            <a href="" class="hvr-icon-wobble-horizontal">SELENGKAPNYA <i
                                    class="fa fa-arrow-right hvr-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Layanan -->

<!-- Portofolio -->
<div class="portofolio">
    <div class="container text-center">
        <!-- Heading Container -->
        <div class="container-judul">
            <!-- Sub Heading -->
            <p class="sub-judul">Portofolio</p>

            <!-- Heading -->
            <h2>
                LAYANAN KAMI TELAH
                <br>
                DIGUNAKAN DALAM BANYAK BIDANG
            </h2>

            <!-- Describtive text -->
            <p class="keterangan-judul">Dengan pengalaman yang cukup, tenaga ahli kami mampu merampingkan proses dan
                memberikan solusi handal untuk mendukung produktivitas bisnis Anda</p>
        </div>

        <!-- Main Content of Portofolio -->
        <div class="row" data-aos="fade-up" data-aos-offset="10">

            <?php foreach ($portfolio as $portfolio) : ?>
            <!-- Portofolio 1 -->
            <div class="col-lg-6 col-md-6 batas-card">
                <div class="card h-100">
                    <!-- Img Contaienr -->
                    <div class="img-card-container">
                        <!-- Background Img -->
                        <img src="/assets/img/portfolio/<?= $portfolio['foto']; ?>" class="card-img-top" alt="...">

                        <!-- Logo -->
                        <img src="/assets/img/portfolio/logo/<?= $portfolio['logo']; ?>" class="logo" alt="">
                    </div>

                    <!-- Text -->
                    <div class="card-body text-left">
                        <!-- Sub Title -->
                        <p class="mini-judul"><?= $portfolio['kategori']; ?></p>

                        <!-- Card Title -->
                        <h5 class="card-title"><?= $portfolio['judul']; ?>
                        </h5>

                        <!-- Text -->
                        <div class="card-text"><?= $portfolio['tentang_mitra']; ?>
                        </div>

                        <!-- Link Selengkapnya with hover-effect.css -->
                        <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- End of Portofolio -->

<!-- Alasan Bermitra -->
<div class="alasan-bermitra">
    <div class="container">
        <div class="container-judul row" data-aos="fade-up">
            <div class="col-md-12">
                <p class="sub-judul">ALASAN MEMILIH KAMI</p>
            </div>
            <div class="col-md-6 col-sm-12">
                <h2>6 ALASAN UNTUK BERMITRA DENGAN KAMI</h2>
            </div>
            <div class="col-md-6 col-sm-12">
                <p>Inilah 6 alasan mengapa Anda harus memilih kami untuk merampingkan proses, membangun sistem,
                    serta memberi saran kepada Anda yang dapat meningkatkan produktivitas perusahaan</p>
            </div>
        </div>

        <ul class="items row">
            <li class="col-lg-4 col-sm-6 mx-0 item" data-aos="zoom-in-up" data-aos-delay="200">
                <div class="row">
                    <div class="col-3 text-img">
                        <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_dunmkucz.json"
                            background="transparent" speed="1" loop autoplay></lottie-player>
                    </div>
                    <div class="col-9 text">
                        <h3>Respon Cepat</h3>
                        <p>Dengan dukungan nomor pusat keluhan via Whatsapp di nomer 081252200899 dan nomor telepon
                            (031) 8437588 kami hadirkan layanan cepat atas setiap keluhan yang dialami mitra.</p>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 col-sm-6 mx-0 item" data-aos="zoom-in-up" data-aos-delay="200">
                <div class="row">
                    <div class="col-3 text-img">
                        <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_q32pr5gh.json"
                            background="transparent" speed="1" loop autoplay>
                        </lottie-player>
                    </div>
                    <div class="col-9 text">
                        <h3>Berpengalaman</h3>
                        <p>Dukungan tim handal yang lebih dari 5
                            tahun telah sukses menyelesaikan
                            berbagai studi kasus mitra, kami siap
                            menyajikan berbagai layanan handal
                            dan berkualitas untuk Anda.</p>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 col-sm-6 mx-0 item" data-aos="zoom-in-up" data-aos-delay="200">
                <div class="row">
                    <div class="col-3 text-img">
                        <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_U8MhmH.json"
                            background="transparent" style="transform: scale(1.3);" speed="1" loop autoplay>
                        </lottie-player>
                    </div>
                    <div class="col-9 text">
                        <h3>Tim Handal</h3>
                        <p>Dengan didukung berbagai latar
                            belakang keahlian dan
                            pengalaman perusahaan dibidang
                            teknologi, kami siap memenuhi
                            target penyelesaian lebih cepat
                            dan handal.</p>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 col-sm-6 mx-0 item" data-aos="zoom-in-up" data-aos-delay="300">
                <div class="row">
                    <div class="col-3 text-img">
                        <lottie-player class="atas" src="https://assets2.lottiefiles.com/packages/lf20_iq0zmgip.json"
                            background="transparent" style="transform: scale(0.7);" speed="1" loop autoplay>
                        </lottie-player>
                    </div>
                    <div class="col-9 text">
                        <h3>Solusi Terbaik</h3>
                        <p>Studi kasus dan latar belakang dari pengguna selalu menjadi materi
                            perumusan solusi yang kami tawarkan
                            guna menghasilkan layanan yang tepat
                            sasaran</p>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 col-sm-6 mx-0 item" data-aos="zoom-in-up" data-aos-delay="300">
                <div class="row">
                    <div class="col-3 text-img">
                        <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_lqbg5smd.json"
                            background="transparent" style="transform: scale(1.7);" speed="1" loop autoplay>
                        </lottie-player>
                    </div>
                    <div class="col-9 text">
                        <h3>Serba Bisa</h3>
                        <p>Dengan didukung tenaga ahli yang
                            handal, tim kami mampu membangun
                            sebuah layanan yang berkualitas dalam berbagai platform teknologi baik mobile, desktop,
                            web,
                            maupun hardware.</p>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 col-sm-6 mx-0 item" data-aos="zoom-in-up" data-aos-delay="300">
                <div class="row">
                    <div class="col-3 text-img">
                        <lottie-player class="atas" src="https://assets5.lottiefiles.com/packages/lf20_qdbb21wb.json"
                            background="transparent" style="transform: scale(0.9);" speed="1" loop autoplay>
                        </lottie-player>
                    </div>
                    <div class="col-9 text">
                        <h3>100% Jaminan Puas</h3>
                        <p>Kami memberikan jaminan bahwa
                            solusi kami harus bekerja dan
                            mencapai tujuan mitra dalam
                            meningkatkan performa bisnis
                            mereka melalui teknologi.</p>
                    </div>
                </div>
            </li>
        </ul>

        <div class="end-text" data-aos="fade-up">
            <p>Sudah saatnya bisnis Anda terbang lebih tinggi. <a href="" class="hvr-underline-from-left">Telusuri
                    perusahaan kami.</a></p>
        </div>
    </div>
</div>
<!-- End of Alasan Bermitra -->

<!-- Form Solusi -->
<div class="solusi">
    <div class="container">
        <!-- Container Mitra -->
        <div class="row container-mitra" data-aos="fade-up" data-aos-delay="200">
            <div class="col-md-5 text-center keterangan">
                <p class="sub-judul">SELANGKAH KAMI LEBIH DEKAT</p>
                <h2>DAPATKAN SOLUSINYA SEKARANG</h2>
                <p class="text-under-judul">Silakan hubungi kontak atau isi form yang telah tersedia.</p>

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
                <div class="container-form">
                    <form>
                        <div class="row">
                            <!-- Alert -->
                            <div class="alert alert-success alert-dismissible fade show col-md-12 d-none" role="alert">
                                <strong>Selamat!</strong> Data Anda telah sukses terkirim.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <!-- Input Nama -->
                            <div class="col-md-6 margin-text">
                                <input type="text" class="form-control" placeholder="Nama Anda*" required>
                            </div>

                            <!-- Input Email -->
                            <div class="col-md-6 margin-text">
                                <input type="email" class="form-control" placeholder="Email Anda*" required>
                            </div>

                            <!-- Input No. HP -->
                            <div class="col-md-6 margin-text">
                                <input type="tel" class="form-control" placeholder="No HP*" required>
                            </div>

                            <!-- Input Nama Perusahaan -->
                            <div class="col-md-6 margin-text">
                                <input type="text" class="form-control" placeholder="Nama Perusahaan*" required>
                            </div>

                            <!-- Select Layanan IT -->
                            <div class="col-md-12 margin-select">
                                <select class="form-control">
                                    <option>Layanan IT apa yang Anda butuhkan ?*</option>
                                </select>
                            </div>
                            <!-- End of Select Layanan IT -->

                            <!-- Radio Button -->
                            <!-- Radio Button Question -->
                            <div class="col-md-12">
                                <h5 for="jumlahKaryawan">Berapa banyak orang yang bekerja pada perusahaan Anda?
                                    </label>
                            </div>


                            <!-- Radio Button Value -->
                            <!-- Value 1-5 -->
                            <label class="costum-radio col-lg-3 col-md-6 col-sm-6">
                                <input type="radio" name="jumlahKaryawan" id="jumlahKaryawan" value="1-5">
                                <span class="radio-btn">
                                    <div class="jumlah">
                                        <h3>1 - 5</h3>
                                    </div>
                                    <i class="las la-check"></i>
                                </span>
                            </label>
                            <!-- End of Value 1-5 -->

                            <!-- Value 5-15 -->
                            <label class="costum-radio col-lg-3 col-md-6 col-sm-6">
                                <input type="radio" name="jumlahKaryawan" id="jumlahKaryawan" value="5-15">
                                <span class="radio-btn">
                                    <div class="jumlah">
                                        <h3>5 - 15</h3>
                                    </div>
                                    <i class="las la-check"></i>
                                </span>
                            </label>
                            <!-- End Value 5-15 -->

                            <!-- Value 15-25 -->
                            <label class="costum-radio col-lg-3 col-md-6 col-sm-6">
                                <input type="radio" name="jumlahKaryawan" id="jumlahKaryawan" value="15-25">
                                <span class="radio-btn">
                                    <div class="jumlah">
                                        <h3>15 - 25</h3>
                                    </div>
                                    <i class="las la-check"></i>
                                </span>
                            </label>
                            <!-- End of Value 15-25 -->

                            <!-- Value 20+ -->
                            <label class="costum-radio col-lg-3 col-md-6 col-sm-6">
                                <input type="radio" name="jumlahKaryawan" id="jumlahKaryawan" value="20+">
                                <span class="radio-btn">
                                    <div class="jumlah">
                                        <h3>20+</h3>
                                    </div>
                                    <i class="las la-check"></i>
                                </span>
                            </label>
                            <!-- End of Value 20+ -->

                            <!-- Select Bidang Perusahaan -->
                            <div class="col-md-12 margin-select">
                                <select class="form-control" id="exampleFormControlSelect1" placeholder="holder">
                                    <!-- Value of Select Bidang Perusahaan -->
                                    <option>Pilih bidang perusahaan Anda</option>
                                    <option>Pariwisata</option>
                                    <option>Keuangan</option>
                                    <option>Hukum</option>
                                    <option>Manajemen</option>
                                </select>
                            </div>
                            <!-- End of Select Bidang Perusahaan -->

                            <!-- Verification Input -->
                            <div class="col-md-7 margin-end">
                                <input type="text" class="form-control" placeholder="Verification *" required>
                            </div>

                            <!-- Verification Code Place -->
                            <div class="col-md-5 margin-end">
                                <img src="" alt="">
                            </div>

                            <!-- Agreement -->
                            <div class="col-lg-7 box-setuju d-flex justify-content-start">
                                <input type="checkbox" id="setuju" name="setuju">
                                <!-- Agreement Text -->
                                <label for="setuju">Saya menyetujui bahwa data yang saya isi adalah benar</label>
                            </div>
                            <!-- End of Agreement -->

                            <!-- Submit Button -->
                            <div class="col-lg-5 text-center">
                                <button type="submit" class="btn-primary btn-submit" id="kirim_btn"
                                    disabled="disabled">Kirim
                                </button>

                                <button class="btn btn-primary d-none" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Loading...
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
                <!-- End of Container Form -->
            </div>
        </div>
        <!-- End of Container Mitra -->

        <div class="row container-testi d-flex justify-content-between">
            <div class="pelanggan col-md-6 row" data-aos="fade-right">
                <div class="mx-0 col-lg-4 pelanggan-info">
                    <div class="img-testi">
                        <img src="./img/solusi/foto-mas-arindra.png" alt="">
                    </div>
                    <div class="info">
                        <h5 class="nama-pelanggan">Reza Arindra Fadillah</h5>
                        <p class="posisi">CEO & Project Manager CV. Arindra Production</p>
                    </div>
                </div>
                <div class="mx-0 mt-1 pl-0 col-lg-8">
                    <p>Terima kasih kepada Codepan Studio Surabaya, aplikasinya sangat membantu. Sudah kami gunakan
                        seluruhnya. Lalu layanan dari Profio secara kesuluruhan juga sudah cukup baik mulai dari
                        komunikasi, hasil, dan ketepatan dalam menyelesaikannya.</p>
                </div>
            </div>

            <div class="pelanggan col-md-6 row" data-aos="fade-right" data-aos-delay="200">
                <div class="mx-0 col-lg-4 pelanggan-info">
                    <div class="img-testi">
                        <img src="./img/solusi/foto-pelanggan2.png" alt="">
                    </div>
                    <div class="info">
                        <h5 class="nama-pelanggan">Andrea Piacquadio</h5>
                        <p class="posisi">CEO & Project Manager PT. Angkasa Indah</p>
                    </div>
                </div>
                <div class="mx-0 mt-1 pl-0 col-lg-8">
                    <p>Layanan jasa dari Codepan Studio Surabaya baik, koordinasinya tanggap dan cepat, pelayanannya
                        maksimal. Overall bagus.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Form Solusi -->

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
            <?php
            foreach ($blog as $blog) :
            ?>
            <!-- Card Blog 1 22-->
            <div class="col-lg-4 col-md-6 margin-blog" data-aos="zoom-out-down">
                <div class="card hvr-underline-reveal h-100">
                    <img src="/assets/img/blog/<?= $blog['foto']; ?>" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <?php
                        $timestamp = strtotime($blog['created_at']);
                        $tanggal = date('d/m/Y', $timestamp)
                        ?>
                    <p class="sub-judul"><?= $tanggal; ?></p>
                    <h5 class="card-title"><?= $blog['judul']; ?></h5>
                    <div class="card-text"><?= $blog['describ']; ?></div>
                </div>
            </div>
        </div>
        <?php
            endforeach;
    ?>
    </div>
    <!-- End of Container Blog -->

    <!-- Text under container -->
    <p class="text-center text-under-container" data-aos="fade-up">Wawasan baru membantu Anda melakukan
        pekerjaan dengan lebih baik dan efisien. <a href="" class="hvr-underline-from-left">Lihat semua
            artikel.</a></p>
</div>

</div>
<!-- End of Page Blog -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#2926A9" fill-opacity="1"
        d="M0,192L34.3,176C68.6,160,137,128,206,138.7C274.3,149,343,203,411,192C480,181,549,107,617,80C685.7,53,754,75,823,106.7C891.4,139,960,181,1029,208C1097.1,235,1166,245,1234,240C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
    </path>
</svg>
<?= $this->endSection(); ?>