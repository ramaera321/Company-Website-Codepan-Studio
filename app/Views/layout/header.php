<!-- Header -->
<header>
    <!-- Conainer of header (contact, email, karirbtn, blogbtn, and kontakbtn) -->
    <div class="container">
        <!-- Justify Content Between Kontak Bar and Buttons Container -->
        <div class="d-flex justify-content-between row">

            <!-- Kontak Bar (telepon and email) -->
            <div class="contact col-md-9 col-sm-12">
                <!-- Container Hubungi Kami (telepon) -->
                <div class="telepon">
                    <img src="/assets/img/header/chat-icon.png" alt="">
                    <div class="text">
                        <p class="judul">Hubungi Kami</p>
                        <a href="tel:+6281252200089" class="isi">081252200089</a>
                    </div>
                </div>
                <!-- End of Container Hubungi Kami (telepon) -->

                <!-- Container Email -->
                <div class="email">
                    <img src="/assets/img/header/email-icon.png" alt="">
                    <div class="text">
                        <p class="judul">Email Kami</p>
                        <a href="mailto:info@codepanstudio.com" target="_blank" class="isi">info@codepanstudio.com</a>
                    </div>
                </div>
                <!-- End of Container Email -->
            </div>
            <!-- End of Kontak Bar -->

            <!-- Containner Buttons(Kontak, Karir, and Blog) -->
            <!-- Display Flex md end to align the content center of the navbar menu when on mobile devices -->
            <ul class="d-flex justify-content-md-end col-md-3 col-sm-12">
                <li>
                    <a href="/karir">
                        <img src="/assets/img/header/karir-icon.png" alt="">
                        <p>Karir</p>
                    </a>
                </li>
                <li>
                    <a href="/blog">
                        <img src="/assets/img/header/blog-icon.png" alt="">
                        <p>Blog</p>
                    </a>
                </li>
                <li>
                    <a href="/kontak">
                        <img src="/assets/img/header/contact-icon.png" alt="">
                        <p>Kontak</p>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End of Containner Buttons(Kontak, Karir, and Blog) -->
    </div>
    <!-- Container of Header (contact, email, karirbtn, blogbtn, and kontakbtn) -->

    <!--  Bar Navigasi Using Boostrap 4 -->
    <nav id="navbar" class="mt-4 mb-0 navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- Navbar Logo Brand for Codepan Studio Logo when screen < 992px -->
            <a class="navbar-brand display-logo-left" href="#"><img class="logo mr-auto"
                    src="/assets/img/navbar/logo-codepan.png" alt="" class=""></a>

            <!-- Toggler Button using boostrap 4 and small costumize on animation when screen < 992px -->
            <button id="toggleTop" class="navbar-toggler toggle-top" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-inner"></span>
            </button>
            <!-- End of Toggler Button using boostrap 4 and small costumize on animation when screen < 992px -->

            <!-- Container of navbar items/collapse -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-5">
                    <!-- Simple Menu Beranda -->
                    <li class="nav-item">
                        <a class="nav-link" href="/" onclick="moveMenuNav(this)">BERANDA <span
                                class="sr-only">(current)</span></a>
                    </li>

                    <!-- Simple Menu Tentang Kami -->
                    <li class="nav-item">
                        <a class="nav-link" href="/tentang_kami" onclick="moveMenuNav(this)">TENTANG KAMI <span
                                class="sr-only">(current)</span></a>
                    </li>

                    <!-- Simple Menu Portofolio -->
                    <li class="nav-item">
                        <a class="nav-link" href="/portofolio" onclick="moveMenuNav(this)">PORTOFOLIO
                            <span class="sr-only">(current)</span></a>
                    </li>

                    <!-- Dropdown Menu Layanan IT -->
                    <li class="nav-item dropdown menu-area">
                        <!-- Dropdown Menu Button -->
                        <a class="nav-link dropdown-toggle" href="#" onclick="moveMenuNav(this)" id="mega-one"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            LAYANAN IT
                        </a>

                        <!-- Dropdown Mega Area Menu Container -->
                        <div class="dropdown-menu mega-area" aria-labelledby="mega-one">
                            <div class="row">
                                <!-- Sistem Informasi -->
                                <div class="col-lg-2 dropdown-item">
                                    <a href="/sistem_informasi">
                                        <i class="fas fa-laptop"></i>
                                        <h5>Sistem Informasi</h5>
                                    </a>
                                </div>

                                <!-- Aplikasi Mobile -->
                                <div class="col-lg-2 dropdown-item">
                                    <a href="/aplikasi_mobile">
                                        <i class="fas fa-mobile-alt"></i>
                                        <h5>Aplikasi Mobile</h5>
                                    </a>
                                </div>

                                <!-- Aplikasi E-Gov -->
                                <div class="col-lg-2 dropdown-item">
                                    <a href="/aplikasi_egov">
                                        <i class="las la-chart-bar"></i>
                                        <h5>Aplikasi E-Gov</h5>
                                    </a>
                                </div>

                                <!-- Integrasi Sistem -->
                                <div class="col-lg-2 dropdown-item">
                                    <a href="/integrasi_sistem">
                                        <i class="fas fa-sync"></i>
                                        <h5>Integrasi Sistem</h5>
                                    </a>
                                </div>

                                <!-- Pengadaan IT -->
                                <div class="col-lg-2 dropdown-item">
                                    <a href="/pengadaan_it">
                                        <i class="fas fa-file-alt"></i>
                                        <h5>Pengadaan IT</h5>
                                    </a>
                                </div>

                                <!-- Semua Layanan -->
                                <div class="col-lg-2 dropdown-item">
                                    <a href="/layanan_it">
                                        <i class="las la-plus-circle"></i>
                                        <h5>Semua layanan</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Dropdown Mega Area Menu Container -->
                    </li>
                    <!-- Dropdown Menu Layanan IT -->

                    <!-- Simple Menu Karir -->
                    <li class="nav-item menu-hidden">
                        <a class="nav-link" href="/karir">KARIR
                            <span class="sr-only">(current)</span></a>
                    </li>

                    <!-- Simple Menu Blog -->
                    <li class="nav-item menu-hidden">
                        <a class="nav-link" href="/blog">BLOG
                            <span class="sr-only">(current)</span></a>
                    </li>

                    <!-- Simple Menu Kontak -->
                    <li class="nav-item menu-hidden">
                        <a class="nav-link" href="/kontak">KONTAK
                            <span class="sr-only">(current)</span></a>
                    </li>
                </ul>

                <!-- Navbar Logo for Large Screen > 992px  -->
                <a href="#" class="d-flex justify-content-center display-logo-center"><img class="logo mr-auto"
                        src="/assets/img/logo/logo-codepan.png" alt="" class=""></a>

                <!-- Container Social Media Buttons -->
                <ul class="d-flex justify-content-md-center ml-auto p-icon-sosmed">
                    <!-- Facebook Button -->
                    <li>
                        <a href="" class="fb">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>

                    <!-- Instagram Button -->
                    <li>
                        <a href="" class="ig">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>

                    <!-- Linked In Button -->
                    <li>
                        <a href="" class="in">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
                <!-- End of Container Social Media Icon -->
            </div>
            <!-- Container of navbar items/collapse -->
        </div>
    </nav>
    <!-- End of Bar Navigasi -->
</header>
<!-- End of Header -->