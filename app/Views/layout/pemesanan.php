<!-- Container Form -->
<div class="p-form">
    <div class="container-form">
        <form action="/pemesanan/save" method="POST">
            <?= csrf_field(); ?>
            <div class="row">
                <!-- Alert -->
                <div class="alert alert-success alert-dismissible fade show col-md-12 d-none" role="alert">
                    <strong>Selamat!</strong> Data Anda telah sukses terkirim.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php if ($pesan) : ?>
                <div class="alert alert-success" role="alert">
                    <?= $pesan; ?>
                </div>
                <?php endif; ?>
                <!-- Input Nama -->
                <div class="col-md-6 margin-text">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Anda*" required>
                </div>

                <!-- Input Email -->
                <div class="col-md-6 margin-text">
                    <input type="email" name="email" class="form-control" placeholder="Email Anda*" required>
                </div>

                <!-- Input No. HP -->
                <div class="col-md-6 margin-text">
                    <input type="tel" name="no" class="form-control" placeholder="No HP*" required>
                </div>

                <!-- Input Nama Perusahaan -->
                <div class="col-md-6 margin-text">
                    <input type="text" name="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan*"
                        required>
                </div>

                <!-- Select Layanan IT -->
                <div class="col-md-12 margin-select">
                    <select class="form-control" name="layanan_it">
                        <option value="" selected hidden disabled>Layanan IT apa yang Anda butuhkan ?*</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Aplikasi Mobile">Aplikasi Mobile</option>
                        <option value="Aplikasi E-Goverment">Aplikasi E-Goverment</option>
                        <option value="Integrasi Sistem">Integrasi Sistem</option>
                        <option value="Pengadaan IT">Pengadaan IT</option>
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
                    <select class="form-control" id="exampleFormControlSelect1" placeholder="holder" name="bidang">
                        <!-- Value of Select Bidang Perusahaan -->
                        <option value="" selected hidden disabled>Pilih bidang perusahaan Anda</option>
                        <option value="Pariwisata">Pariwisata</option>
                        <option value="Keuangan">Keuangan</option>
                        <option value="Hukum">Hukum</option>
                        <option value="Manajemen">Manajemen</option>
                    </select>
                </div>
                <!-- End of Select Bidang Perusahaan -->

                <!-- Verification Input -->
                <div class="g-recaptcha col-md-12 d-flex align-items-center"
                    data-sitekey="6LdtkpQaAAAAAAqlBXUJls3ZQsJGm8RZa3yov6bq" data-callback="enableBtn"></div>

                <!-- Agreement -->
                <!-- <div class="col-lg-7 box-setuju d-flex justify-content-start">
                <input type="checkbox" id="setuju" name="setuju"> -->
                <!-- Agreement Text -->
                <!-- <label for="setuju">Saya menyetujui bahwa data yang saya isi adalah benar</label>
            </div> -->
                <!-- End of Agreement -->

                <!-- Submit Button -->
                <div class="col-md-12 text-center d-flex align-items-center">

                    <button type="submit" class="btn-primary btn-submit" id="kirim_btn" disabled="disabled"
                        value="Kirim">Kirim
                    </button>

                    <button class="btn btn-primary d-none" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                    <!-- <button class="btn-primary btn-submit" disabled="disable">
                    <input type="submit" id="kirim_btn" value="Kirim">
                </button>

                <input type="submit" class="btn btn-primary d-none" disabled> -->
                    <!-- <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Loading...
                </button> -->
                </div>

            </div>
        </form>
    </div>
</div>
<!-- End of Container Form -->