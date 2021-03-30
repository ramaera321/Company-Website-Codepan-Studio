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
                <button type="submit" class="btn-primary btn-submit" id="kirim_btn" disabled="disabled">Kirim
                </button>

                <button class="btn btn-primary d-none" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Loading...
                </button>
            </div>

        </div>
    </form>
</div>
<!-- End of Container Form -->