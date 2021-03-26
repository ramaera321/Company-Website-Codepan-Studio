<?= $this->extend('templates/v_super'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Komentar</h1>

    <div class="row">

        <div class="col-sm-12">

            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Komentar</h6>
                </div>
                <div class="card-body add-blog blog-form">
                    <form action="/komentar/save" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id_admin" value="<?= session()->get('id'); ?>">
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

                        <input type="submit" value="Create" class="submit btn-save">
                        <a href="/data_komentar" class="btn btn-danger back btn-back">Back</a>
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