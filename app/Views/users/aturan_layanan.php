<?= $this->extend('templates/v_super_user'); ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="/assets/css/aturan_layanan.css">
<link rel="stylesheet" href="/assets/css/responsive.css">
<?= $this->endSection(); ?>

<?= $this->section('content_user'); ?>
<div id="mt" class="bg-aturanlayanan" style="background: url(/assets/img/background/bg.png);">
    <!-- Aturan Layanan -->
    <section id="aturan-layanan">
        <div class="container">
            <div class="hero">
                <h1>ATURAN LAYANAN</h1>
            </div>

        </div>
        <!--Akhir Container-->
    </section>

    <section id="isi-aturanLayanan">

        <div class="container">
            <a href="#" class="btn tombol animate__animated animate__bounceInDown hvr-bounce-to-top">Unduh Aturan
                Layanan</a>
            <hr>

            <div class="view-desktop-aturanLayanan">
                <div class="col">
                    <br>
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="#pasal1" class="nav-link hvr-underline-from-left active" data-toggle="tab" data-aos="fade-right">Pasal 1</a>
                        </li>
                        <li class="nav-item">
                            <a href="#pasal2" class="nav-link hvr-underline-from-left" data-toggle="tab" data-aos="fade-right" data-aos-delay="200">Pasal 2</a>
                        </li>
                        <li class="nav-item">
                            <a href="#pasal3" class="nav-link hvr-underline-from-left" data-toggle="tab" data-aos="fade-right" data-aos-delay="300">Pasal 3</a>
                        </li>
                        <li class="nav-item">
                            <a href="#pasal4" class="nav-link hvr-underline-from-left" data-toggle="tab" data-aos="fade-right" data-aos-delay="400">Pasal 4</a>
                        </li>
                        <li class="nav-item">
                            <a href="#pasal5" class="nav-link hvr-underline-from-left" data-toggle="tab" data-aos="fade-right" data-aos-delay="500">Pasal 5</a>
                        </li>
                        <li class="nav-item">
                            <a href="#pasal6" class="nav-link hvr-underline-from-left" data-toggle="tab" data-aos="fade-right" data-aos-delay="600">Pasal 6</a>
                        </li>
                        <li class="nav-item">
                            <a href="#pasal7" class="nav-link hvr-underline-from-left" data-toggle="tab" data-aos="fade-right" data-aos-delay="700">Pasal 7</a>
                        </li>
                    </ul>


                    <div class="container">
                        <div class="row row-isi-pasal">
                            <div class="col d-flex justify-content-center">
                                <div class="tab-content" data-aos="fade-down" data-aos-delay="600">
                                    <div role="tabpanel" class="tab-pane active" id="pasal1">
                                        <h1 id="pasal">Pasal 1</h1>
                                        <h1 id="isi-pasal">Permintaan Layanan</h1>
                                        <h2 id="ayat-pasal">Ayat 1</h2>
                                        <h2 id="judul-ayat">Tentang Kelengkapan Data</h2>
                                        <p id="isi-ayat">Customer wajib mengisikan data yang valid pada setiap form
                                            yang
                                            disediakan saat permintaan layanan. Data nama yang diisikan harus sama
                                            dengan nama pemilik rekening yang digunakan saat pembayaran. Profio
                                            berhak
                                            untuk tidak menindaklanjuti permintaan jika nama customer berbeda dengan
                                            nama pemilik rekening pembayaran atau data yang diisikan pada form
                                            pemesanan
                                            terbukti tidak valid.</p>

                                        <h2 id="ayat-pasal">Ayat 2</h2>
                                        <h2 id="judul-ayat">Tentang Tata Cara Pembayaran</h2>
                                        <p id="isi-ayat">
                                        <ul>
                                            <li>Setiap biaya layanan Profio dikenakan PPN 10%.</li>
                                            <li>Profioakan mengirimkan tagihan pada email kontak yang terdaftar pada
                                                sistem 7 (tujuh) hari sebelum tagihan jatuh tempo.</li>
                                            <li>Faktur pajak (e-faktur) diterbitkan jika permintaan faktur direquest
                                                telah dilengkapi dengan data pendukung pada bulan yang sama dengan
                                                pembayaran tagihan.</li>
                                            <li>Untuk permintaan faktur fisik maka biaya pengiriman ditanggung oleh
                                                pelanggan. Faktur pajak (e-faktur) yang dapat diproses adalah faktur
                                                pajak yang NPWP nya menggunakan NPWP perusahaan & bendaharawan
                                                (Bukan
                                                perorangan).</li>
                                            <li>NPWP perusahaan/bendaharawan tidak dapat diganti ke NPWP
                                                perusahaan/bendaharawan lain.</li>
                                            <li>Faktur pajak (e-faktur) akan diterbitkan pada hari kerja setelah
                                                pembayaran diterima dengan valid.</li>
                                            <li>Potongan PPH23 hanya diberikan untuk invoice yang belum dilakukan
                                                pembayaran & pelanggan telah melakukan aktivasi fitur PPH23</li>
                                            <li>Pembayaran dengan potongan PPH23, wajib mengirimkan bukti potong
                                                maksimal 50 hari sejak pembayaran dilakukan</li>
                                            <li>Pembayaran dapat dilakukan dengan cara online transfer sesuai dengan
                                                yang tertera pada invoice.</li>
                                            <li>Pembayaran harus sesuai nominal order yang tertera pada invoice
                                                setelah
                                                dikenakan pajak.</li>
                                        </ul>
                                        </p>

                                        <h2 id="ayat-pasal">Ayat 3</h2>
                                        <h2 id="judul-ayat">Tentang Jangka Waktu Penyerahan Layanan</h2>
                                        <p id="isi-ayat">Profio akan melakukan penyerahan aplikasi setelah menerima
                                            pembayaran yang valid dan sesuai dengan ketentuan yang telah di Pasal 1
                                            Ayat
                                            1, kecuali apabila ternyata pelanggan menghendaki sebuah kebutuhan
                                            khusus
                                            dimana dibutuhkan sebuah persyaratan tambahan dalam pemenuhannya
                                            (seperti
                                            pada permintaan penerbitan faktur pajak).</p>

                                        <h2 id="ayat-pasal">Ayat 4</h2>
                                        <h2 id="judul-ayat">Tentang Perubahan Data Kepemilikan</h2>
                                        <p id="isi-ayat">Profio hanya akan melakukan perubahan data kepemilikan
                                            Pelanggan apabila mendapatkan permintaan dari email yang terdaftar di
                                            daftar
                                            kontak kami dengan disertakan dokumen pendukung kepemilikan yang valid &
                                            identitas customer yang sama seperti dengan yang terdaftar di data saat
                                            pendaftaran. Pelanggan berhak untuk menolak permintaan perpindahan
                                            kepemilikan tanpa harus menyertakan alasan apapun sebelumnya.</p>

                                        <h2 id="ayat-pasal">Ayat 5</h2>
                                        <h2 id="judul-ayat">Garansi dan Maintenance</h2>
                                        <p id="isi-ayat">Garansi hanya berlaku selama 6 bulan dengan persyaratan
                                            source
                                            code tidak dimodifikasi oleh Pihak Ketiga.</p>

                                        <h2 id="ayat-pasal">Ayat 6</h2>
                                        <h2 id="judul-ayat">Pihak Ketiga</h2>
                                        <p id="isi-ayat">
                                            Pihak Ketiga yang dimaksud sebagaimana pada Pasal 1 ayat 5 yaitu :
                                        <ul>
                                            <li>Seseorang ataupun kelompok tertentu secara struktural ataupun non
                                                struktural yang memiliki afiliasi/kerjasama baik secara langsung
                                                maupun
                                                tidak langsung dengan instansi pengguna aplikasi eoffice masa kini
                                                Profio.</li>
                                            <li>Vendor atau orang lain yang ditunjuk dan bukan merupakan bagian dari
                                                PT
                                                Profio Teknova Indonesia.</li>
                                        </ul>
                                        </p>

                                        <h2 id="ayat-pasal">Ayat 7</h2>
                                        <h2 id="judul-ayat">Layanan dan Support</h2>
                                        <p id="isi-ayat">Profio akan memberikan bantuan layanan support melalui
                                            tiket
                                            maupun online chat 5×8 jam, pada hari kerja Senin s/d Jumat selama masa
                                            maintenance masih berlaku. Permintaan bantuan via chat whatsapp cp atau
                                            jalur telepon pada jam 08.00 hingga 16.00 WIB. Adapun beberapa bantuan
                                            termasuk ke dalam bantuan support, diantaranya :
                                        <ul>
                                            <li>Perbaikan error atau bug dalam aplikasi, ( bukan perubahan fungsi
                                                atau
                                                alur ).</li>
                                            <li>Penjelasan alur dan fitur aplikasi.</li>
                                            <li>Instalasi dan konfigurasi standar aplikasi pada server pengguna,
                                                yang
                                                sudah terpasang web server dan database server.</li>
                                        </ul>
                                        </p>

                                        <h2 id="ayat-pasal">Ayat 8</h2>
                                        <h2 id="judul-ayat">Instalasi Standar</h2>
                                        <p id="isi-ayat">Instalasi standar yang dimaksud pada Ayat 7 poin ke-3
                                            adalah
                                            sebagai berikut :
                                        <ul>
                                            <li>Kode sumber Profio sudah terpasang pada web server pelanggan.</li>
                                            <li>Library tambahan untuk aplikasi.</li>
                                            <li>Database Profiosudah terpasang pada database server.</li>
                                            <li>Aplikasi sudah bisa diakses pada IP yang disediakan oleh pelanggan,
                                                misalkan http://168.1.1.0</li>
                                        </ul>
                                        </p>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="pasal2">
                                        <h1 id="pasal">Pasal 2</h1>
                                        <h1 id="isi-pasal">Hak Cipta</h1>
                                        <h2 id="ayat-pasal">Ayat 1</h2>
                                        <h2 id="judul-ayat">Lisensi</h2>
                                        <p id="isi-ayat">Profio memungkinkan untuk memberikan lisensi kepada
                                            customer
                                            secara eksklusif yaitu source code dengan ketentuan Anda menyetujui
                                            syarat
                                            dan ketentuan Perjanjian ini.</p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="pasal3">
                                        <h1 id="pasal">Pasal 3</h1>
                                        <h1 id="isi-pasal">Bantuan dan Restore Data</h1>
                                        <h2 id="ayat-pasal">Ayat 1</h2>
                                        <h2 id="judul-ayat">Bantuan Input Data Awal</h2>
                                        <p id="isi-ayat">
                                        <ul>
                                            <li>Tim Profiomensupport untuk melakukan inisiasi awal data pengguna
                                                pada
                                                server pelanggan maksimal 500 data unique.</li>
                                            <li>Segala kesalahan input yg diakibatkan kesalahan data sumber setelah
                                                masuk ke sistem merupakan tanggung jawab milik pelanggan.</li>
                                        </ul>
                                        </p>

                                        <h2 id="ayat-pasal">Ayat 2</h2>
                                        <h2 id="judul-ayat">Tentang Ketentuan Back-Up Data</h2>
                                        <p id="isi-ayat">Profio tidak menyediakan backup data bagi pelanggan.
                                            Pelanggan
                                            disarankan untuk membuat backup data secara manual dan disimpan di
                                            storage
                                            pribadi untuk keamanan data.
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="pasal4">
                                        <h1 id="pasal">Pasal 4</h1>
                                        <h1 id="isi-pasal">Pelanggaran dan Sanksi</h1>
                                        <p id="isi-ayat">Jika Pelanggan melakukan pelanggaran seperti yang tercantum
                                            pada Pasal 2, Pihak Profio dapat memberikan sanksi kepada Pelanggan dan
                                            dapat berlanjut ke proses hukum.
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="pasal5">
                                        <h1 id="pasal">Pasal 5</h1>
                                        <h1 id="isi-pasal">Force Majeur</h1>
                                        <p id="isi-ayat">Force majeure adalah suatu keadaan yang ada di luar
                                            kemampuan.
                                            Misalnya bencana alam, banjir, badai, yang dinyatakan oleh Pemerintah
                                            sebagai bencana alam, huru hara, kebakaran, sabotase, peperangan,
                                            epidemi
                                            dan kepatuhan terhadap pelaksanaan perundang-undangan.</p>
                                        <p id="isi-ayat">
                                            Tidak termasuk force majeure, hal-hal yang diakibatkan oleh kelalaian,
                                            kealpaan, kecerobohan dan/atau ketidakpatuhan terhadap pelaksanaan
                                            peraturan. Apabila Profio mengalami force majeur maka Profio akan
                                            memberitahukan melalui email yang terdaftar, segera setelah mengalami
                                            force
                                            majeure selambat-lambatnya 7 (tujuh) hari sejak force majeure terjadi
                                            dengan
                                            memberikan penjelasan dan perkiraan dimulainya kembali pelaksanaan
                                            ketentuan
                                            Perjanjian.</p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="pasal6">
                                        <h1 id="pasal">Pasal 6</h1>
                                        <h1 id="isi-pasal">Hukum Berlaku</h1>
                                        <p id="isi-ayat">Ketentuan layanan ini dan pelaksanaannya tunduk pada dan
                                            diartikan sesuai dengan peraturan perundang-undangan dan hukum Negara
                                            Republik Indonesia. Profio dapat melakukan kerjasama dengan penegak
                                            hukum &
                                            pihak yang berwenang tanpa persetujuan ataupun pemberitahuan lebih
                                            lanjut
                                            kepada Pelanggan. Dalam hal terjadi perselisihan atau perbedaan pendapat
                                            sebagai akibat dari pelaksanaan ketentuan layanan ini, maka baik
                                            Pelanggan
                                            maupun Profio sepakat dan setuju untuk menyelesaikannya secara
                                            musyawarah
                                            untuk mencapai mufakat.</p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="pasal7">
                                        <h1 id="pasal">Pasal 7</h1>
                                        <h1 id="isi-pasal">Penggunaan Data</h1>
                                        <h2 id="ayat-pasal">Ayat 1</h2>
                                        <h2 id="judul-ayat">Tentang Penggunaan Data</h2>
                                        <p id="isi-ayat">Website kami akan menyimpan cookies data dari browser
                                            Pengunjung dan juga beberapa data cookies personal Pengunjung dari
                                            platform
                                            seperti Google, Facebook, Twitter, dll. Hal ini kami lakukan agar kami
                                            bisa
                                            tetap menyajikan konten-konten yang relevan bagi Pengunjung, baik
                                            organic
                                            maupun yang berupa iklan. Kami tidak akan pernah membagikan data-data
                                            ini ke
                                            orang lain yang tidak berkepentingan, maupun menggunakannya untuk hal
                                            lain
                                            diluar kebutuhan marketing kami.</p>
                                        <p id="isi-ayat">Pengunjung juga mungkin menemukan beberapa konten yang
                                            mengharuskan Pengunjung untuk login atau meng-otorisasi akses ke akun
                                            sosial
                                            media Pengunjung, namun itu semua tentu harus melalui proses persetejuan
                                            dari Pengunjung. Pengunjung bisa memilih untuk tidak melakukannya, meski
                                            pada akhirnya Pengunjung mungkin tidak bisa mengakses konten-konten
                                            tertentu
                                            pada website kami.</p>

                                        <h2 id="ayat-pasal">Ayat 2</h2>
                                        <h2 id="judul-ayat">Pendaftaran Email pada Form Lain Selain Form Order</h2>
                                        <p id="isi-ayat">Ketika Pengunjung memasukkan email itu artinya Pengunjung
                                            setuju email Pengunjung ditambahkan ke dalam sebuah daftar kontak yang
                                            akan
                                            kami kirimi sebuah pemberitahuan dan penawaran khusus sebagai bagian
                                            dari
                                            kegiatan marketing kami.</p>
                                        <p id="isi-ayat">Pengunjung juga bisa melakukan ‘unsubscribe’ ketika tidak
                                            ingin
                                            lagi mendapatkan informasi atau penawaran khusus dari kegiatan marketing
                                            kami. Pengunjung bisa klik tombol / link ‘unsubscribe’ di bagian bawah
                                            email
                                            yang kami kirimkan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Akhir view-dektop-aturanLayanan -->

            <div class="view-mobile-aturanLayanan">
                <div class="container">
                    <div class="row">
                        <div class="col" data-aos="fade-down" data-aos-delay="600">

                            <div class="wrapper">
                                <div class="accordion_wrap accordion_1">
                                    <div class="accordion_header">
                                        PASAL 1
                                    </div>
                                    <div class="accordion_body">
                                        <h1 id="pasal">Pasal 1</h1>
                                        <h1 id="isi-pasal">Permintaan Layanan</h1>
                                        <h2 id="ayat-pasal">Ayat 1</h2>
                                        <h2 id="judul-ayat">Tentang Kelengkapan Data</h2>
                                        <p id="isi-ayat">Customer wajib mengisikan data yang valid pada setiap form
                                            yang
                                            disediakan saat permintaan layanan. Data nama yang diisikan harus sama
                                            dengan nama pemilik rekening yang digunakan saat pembayaran. Profio
                                            berhak
                                            untuk tidak menindaklanjuti permintaan jika nama customer berbeda dengan
                                            nama pemilik rekening pembayaran atau data yang diisikan pada form
                                            pemesanan
                                            terbukti tidak valid.</p>

                                        <h2 id="ayat-pasal">Ayat 2</h2>
                                        <h2 id="judul-ayat">Tentang Tata Cara Pembayaran</h2>
                                        <p id="isi-ayat">
                                        <ul>
                                            <li>Setiap biaya layanan Profio dikenakan PPN 10%.</li>
                                            <li>Profioakan mengirimkan tagihan pada email kontak yang terdaftar pada
                                                sistem 7 (tujuh) hari sebelum tagihan jatuh tempo.</li>
                                            <li>Faktur pajak (e-faktur) diterbitkan jika permintaan faktur direquest
                                                telah dilengkapi dengan data pendukung pada bulan yang sama dengan
                                                pembayaran tagihan.</li>
                                            <li>Untuk permintaan faktur fisik maka biaya pengiriman ditanggung oleh
                                                pelanggan. Faktur pajak (e-faktur) yang dapat diproses adalah faktur
                                                pajak yang NPWP nya menggunakan NPWP perusahaan & bendaharawan
                                                (Bukan
                                                perorangan).</li>
                                            <li>NPWP perusahaan/bendaharawan tidak dapat diganti ke NPWP
                                                perusahaan/bendaharawan lain.</li>
                                            <li>Faktur pajak (e-faktur) akan diterbitkan pada hari kerja setelah
                                                pembayaran diterima dengan valid.</li>
                                            <li>Potongan PPH23 hanya diberikan untuk invoice yang belum dilakukan
                                                pembayaran & pelanggan telah melakukan aktivasi fitur PPH23</li>
                                            <li>Pembayaran dengan potongan PPH23, wajib mengirimkan bukti potong
                                                maksimal 50 hari sejak pembayaran dilakukan</li>
                                            <li>Pembayaran dapat dilakukan dengan cara online transfer sesuai dengan
                                                yang tertera pada invoice.</li>
                                            <li>Pembayaran harus sesuai nominal order yang tertera pada invoice
                                                setelah
                                                dikenakan pajak.</li>
                                        </ul>
                                        </p>

                                        <h2 id="ayat-pasal">Ayat 3</h2>
                                        <h2 id="judul-ayat">Tentang Jangka Waktu Penyerahan Layanan</h2>
                                        <p id="isi-ayat">Profio akan melakukan penyerahan aplikasi setelah menerima
                                            pembayaran yang valid dan sesuai dengan ketentuan yang telah di Pasal 1
                                            Ayat
                                            1, kecuali apabila ternyata pelanggan menghendaki sebuah kebutuhan
                                            khusus
                                            dimana dibutuhkan sebuah persyaratan tambahan dalam pemenuhannya
                                            (seperti
                                            pada permintaan penerbitan faktur pajak).</p>

                                        <h2 id="ayat-pasal">Ayat 4</h2>
                                        <h2 id="judul-ayat">Tentang Perubahan Data Kepemilikan</h2>
                                        <p id="isi-ayat">Profio hanya akan melakukan perubahan data kepemilikan
                                            Pelanggan apabila mendapatkan permintaan dari email yang terdaftar di
                                            daftar
                                            kontak kami dengan disertakan dokumen pendukung kepemilikan yang valid &
                                            identitas customer yang sama seperti dengan yang terdaftar di data saat
                                            pendaftaran. Pelanggan berhak untuk menolak permintaan perpindahan
                                            kepemilikan tanpa harus menyertakan alasan apapun sebelumnya.</p>

                                        <h2 id="ayat-pasal">Ayat 5</h2>
                                        <h2 id="judul-ayat">Garansi dan Maintenance</h2>
                                        <p id="isi-ayat">Garansi hanya berlaku selama 6 bulan dengan persyaratan
                                            source
                                            code tidak dimodifikasi oleh Pihak Ketiga.</p>

                                        <h2 id="ayat-pasal">Ayat 6</h2>
                                        <h2 id="judul-ayat">Pihak Ketiga</h2>
                                        <p id="isi-ayat">
                                            Pihak Ketiga yang dimaksud sebagaimana pada Pasal 1 ayat 5 yaitu :
                                        <ul>
                                            <li>Seseorang ataupun kelompok tertentu secara struktural ataupun non
                                                struktural yang memiliki afiliasi/kerjasama baik secara langsung
                                                maupun
                                                tidak langsung dengan instansi pengguna aplikasi eoffice masa kini
                                                Profio.</li>
                                            <li>Vendor atau orang lain yang ditunjuk dan bukan merupakan bagian dari
                                                PT
                                                Profio Teknova Indonesia.</li>
                                        </ul>
                                        </p>

                                        <h2 id="ayat-pasal">Ayat 7</h2>
                                        <h2 id="judul-ayat">Layanan dan Support</h2>
                                        <p id="isi-ayat">Profio akan memberikan bantuan layanan support melalui
                                            tiket
                                            maupun online chat 5×8 jam, pada hari kerja Senin s/d Jumat selama masa
                                            maintenance masih berlaku. Permintaan bantuan via chat whatsapp cp atau
                                            jalur telepon pada jam 08.00 hingga 16.00 WIB. Adapun beberapa bantuan
                                            termasuk ke dalam bantuan support, diantaranya :
                                        <ul>
                                            <li>Perbaikan error atau bug dalam aplikasi, ( bukan perubahan fungsi
                                                atau
                                                alur ).</li>
                                            <li>Penjelasan alur dan fitur aplikasi.</li>
                                            <li>Instalasi dan konfigurasi standar aplikasi pada server pengguna,
                                                yang
                                                sudah terpasang web server dan database server.</li>
                                        </ul>
                                        </p>

                                        <h2 id="ayat-pasal">Ayat 8</h2>
                                        <h2 id="judul-ayat">Instalasi Standar</h2>
                                        <p id="isi-ayat">Instalasi standar yang dimaksud pada Ayat 7 poin ke-3
                                            adalah
                                            sebagai berikut :
                                        <ul>
                                            <li>Kode sumber Profio sudah terpasang pada web server pelanggan.</li>
                                            <li>Library tambahan untuk aplikasi.</li>
                                            <li>Database Profiosudah terpasang pada database server.</li>
                                            <li>Aplikasi sudah bisa diakses pada IP yang disediakan oleh pelanggan,
                                                misalkan http://168.1.1.0</li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion_wrap accordion_2">
                                    <div class="accordion_header">
                                        PASAL 2
                                    </div>
                                    <div class="accordion_body">
                                        <h1 id="pasal">Pasal 2</h1>
                                        <h1 id="isi-pasal">Hak Cipta</h1>
                                        <h2 id="ayat-pasal">Ayat 1</h2>
                                        <h2 id="judul-ayat">Lisensi</h2>
                                        <p id="isi-ayat">Profio memungkinkan untuk memberikan lisensi kepada
                                            customer
                                            secara eksklusif yaitu source code dengan ketentuan Anda menyetujui
                                            syarat
                                            dan ketentuan Perjanjian ini.</p>
                                    </div>
                                </div>
                                <div class="accordion_wrap accordion_3">
                                    <div class="accordion_header">
                                        PASAL 3
                                    </div>
                                    <div class="accordion_body">
                                        <h1 id="pasal">Pasal 2</h1>
                                        <h1 id="isi-pasal">Bantuan dan Restore Data</h1>
                                        <h2 id="ayat-pasal">Ayat 1</h2>
                                        <h2 id="judul-ayat">Bantuan Input Data Awal</h2>
                                        <p id="isi-ayat">
                                        <ul>
                                            <li>Tim Profiomensupport untuk melakukan inisiasi awal data pengguna
                                                pada
                                                server pelanggan maksimal 500 data unique.</li>
                                            <li>Segala kesalahan input yg diakibatkan kesalahan data sumber setelah
                                                masuk ke sistem merupakan tanggung jawab milik pelanggan.</li>
                                        </ul>
                                        </p>

                                        <h2 id="ayat-pasal">Ayat 2</h2>
                                        <h2 id="judul-ayat">Tentang Ketentuan Back-Up Data</h2>
                                        <p id="isi-ayat">Profio tidak menyediakan backup data bagi pelanggan.
                                            Pelanggan
                                            disarankan untuk membuat backup data secara manual dan disimpan di
                                            storage
                                            pribadi untuk keamanan data.</p>
                                    </div>
                                </div>
                                <div class="accordion_wrap accordion_4">
                                    <div class="accordion_header">
                                        PASAL 4
                                    </div>
                                    <div class="accordion_body">
                                        <h1 id="pasal">Pasal 4</h1>
                                        <h1 id="isi-pasal">Pelanggaran dan Sanksi</h1>
                                        <p id="isi-ayat">Jika Pelanggan melakukan pelanggaran seperti yang tercantum
                                            pada Pasal 2, Pihak Profio dapat memberikan sanksi kepada Pelanggan dan
                                            dapat berlanjut ke proses hukum.</p>
                                    </div>
                                </div>
                                <div class="accordion_wrap accordion_5">
                                    <div class="accordion_header">
                                        PASAL 5
                                    </div>
                                    <div class="accordion_body">
                                        <h1 id="pasal">Pasal 5</h1>
                                        <h1 id="isi-pasal">Force Majeur</h1>
                                        <p id="isi-ayat">Force majeure adalah suatu keadaan yang ada di luar
                                            kemampuan.
                                            Misalnya bencana alam, banjir, badai, yang dinyatakan oleh Pemerintah
                                            sebagai bencana alam, huru hara, kebakaran, sabotase, peperangan,
                                            epidemi
                                            dan kepatuhan terhadap pelaksanaan perundang-undangan.</p>
                                        <p id="isi-ayat">
                                            Tidak termasuk force majeure, hal-hal yang diakibatkan oleh kelalaian,
                                            kealpaan, kecerobohan dan/atau ketidakpatuhan terhadap pelaksanaan
                                            peraturan. Apabila Profio mengalami force majeur maka Profio akan
                                            memberitahukan melalui email yang terdaftar, segera setelah mengalami
                                            force
                                            majeure selambat-lambatnya 7 (tujuh) hari sejak force majeure terjadi
                                            dengan
                                            memberikan penjelasan dan perkiraan dimulainya kembali pelaksanaan
                                            ketentuan
                                            Perjanjian.</p>
                                    </div>
                                </div>
                                <div class="accordion_wrap accordion_6">
                                    <div class="accordion_header">
                                        PASAL 6
                                    </div>
                                    <div class="accordion_body">
                                        <h1 id="pasal">Pasal 6</h1>
                                        <h1 id="isi-pasal">Hukum Berlaku</h1>
                                        <p id="isi-ayat">Ketentuan layanan ini dan pelaksanaannya tunduk pada dan
                                            diartikan sesuai dengan peraturan perundang-undangan dan hukum Negara
                                            Republik Indonesia. Profio dapat melakukan kerjasama dengan penegak
                                            hukum &
                                            pihak yang berwenang tanpa persetujuan ataupun pemberitahuan lebih
                                            lanjut
                                            kepada Pelanggan. Dalam hal terjadi perselisihan atau perbedaan pendapat
                                            sebagai akibat dari pelaksanaan ketentuan layanan ini, maka baik
                                            Pelanggan
                                            maupun Profio sepakat dan setuju untuk menyelesaikannya secara
                                            musyawarah
                                            untuk mencapai mufakat.</p>
                                    </div>
                                </div>
                                <div class="accordion_wrap accordion_7">
                                    <div class="accordion_header">
                                        PASAL 7
                                    </div>
                                    <div class="accordion_body">
                                        <h1 id="pasal">Pasal 7</h1>
                                        <h1 id="isi-pasal">Penggunaan Data</h1>
                                        <h2 id="ayat-pasal">Ayat 1</h2>
                                        <h2 id="judul-ayat">Tentang Penggunaan Data</h2>
                                        <p id="isi-ayat">Website kami akan menyimpan cookies data dari browser
                                            Pengunjung dan juga beberapa data cookies personal Pengunjung dari
                                            platform
                                            seperti Google, Facebook, Twitter, dll. Hal ini kami lakukan agar kami
                                            bisa
                                            tetap menyajikan konten-konten yang relevan bagi Pengunjung, baik
                                            organic
                                            maupun yang berupa iklan. Kami tidak akan pernah membagikan data-data
                                            ini ke
                                            orang lain yang tidak berkepentingan, maupun menggunakannya untuk hal
                                            lain
                                            diluar kebutuhan marketing kami.</p>
                                        <p id="isi-ayat">Pengunjung juga mungkin menemukan beberapa konten yang
                                            mengharuskan Pengunjung untuk login atau meng-otorisasi akses ke akun
                                            sosial
                                            media Pengunjung, namun itu semua tentu harus melalui proses persetejuan
                                            dari Pengunjung. Pengunjung bisa memilih untuk tidak melakukannya, meski
                                            pada akhirnya Pengunjung mungkin tidak bisa mengakses konten-konten
                                            tertentu
                                            pada website kami.</p>

                                        <h2 id="ayat-pasal">Ayat 2</h2>
                                        <h2 id="judul-ayat">Pendaftaran Email pada Form Lain Selain Form Order</h2>
                                        <p id="isi-ayat">Ketika Pengunjung memasukkan email itu artinya Pengunjung
                                            setuju email Pengunjung ditambahkan ke dalam sebuah daftar kontak yang
                                            akan
                                            kami kirimi sebuah pemberitahuan dan penawaran khusus sebagai bagian
                                            dari
                                            kegiatan marketing kami.</p>
                                        <p id="isi-ayat">Pengunjung juga bisa melakukan ‘unsubscribe’ ketika tidak
                                            ingin
                                            lagi mendapatkan informasi atau penawaran khusus dari kegiatan marketing
                                            kami. Pengunjung bisa klik tombol / link ‘unsubscribe’ di bagian bawah
                                            email
                                            yang kami kirimkan.</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!--akhir col-->
                    </div>
                    <!--akhir row-->
                </div> <!-- akhir container-->

            </div>
            <!-- Akhir view-mobile-aturanLayanan -->


        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#2926A9" fill-opacity="1" d="M0,192L34.3,176C68.6,160,137,128,206,138.7C274.3,149,343,203,411,192C480,181,549,107,617,80C685.7,53,754,75,823,106.7C891.4,139,960,181,1029,208C1097.1,235,1166,245,1234,240C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
    </svg>
</div>
<?= $this->endSection(); ?>