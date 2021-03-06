<?= $this->extend('templates/v_super'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add New Captcha</h6>
        </div>
        <div class="card-body add-blog px-4 tambah-admin">
            <form action="/captcha/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="input-group mb-3 data-captcha">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Deskripsi</span>
                    </div>
                    <input type="text" class="rounded-right form-control<?= ($validation->hasError('deskripsi')) ? ' is-invalid' : ''; ?>" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="deskripsi" value="<?= old('deskripsi'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('deskripsi'); ?>
                    </div>
                </div>

                <div class="input-group mb-3 data-captcha">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Gambar Captcha</span>
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

    <div class="card shadow mb-3">
        <div class="data-blog table-responsive">
            <table class="table table-bordered table-striped table-hover mb-0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Gambar Captcha</th>
                        <th scope="col" width="200px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($captcha as $captcha) :
                    ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $captcha['deskripsi']; ?></td>
                            <td><?= $captcha['foto']; ?></td>
                            <td>
                                <a href="/captcha/UpdateCaptcha/<?= $captcha['id']; ?>" class=" btn bg-warning"></a>
                                <form action="/captcha/<?= $captcha['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus data ini ?')"></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endSection(); ?>