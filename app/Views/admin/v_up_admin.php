<?= $this->extend('templates/v_super'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- update admin -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">

        <div class="col-sm-12">

            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Update Admin</h6>
                </div>
                <div class="card-body add-blog px-4 tambah-admin">
                    <form action="/admin/up/<?= $id; ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="input-group mb-3">
                            <input type="hidden" name="id" value="<?= $id; ?>">
                            <input type="hidden" name="fotoLama" value="<?= $foto; ?>">
                            <input type="hidden" name="tipe_admin" value="<?= $tipe_admin; ?>">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-left" id="basic-addon1">Nama</span>
                            </div>
                            <input type="text" class="rounded-right form-control<?= ($validation->hasError('nama')) ? ' is-invalid' : ''; ?>" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="nama" value="<?= (old('nama')) ? old('nama') : $nama; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Email</span>
                            </div>
                            <input type="text" class="rounded-right form-control<?= ($validation->hasError('email')) ? ' is-invalid' : ''; ?>" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="email" value="<?= (old('email')) ? old('email') : $email; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Password Baru</span>
                            </div>
                            <input type="text" class="rounded-right form-control<?= ($validation->hasError('password')) ? ' is-invalid' : ''; ?>" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="password" value="<?= old('password') ?>">
                            <input type="hidden" name="passwordLama" value="<?= $password; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                        </div>

                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload Foto</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input<?= ($validation->hasError('foto')) ? ' is-invalid' : ''; ?>" id="foto" aria-describedby="inputGroupFileAddon01" name="foto" onchange="previewImage()" value="<?= (old('foto')) ? old('foto') : $foto; ?>">
                                <div class="invalid-feedback invalid-foto">
                                    <?= $validation->getError('foto'); ?>
                                </div>
                                <label class="custom-file-label" for="inputGroupFile01"><?= (old('foto')) ? old('foto') : $foto; ?></label>
                            </div>
                        </div>
                        <small id="passwordHelpBlock" class="form-text text-muted ml-3">
                            <li>ukuran gambar maksimal 1 mb.</li>
                        </small>
                        <div class="col-sm-2 mt-2">
                            <img src="/assets/img/admin/<?= $foto; ?>" alt="" class="img-thumbnail img-preview">
                        </div>


                        <input type="submit" value="Update" class="submit btn-save">
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