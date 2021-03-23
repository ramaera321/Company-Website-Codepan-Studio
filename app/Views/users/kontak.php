<?= $this->extend('templates/v_super_user'); ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="/assets/css/kontak.css">
<link rel="stylesheet" href="/assets/css/responsive.css">
<?= $this->endSection(); ?>

<?= $this->section('content_user'); ?>
<!-- Kontak Kami -->
<div id="mt" class="kontak-kami">
    <div class="container">
        <div class="container-judul text-center">
            <h1>KONTAK KAMI</h1>
            <p class="text-under-judul">Tertarik dengan layanan IT kami? Atau ingin konsultasi dengan kami? Silakan
                hubungi kami dan dengan senang hati kami akan membantu.</p>
        </div>
        <div class="container-icon row">
            <div class="col-lg-4 text-center jarak-icon" data-aos="fade-up">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <div
                    style="height:100px; width:100px; position: relative; display: flex; justify-content:center; align-items:center; margin: 0 auto;">
                    <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_7nrkybjw.json"
                        background="transparent" speed="1" style="width: 250px; height: 250px; margin: 0 auto" loop
                        autoplay>
                    </lottie-player>
                </div>

                <h5>Hubungi kami</h5>
                <p>Perusahaan Software <br>
                    Whatsapp : 081252200899 <br>
                    Telp : (031) 99687829 <br>
                    Jam Kerja: 08.00 – 16.00 <br>
                    (Senin – Jum’at) <br>
                    Email : info@codepanstudio.com</p>
            </div>

            <div class="col-lg-4 text-center jarak-icon" data-aos="fade-up" data-aos-delay="200">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_akcar69n.json"
                    background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay>
                </lottie-player>
                <h5>Selalu Siap</h5>
                <p>Kami akan siap datang ke lokasi, jika Anda membutuhkan.</p>
            </div>

            <div class="col-lg-4 text-center jarak-icon" data-aos="fade-up" data-aos-delay="400">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_6mtrurjh.json"
                    background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay>
                </lottie-player>
                <h5>Ada pertanyaaan?</h5>
                <p>Ketika berkaitan dengan teknologi IT, Anda akan membutuhkan seseorang yang ahli. Disitulah kami
                    hadir untuk Anda.</p>
            </div>
        </div>
        <div class="container-map text-center" data-aos="zoom-in-up">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.404007820487!2d112.75189885710515!3d-7.3084275033266515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb601bc3383b%3A0x6d776c16d3379950!2sCodepan%20Studio!5e0!3m2!1sid!2sid!4v1614067946426!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="solusi">
            <!-- Container Mitra -->
            <div class="row container-mitra" data-aos="fade-up">
                <div class="col-md-5 text-center keterangan">
                    <p class="sub-judul">SELANGKAH KAMI LEBIH DEKAT</p>
                    <h2>DAPATKAN SOLUSINYA SEKARANG</h2>
                    <p class="text-under-judul">Silakan hubungi kontak atau isi form yang telah tersedia.</p>

                    <ul class="row items">
                        <li class="col-md-12 item">
                            <div class="row">
                                <div class="col-3 pt-2">
                                    <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_q75ozg3t.json"
                                        background="transparent" speed="1" style="width: 100%; height: auto;" loop
                                        autoplay>
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
                                        background="transparent" speed="1" style="width: 100%; height: auto;" loop
                                        autoplay>
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
                                        background="transparent" speed="1" style="width: 100%; height: auto;" loop
                                        autoplay>
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
                                <div class="col-lg-7 box-setuju">
                                    <input type="checkbox" id="setuju" name="setuju">
                                    <!-- Agreement Text -->
                                    <label for="setuju">Saya menyetujui bahwa data yang saya isi adalah
                                        benar</label>
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
        </div>
        <p class="text-under-form text-center" data-aos="fade-up">Anda juga bisa mengirim email di <a
                href="mailto:info@codepanstudio.com" class="hvr-underline-from-left">info@codepanstudio.com</a></p>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#2926A9" fill-opacity="1"
            d="M0,192L34.3,176C68.6,160,137,128,206,138.7C274.3,149,343,203,411,192C480,181,549,107,617,80C685.7,53,754,75,823,106.7C891.4,139,960,181,1029,208C1097.1,235,1166,245,1234,240C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
    </svg>
</div>
<!-- End of Kontak Kami -->
<?= $this->endSection(); ?>