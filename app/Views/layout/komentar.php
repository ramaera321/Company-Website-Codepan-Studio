<div class="row container-testi d-flex justify-content-between">
    <?php
    foreach ($komentar as $komentar) :
    ?>
        <div class="pelanggan col-md-6 row" data-aos="fade-right">
            <div class="mx-0 col-lg-4 pelanggan-info">
                <div class="img-testi">
                    <?php
                    $id_admin = $komentar['id_admin'];
                    $admin = $adminData->where(['id' => $id_admin])->first();
                    ?>
                    <img src="/assets/img/admin/customer-service.png" alt="">
                </div>
                <div class="info">
                    <h5 class="nama-pelanggan"><?= ucwords($admin['nama']); ?></h5>
                    <p class="posisi"><?= $komentar['jabatan']; ?> <?= $komentar['perusahaan']; ?></p>
                </div>
            </div>
            <div class="mx-0 mt-1 pl-0 col-lg-8">
                <p><?= $komentar['komentar']; ?></p>
            </div>
        </div>
    <?php
    endforeach;
    ?>
</div>