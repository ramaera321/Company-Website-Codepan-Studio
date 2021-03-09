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
                                <span class="input-group-text" id="inputGroup-sizing-default">Judul</span>
                            </div>
                            <input type="text" class="form-control rounded-right<?= ($validation->getError('judul')) ? ' is-invalid' : ''; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="judul" value="<?= old('judul'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('judul'); ?>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
                            </div>
                            <select class="custom-select<?= ($validation->getError('kategori')) ? ' is-invalid' : ''; ?>" id="inputGroupSelect01" name="kategori">
                                <option value="<?= (old('kategori')) ? old('kategori') : ''; ?>" selected hidden disabled><?= (old('kategori')) ? old('kategori') : 'Choose...'; ?></option>
                                <?php foreach ($kategori as $kategori) : ?>
                                    <option value="<?= $kategori['nama_kategori']; ?>"><?= $kategori['nama_kategori']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('kategori'); ?>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Sub Kategori</label>
                            </div>
                            <select class="custom-select<?= ($validation->getError('sub_kategori')) ? ' is-invalid' : ''; ?>" id="inputGroupSelect01" name="sub_kategori">
                                <option value="<?= (old('sub_kategori')) ? old('sub_kategori') : ''; ?>" selected hidden disabled><?= (old('sub_kategori')) ? old('sub_kategori') : 'Choose...'; ?></option>
                                <?php foreach ($sub_kategori as $sub_kategori) : ?>
                                    <option value="<?= $sub_kategori['nama_sub']; ?>"><?= $sub_kategori['nama_sub']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('sub_kategori'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2 font-weight-bold ml-3">Tag Blog</div>
                            <div class="col-sm-9 checkbox">
                                <?php foreach ($tag as $tag) : ?>
                                    <div class="form-check mb-2 d-inline mr-4">
                                        <input class="form-check-input input-checkbox" type="checkbox" id="gridCheck1" name="tag[]" value="<?= $tag['nama_tag']; ?>">
                                        <label class="form-check-label" for="gridCheck1">
                                            <?= $tag['nama_tag']; ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Materi Blog</label>
                            <textarea class="form-control text<?= ($validation->getError('materi')) ? ' is-invalid' : ''; ?>" id="exampleFormControlTextarea1" name="materi" value=""><?= old('materi'); ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('materi'); ?>
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