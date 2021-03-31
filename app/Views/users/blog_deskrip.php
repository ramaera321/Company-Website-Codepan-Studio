<?= $this->extend('templates/v_super_user'); ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="/assets/css/blog.css">
<link rel="stylesheet" href="/assets/css/responsive.css">
<?= $this->endSection(); ?>

<?= $this->section('content_user'); ?>
<!-- Isi Blog  -->
<div id="mt" class="container-isi-blog">
    <div class="padding-screen">
        <div class="container">
            <!-- Container Judul Blog -->
            <div class="container-judul text-center">
                <h1>BLOG</h1>
                <nav style="--bs-breadcrumb-divider: &#xf061" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="#">Blog</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="#">Artikel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Memastikan Keamanan Jaringan dengan
                            Teknologi Firewall</li>
                    </ol>
                </nav>
            </div>
            <!-- End of Container Judul Blog -->

            <div class="row content" data-aos="fade-up">
                <div class="col-md-9 right-content">
                    <div class="img-container">
                        <img src="../img/page-blog/img-isiBlog.png" alt="">
                    </div>
                    <div class="judul-blog text-center">
                        <p class="sub-judul">Artikel • Teknologi</p>
                        <h2>Memastikan Keamanan Jaringan dengan Teknologi Firewall</h2>
                        <p class="creator">By Reza Arindra • 02/02/2021</p>
                    </div>
                    <div class="blog-main text-justify">
                        <p class="isi-blog">
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
                        </p>


                    </div>

                    <p class="tag">Tags : <a href="">#Firewall</a></p>
                </div>
                <div class="col-md-3 left-widget">
                    <div class="kategori">
                        <h5>KATEGORI</h5>
                        <p><a href="#">Artikel</a></p>
                        <p><a href="#">Berita</a></p>
                        <p><a href="#">Info</a></p>
                        <p><a href="#">Teknologi</a></p>
                        <p><a href="#">Tips</a></p>
                        <p><a href="#">Tutorial</a></p>
                        <p><a href="#">Video</a></p>
                    </div>
                    <div class="popular">
                        <h5>POPULAR</h5>
                        <div class="popular-item row">
                            <div class="col-4 img-popular">
                                <img src="../img/page-blog/img-isiBlog.png" alt="">
                            </div>
                            <div class="col-8">
                                <a href="" class="hvr-underline-from-left">Memastikan Keamanan Sistem dengan
                                    Firewall</a>
                            </div>
                        </div>
                        <div class="popular-item row">
                            <div class="col-4 img-popular">
                                <img src="../img/page-blog/img-isiBlog.png" alt="">
                            </div>
                            <div class="col-8">
                                <a href="" class="hvr-underline-from-left">Memastikan Keamanan Sistem dengan
                                    Firewall</a>
                            </div>
                        </div>
                        <div class="popular-item row">
                            <div class="col-4 img-popular">
                                <img src="../img/page-blog/img-isiBlog.png" alt="">
                            </div>
                            <div class="col-8">
                                <a href="" class="hvr-underline-from-left">Memastikan Keamanan Sistem dengan
                                    Firewall</a>
                            </div>
                        </div>
                        <div class="popular-item row">
                            <div class="col-4 img-popular">
                                <img src="../img/page-blog/img-isiBlog.png" alt="">
                            </div>
                            <div class="col-8">
                                <a href="" class="hvr-underline-from-left">Memastikan Keamanan Sistem dengan
                                    Firewall</a>
                            </div>
                        </div>
                        <div class="popular-item row">
                            <div class="col-4 img-popular">
                                <img src="../img/page-blog/img-isiBlog.png" alt="">
                            </div>
                            <div class="col-8">
                                <a href="" class="hvr-underline-from-left">Memastikan Keamanan Sistem dengan
                                    Firewall</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row prev-next-bar">
                <a href="#" class="col-md-5 col-sm-12 row pl-0 mb-3">
                    <div class="col-2 button">
                        <div class="btn-prev"><i class="fas fa-caret-left"></i></div>
                    </div>
                    <div class="col-10 text-left text-btn">
                        Previous Post<br>
                        <b>Tak Kenal Maka Kenalan:Codepan Studio itu sia...</b>
                    </div>
                </a>
                <a href="./blog.php" class="col-md-2 col-sm-12 oval mb-3">
                    <div class="cover">
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                    </div>
                </a>
                <a href="#" class="col-md-5 col-sm-12 row pr-0 mb-3">
                    <div class="col-10 text-right text-btn">
                        Next Post <br>
                        <b>Tak Kenal Maka Kenalan:Codepan Studio itu sia...</b>
                    </div>
                    <div class="col-2 button">
                        <div class="btn-next"><i class="fas fa-caret-right"></i></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#4540FF" fill-opacity="0.3" d="M0,160L24,149.3C48,139,96,117,144,122.7C192,128,240,160,288,181.3C336,203,384,213,432,202.7C480,192,528,160,576,154.7C624,149,672,171,720,197.3C768,224,816,256,864,234.7C912,213,960,139,1008,96C1056,53,1104,43,1152,69.3C1200,96,1248,160,1296,170.7C1344,181,1392,139,1416,117.3L1440,96L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
        </path>
    </svg>
</div>
<!-- End of Isi Blog -->

<!-- Lates Update -->
<div class="last-update">
    <div class="container">
        <h1 class="text-center">Lastest Update</h1>
        <!-- Container Blog -->
        <div class="container-card-blog row">
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
                <div class="card hvr-underline-reveal h-100">
                    <div class="cont-card-img">
                        <img src="/assets/img/blog/<?= $blog['foto']; ?>" class="card-img-top" alt="...">
                    </div>
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
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#2926A9" fill-opacity="1" d="M0,192L34.3,176C68.6,160,137,128,206,138.7C274.3,149,343,203,411,192C480,181,549,107,617,80C685.7,53,754,75,823,106.7C891.4,139,960,181,1029,208C1097.1,235,1166,245,1234,240C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
    </svg>
</div>
<!-- End of Lates Update -->
<?= $this->endSection(); ?>