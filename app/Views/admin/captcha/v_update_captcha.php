<?= $this->extend('templates/v_super'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Captcha</h6>
        </div>
        <div class="card-body add-blog px-4 tambah-admin">
            <form action="/logo/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="input-group mb-3 cabang">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Deskripsi</span>
                    </div>
                    <input type="text" class="rounded-right form-control<?= ($validation->hasError('deskripsi')) ? ' is-invalid' : ''; ?>" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="deskripsi" value="<?= old('deskripsi'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('deskripsi'); ?>
                    </div>
                </div>

                <div class="input-group mb-3 cabang">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Gambar Captcha</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input<?= ($validation->getError('foto')) ? 'is-invalid' : ''; ?>" id="foto" aria-describedby="inputGroupFileAddon01" name="foto" onchange="previewImage()" value="<?= old('foto'); ?>">
                        <div class="invalid-feedback invalid-foto">
                            <?= $validation->getError('foto'); ?>
                        </div>
                        <label class="custom-file-label" for="inputGroupFile01"><?= (old('foto')) ? old('foto') : 'Choose...'; ?></label>
                    </div>
                </div>
                <small id="passwordHelpBlock" class="form-text text-muted ml-3">
                    <li>ukuran gambar maksimal 1 mb.</li>
                </small>
                <div class="col-sm-2 mt-2">
                    <img src="/assets/img/portfolio/image.png" alt="" class="img-thumbnail img-preview shadow-sm">
                </div>

                <input type="submit" value="Create" class="submit btn-save">
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endSection(); ?>