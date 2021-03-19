<?= $this->extend('templates/v_super'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Admin</h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="card shadow mb-4">
        <div class="blog-header">
            <a href="/add_admin">Add Admin</a>
        </div>
    </div>

    <div class="card shadow">
        <div class="data-blog table-responsive">
            <table class="table table-bordered table-striped table-hover mb-0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" width="200px">Nama</th>
                        <th scope="col">Tipe Admin</th>
                        <th scope="col">Photo Profile</th>
                        <th scope="col" width="200px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($admin as $admin) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $admin['nama']; ?></td>
                            <td><?= $admin['tipe_admin']; ?></td>
                            <td><img src="/assets/img/admin/<?= $admin['foto']; ?>" alt="<?= $admin['foto']; ?>" class="img-thumbnail show-thumbnail myImg"></td>
                            <!-- The Modal -->
                            <div id="myModal" class="modal">
                                <span class="close">&times;</span>
                                <img class="modal-content" id="img01">
                                <div id="caption"></div>
                            </div>
                            <td>
                                <a href="/update_admin/<?= $admin['id']; ?>" class=" btn bg-warning"></a>
                                <form action="/admin/<?= $admin['id']; ?>" method="post" class="d-inline">
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