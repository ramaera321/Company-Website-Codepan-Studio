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
                    <h1>Twins Robo - Media Pembelajaran Robotika</h1>
                    <p>Belajar robotika dikemas secara fun dan langsung di implentasikan kedalam robot secara
                        wirelessly dan hanya satu genggaman</p>
                </div>
                <div class="img-judul">
                    <img src="../img/portofolio/LogoApps-TwinsRobo.png" alt="">
                </div>
            </div>
            <!-- End of Container Judul portofolio -->

            <!-- Breadcrumb Boostrap -->
            <nav style="--bs-breadcrumb-divider: &#xf061" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="#">Portofolio</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="#">Artikel</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Memastikan Keamanan Jaringan dengan
                        Teknologi Firewall</li>
                </ol>
            </nav>
            <!-- End of Breadcrumb Boostrap -->

            <div id="mt" class="content">
                <div class="img-container" data-aos="fade-up">
                    <img src="../img/portofolio/device-epel.png" alt="">
                </div>
                <div class="portofolio-main text-justify" data-aos="fade-up">
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <h5>Tentang Mitra</h5>
                        </div>
                        <div class="col-md-9">
                            <p>Codepan Studio adalah perusahaan privat yang bergerak dibidang Jasa Software dan
                                Layanan IT yang didirikan pada tahun 2019 dan di bawah naungan CV.Arindra
                                Production. Hari ini perusahaan kami telah memiliki tim kuat yang handal dan
                                memiliki spesialisasi tertentu serta siap menyingsingkan lengan baju menyelesaikan
                                masalah IT guna memenuhi kebutuhan bisnis Anda.<br>
                                Mitra: Codepan Studio Surabaya <br>
                                Industri: Software House <br>
                                Layanan: Aplikasi Mobile</p>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-3">
                            <h5>Tantangan</h5>
                        </div>
                        <div class="col-md-9">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                with desktop publishing software like Aldus PageMaker including versions of Lorem
                                Ipsum.</p>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-3">
                            <h5>Solusi</h5>
                        </div>
                        <div class="col-md-9">
                            <p>It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                here, content here', making it look like readable English. Many desktop publishing
                                packages and web page editors now use Lorem Ipsum as their default model text, and a
                                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
                                versions have evolved over the years, sometimes by accident, sometimes on purpose
                                (injected humour and the like).</p>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-3">
                            <h5>Hasil</h5>
                        </div>
                        <div class="col-md-9">
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked
                                up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
                                going through the cites of the word in classical literature, discovered the
                                undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de
                                Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45
                                BC. This book is a treatise on the theory of ethics, very popular during the
                                Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes
                                from a line in section 1.10.32.</p>
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

                <p class="tag">Tags : <a href="">#Firewall</a></p>
            </div>

            <!-- Prev Next Navigation -->
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
        <path fill="#2926A9" fill-opacity="1"
            d="M0,192L34.3,176C68.6,160,137,128,206,138.7C274.3,149,343,203,411,192C480,181,549,107,617,80C685.7,53,754,75,823,106.7C891.4,139,960,181,1029,208C1097.1,235,1166,245,1234,240C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
    </svg>
</div>
<!-- End of Isi portofolio -->
<?= $this->endSection(); ?>