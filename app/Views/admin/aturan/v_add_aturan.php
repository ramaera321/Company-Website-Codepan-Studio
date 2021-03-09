<?= $this->extend('templates/v_super'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <div class="row">

        <div class="col-sm-12">

            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Aturan Baru</h6>
                </div>
                <div class="card-body add-blog">
                    <form action="/pasal/save" method="post">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Pasal</label>
                            </div>
                            <select class="custom-select<?= ($validation->getError('pasal')) ? ' is-invalid' : ''; ?>" id="inputGroupSelect01" name="pasal">
                                <option value="<?= (old('pasal')) ? old('pasal') : ''; ?>" selected hidden><?= (old('pasal')) ? old('pasal') : 'Choose...'; ?></option>
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
                            <input type="text" class="rounded-right form-control<?= ($validation->hasError('judul')) ? ' is-invalid' : ''; ?>" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="judul" value="<?= old('judul'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('judul'); ?>
                            </div>
                        </div>

                        <input type="submit" value="Create" class="submit btn-save">
                    </form>
                </div>
            </div>

            <div class="card shadow">
                <div class="data-blog table-responsive">
                    <table class="table table-bordered table-striped table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Pasal</th>
                                <th scope="col">Judul Pasal</th>
                                <th scope="col" width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($pasal as $pasal) :
                            ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $pasal['pasal']; ?></td>
                                    <td><?= $pasal['judul']; ?></td>
                                    <td>
                                        <a href="/update_pasal/<?= $pasal['id']; ?>" class="btn bg-warning"></a>
                                        <form action="/pasal/<?= $pasal['id']; ?>" method="post" class="d-inline">
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
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endSection(); ?>