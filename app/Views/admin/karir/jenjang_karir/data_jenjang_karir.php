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
    <div class="card shadow mb-4">
        <div class="blog-header">
            <a href="/add_jenjang_karir">Add Jenjang Karir</a>
        </div>
    </div>

    <div class="card shadow">
        <div class="data-blog table-responsive">
            <table class="table table-bordered table-striped table-hover mb-0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Jenjang Karir</th>
                        <th scope="col" width="200px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($jenjang_karir as $jk) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $jk['karir']; ?></td>
                            <td>
                                <a href="/update_jenjang_karir/<?= $jk['id']; ?>" class="btn bg-warning"></a>
                                <form action="/jenjang_karir/<?= $jk['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus data ini ?')"></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <!-- <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>Jacob</td>
                        <td>
                            <a href="/update_karir" class="bg-warning"></a>
                            <a href="" class="bg-danger ml-2"></a>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endSection(); ?>