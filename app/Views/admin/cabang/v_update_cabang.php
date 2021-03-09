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
                    <h6 class="m-0 font-weight-bold text-primary">Update New Admin</h6>
                </div>
                <div class="card-body add-blog px-4 tambah-admin">
                    <form action="/cabang/update/<?= $cabang['id']; ?>" method="post">
                        <input type="hidden" name="id" value="<?= $cabang['id']; ?>">
                        <?= csrf_field(); ?>
                        <div class="input-group mb-3 cabang">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Lokasi Cabang</span>
                            </div>
                            <input type="text" class="rounded-right form-control<?= ($validation->hasError('nama')) ? ' is-invalid' : ''; ?>" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="nama" value="<?= (old('nama')) ? old('nama') : $cabang['nama']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
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