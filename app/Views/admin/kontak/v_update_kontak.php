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
                    <h6 class="m-0 font-weight-bold text-primary">Update Kontak</h6>
                </div>
                <div class="card-body add-blog">
                    <form action="/kontak/update/<?= $kontak['id']; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-row">
                            <?php
                            $data_hari = $kontak['hari'];
                            $hari = explode(" ", $data_hari);
                            $data_jam = $kontak['jam'];
                            $jam = explode(" ", $data_jam);
                            ?>
                            <div class="form-group col-md-6">
                                <label for="inputState " class="font-weight-bold">Hari Aktif Mulai :</label>
                                <select id="inputState" class="form-control<?= ($validation->getError('hari1')) ? ' is-invalid'  : ''; ?> rounded" name="hari1">
                                    <option value="<?= (old('hari1')) ? old('hari1') : $hari[0]; ?>" selected hidden><?= (old('hari1')) ? old('hari1') : $hari[0]; ?></option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('hari1'); ?>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState " class="font-weight-bold">Hari Aktif Hingga :</label>
                                <select id="inputState" class="form-control<?= ($validation->getError('hari2')) ? ' is-invalid'  : ''; ?> rounded" name="hari2">
                                    <option value="<?= (old('hari2')) ? old('hari2') : $hari[1]; ?>" selected hidden><?= (old('hari2')) ? old('hari2') : $hari[1]; ?></option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('hari2'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputState " class="font-weight-bold">Jam Masuk</label>
                                <select id="inputState" class="form-control<?= ($validation->getError('jam1')) ? ' is-invalid'  : ''; ?> rounded" name="jam1">
                                    <option value="<?= (old('jam1')) ? old('jam1') : $jam[0]; ?>" selected hidden><?= (old('jam1')) ? old('jam1') : $jam[0]; ?></option>
                                    <?php
                                    for ($i = 0; $i < 24; $i++) :
                                    ?>
                                        <option value="<?= $i . '.00'; ?>"><?= $i . '.00'; ?></option>
                                    <?php endfor; ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('jam1'); ?>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState " class="font-weight-bold">Jam Pulang</label>
                                <select id="inputState" class="form-control<?= ($validation->getError('jam2')) ? ' is-invalid'  : ''; ?> rounded" name="jam2">
                                    <option value="<?= (old('jam2')) ? old('jam2') : $jam[1]; ?>" selected hidden><?= (old('jam2')) ? old('jam2') : $jam[1]; ?></option>
                                    <?php
                                    for ($i = 0; $i < 24; $i++) :
                                    ?>
                                        <option value="<?= $i . '.00'; ?>"><?= $i . '.00'; ?></option>
                                    <?php endfor; ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('jam2'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">No. WA</span>
                            </div>
                            <input type="text" class="form-control<?= ($validation->getError('wa')) ? ' is-invalid'  : ''; ?> rounded-right" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="wa" value="<?= (old('wa')) ? old('wa') : $kontak['wa']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('wa'); ?>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">No. Telp</span>
                            </div>
                            <input type="text" class="form-control<?= ($validation->getError('telpon')) ? ' is-invalid'  : ''; ?> rounded-right" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="telpon" value="<?= (old('telpon')) ? old('telpon') : $kontak['telpon']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('telpon'); ?>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                            </div>
                            <input type="text" class="form-control<?= ($validation->getError('email')) ? ' is-invalid'  : ''; ?> rounded-right" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="email" value="<?= (old('email')) ? old('email') : $kontak['email']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Facebook</span>
                            </div>
                            <input type="text" class="form-control<?= ($validation->getError('facebook')) ? ' is-invalid'  : ''; ?> rounded-right" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="facebook" value="<?= (old('facebook')) ? old('facebook') : $kontak['facebook']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('facebook'); ?>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Instagram</span>
                            </div>
                            <input type="text" class="form-control<?= ($validation->getError('instagram')) ? ' is-invalid'  : ''; ?> rounded-right" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="instagram" value="<?= (old('instagram')) ? old('instagram') : $kontak['instagram']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('instagram'); ?>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Linked In</span>
                            </div>
                            <input type="text" class="form-control<?= ($validation->getError('linkedin')) ? ' is-invalid'  : ''; ?> rounded-right" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="linkedin" value="<?= (old('linkedin')) ? old('linkedin') : $kontak['linkedin']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('linkedin'); ?>
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