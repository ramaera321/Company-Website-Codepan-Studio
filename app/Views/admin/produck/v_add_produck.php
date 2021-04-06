<?= $this->extend('templates/v_super'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">

        <div class="col-sm-12">

            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Produck</h6>
                </div>
                <div class="card-body add-blog blog-form">
                    <form action="/portfolio/save" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Judul</span>
                            </div>
                            <input type="text" class="form-control rounded-right<?= ($validation->getError('judul')) ? ' is-invalid' : ''; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="judul" value="<?= old('judul'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('judul'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea2" class="font-weight-bold">Describ Preview</label>
                            <textarea rows="3" maxlength="300" class="form-control rounded text<?= ($validation->getError('describ')) ? ' is-invalid' : ''; ?>" id="describ" name="describ" value=""><?= old('describ'); ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('describ'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="font-weight-bold">Isi</label>
                            <textarea class="form-control text<?= ($validation->getError('isi')) ? ' is-invalid' : ''; ?>" id="exampleFormControlTextarea2" name="isi" value=""><?= old('isi'); ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('isi'); ?>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Penulis</span>
                            </div>
                            <select class="custom-select<?= ($validation->getError('penulis')) ? ' is-invalid' : ''; ?>" id="inputGroupSelect01" name="penulis">
                                <option value="<?= (old('penulis')) ? old('penulis') : ''; ?>" selected hidden disabled><?= (old('penulis')) ? old('penulis') : 'Choose...'; ?></option>
                                <?php foreach ($penulis as $penulis) : ?>
                                    <option value="<?= $penulis['nama']; ?>"><?= $penulis['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('penulis'); ?>
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
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endSection(); ?>