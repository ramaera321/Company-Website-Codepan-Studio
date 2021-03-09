<?= $this->extend('templates/v_super'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add New Logo</h6>
        </div>
        <div class="card-body add-blog px-4 tambah-admin">
            <form action="/logo/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="input-group mb-3 data-captcha">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Gambar Logo</span>
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
                        <th scope="col">Gambar Logo</th>
                        <th scope="col" width="200px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($logo as $logo) :
                    ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $logo['foto']; ?></td>
                            <td>
                                <a href="/logo/UpdateCaptcha/<?= $logo['id']; ?>" class=" btn bg-warning"></a>
                                <form action="/logo/<?= $logo['id']; ?>" method="post" class="d-inline">
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