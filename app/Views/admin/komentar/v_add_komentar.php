<?= $this->extend('templates/v_super'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Blog</h1>

    <div class="row">

        <div class="col-sm-12">

            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Blog</h6>
                </div>
                <div class="card-body add-blog blog-form">
                    <form action="/blog/save" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
                            </div>
                            <input type="text" class="form-control rounded-right<?= ($validation->getError('nama')) ? ' is-invalid' : ''; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nama" value="<?= old('nama'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('judul'); ?>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Jabatan</span>
                            </div>
                            <input type="text" class="form-control rounded-right<?= ($validation->getError('jabatan')) ? ' is-invalid' : ''; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="jabatan" value="<?= old('jabatan'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('judul'); ?>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Perusahaan</span>
                            </div>
                            <input type="text" class="form-control rounded-right<?= ($validation->getError('perusahaan')) ? ' is-invalid' : ''; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="perusahaan" value="<?= old('perusahaan'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('judul'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea2" class="font-weight-bold">Komentar</label>
                            <textarea rows="3" maxlength="300" class="form-control rounded text<?= ($validation->getError('komentar')) ? ' is-invalid' : ''; ?>" id="describ" name="komentar" value=""><?= old('komentar'); ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('describ'); ?>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Gambar Utama</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input<?= ($validation->getError('foto')) ? ' is-invalid' : ''; ?>" id="foto" aria-describedby="inputGroupFileAddon01" name="foto" onchange="previewImage()" value="<?= old('foto'); ?>">
                                <div class="invalid-feedback invalid-foto">
                                    <?= $validation->getError('foto'); ?>
                                </div>
                                <label id="label-gambar" class="custom-file-label" for="inputGroupFile01"><?= (old('foto')) ? old('foto') : 'Choose...'; ?></label>
                            </div>
                        </div>
                        <small id="passwordHelpBlock" class="form-text text-muted ml-3">
                            <li>ukuran gambar maksimal 1 mb.</li>
                        </small>
                        <div class="col-sm-2 mt-2">
                            <img src="/assets/img/blog/image.png" alt="" class="img-thumbnail img-preview shadow-sm">
                        </div>

                        <input type="submit" value="Create" class="submit btn-save">
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endSection(); ?>