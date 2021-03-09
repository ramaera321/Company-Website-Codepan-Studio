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
                    <h6 class="m-0 font-weight-bold text-primary">Update Sub Kategori</h6>
                </div>
                <div class="card-body add-blog px-4 tambah-admin">
                    <form action="/sub/update/<?= $sub_kategori['id']; ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $sub_kategori['id']; ?>">
                        <div class="input-group mb-3 cabang">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Sub Kategori</span>
                            </div>
                            <input type="text" class="rounded-right form-control<?= ($validation->hasError('nama_sub')) ? ' is-invalid' : ''; ?>" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="nama_sub" value="<?= (old('nama_sub')) ? old('nama_sub') : $sub_kategori['nama_sub']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_sub'); ?>
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