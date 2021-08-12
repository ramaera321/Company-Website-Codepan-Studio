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
                    <h6 class="m-0 font-weight-bold text-primary">Add New Jenjang Karir</h6>
                </div>
                <div class="card-body add-blog">
                    <form action="/jenjangkarir/update/<?= $jenjang_karir['id'] ?>" method="get">
                        <?= csrf_field(); ?>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 125px;">Jenjang Karir</span>
                            </div>
                            <input type="text" class="form-control rounded-right<?= ($validation->getError('jenjang_karir')) ? ' is-invalid' : ''; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="jenjang_karir" value="<?= (old('jenjang_karir')) ? old('jenjang_karir') : $jenjang_karir['karir']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('jenjang_karir'); ?>
                            </div>
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