<?= $this->extend('templates/v_super'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Komentar</h1>
    <?php

    use App\Models\AdminModel;

    if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <div class="card shadow mb-4">
        <div class="blog-header">
            <a href="/add_komentar">Add Komentar</a>
        </div>
    </div>

    <div class="card shadow">
        <div class="data-blog table-responsive">
            <table class="table table-bordered table-striped table-hover mb-0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Perusahaan</th>
                        <th scope="col">Komentar</th>
                        <th scope="col" width="200px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    ?>
                    <?php foreach ($komentar as $komentar) : ?>
                        <tr>
                            <?php
                            $id_admin = $komentar['id_admin'];
                            $admin = $adminData->where(['id' => $id_admin])->first();
                            ?>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= ucwords($admin['nama']); ?></td>
                            <td><?= $komentar['jabatan']; ?></td>
                            <td><?= $komentar['perusahaan']; ?></td>
                            <td><?= $komentar['komentar']; ?></td>
                            <td>
                                <a href="/update_komentar/<?= $komentar['id']; ?>" class="bg-warning btn"></a>
                                <form action="/komentar/<?= $komentar['id']; ?>" method="post" class="d-inline">
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