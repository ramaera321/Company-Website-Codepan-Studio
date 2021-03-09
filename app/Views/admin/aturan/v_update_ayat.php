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
                    <h6 class="m-0 font-weight-bold text-primary">Update Aturan</h6>
                </div>
                <div class="card-body add-blog">
                    <form action="/pasal/update/<?= $ayat['id']; ?>" method="post">
                        <input type="hidden" name="id" value="<?= $ayat['id']; ?>">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Pasal</label>
                            </div>
                            <select class="custom-select<?= ($validation->getError('pasal')) ? ' is-invalid' : ''; ?>" id="inputGroupSelect01" name="pasal">
                                <option value="<?= (old('pasal')) ? old('pasal') : $ayat['pasal']; ?>" selected hidden><?= (old('pasal')) ? old('pasal') : $ayat['pasal']; ?></option>
                                <option value="Pasal 1">Pasal 1</option>
                                <option value="Pasal 2">Pasal 2</option>
                                <option value="Pasal 3">Pasal 3</option>
                                <option value="Pasal 4">Pasal 4</option>
                                <option value="Pasal 5">Pasal 5</option>
                                <option value="Pasal 6">Pasal 6</option>
                                <option value="Pasal 7">Pasal 7</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('pasal'); ?>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Judul Pasal</span>
                            </div>
                            <input type="text" class="rounded-right form-control<?= ($validation->hasError('judul')) ? ' is-invalid' : ''; ?>" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="judul" value="<?= (old('judul')) ? old('judul') : $ayat['judul_ayat']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('judul'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="font-weight-bold">Deskripsi</label>
                            <textarea class="form-control text<?= ($validation->getError('deskripsi')) ? ' is-invalid' : ''; ?>" id="exampleFormControlTextarea1" name="deskripsi" value=""><?= (old('deskripsi')) ? old('deskripsi') : $ayat['deskripsi']; ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('deskripsi'); ?>
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