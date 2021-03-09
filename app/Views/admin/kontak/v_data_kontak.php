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
            <a href="/add_kontak">Add Kontak</a>
        </div>
    </div>

    <div class="card shadow">
        <div class="data-blog table-responsive">
            <table class="table table-bordered table-striped table-hover mb-0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Hari</th>
                        <th scope="col">Jam</th>
                        <th scope="col">No. Telp</th>
                        <th scope="col">Email</th>
                        <th scope="col">Facebook</th>
                        <th scope="col" width="200px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($kontak as $kontak) :
                        $data_hari = $kontak['hari'];
                        $hari_kerja = explode(" ", $data_hari);
                        $data_jam = $kontak['jam'];
                        $jam_kerja = explode(" ", $data_jam);
                    ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?php for ($j = 0; $j < count($hari_kerja); $j++) : ?>
                                    <?= ($j < 1) ? $hari_kerja[$j] . ' - ' : $hari_kerja[$j] . ''; ?>
                                <?php endfor; ?></td>
                            <td><?php for ($j = 0; $j < count($jam_kerja); $j++) : ?>
                                    <?= ($j < 1) ? $jam_kerja[$j] . ' - ' : $jam_kerja[$j] . ''; ?>
                                <?php endfor; ?></td>
                            <td><?= $kontak['telpon']; ?></td>
                            <td><?= $kontak['email']; ?></td>
                            <td><?= $kontak['facebook']; ?></td>
                            <td>
                                <a href="/update_kontak/<?= $kontak['id']; ?>" class="btn bg-warning"></a>
                                <form action="/kontak/<?= $kontak['id']; ?>" method="post" class="d-inline">
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