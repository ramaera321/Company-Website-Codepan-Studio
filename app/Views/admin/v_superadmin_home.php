<?= $this->extend('templates/v_super'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- add admin -->
    <h1 class="h3 mb-4 text-gray-800">Admin</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Admin Profile</h6>
        </div>
        <div class="data-blog pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 profile">
                        <div class="border-profile">
                            <div class="img-profile" style="background-image: url('assets/img/avatar.jpg'); background-size: 100% 100%;">
                                <!-- <img src="assets/img/avatar.jpg" alt=""> -->
                            </div>
                            <div class="add">
                                <form action="" method="post"><input type="file" name="ft-profile" id="ft-profile"></form>
                            </div>
                        </div>
                        <p>Douglas McGee</p>
                    </div>
                    <div class="col-sm-7 update-admin">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-sm-5">
                                    <input type="text" name="fname" id="" placeholder="nama depan">
                                    <input type="email" name="email" id="" placeholder="email">
                                    <input type="text" name="telp" id="" placeholder="no. telpon">
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" name="lname" id="" placeholder="nama belakang">
                                    <input type="password" name="pass" id="" placeholder="password">
                                    <input type="password" name="pass_conf" id="" placeholder="password konfirmasi">
                                </div>
                                <div class="col-sm-10">
                                    <input type="submit" value="Update">
                                </div>
                            </div>
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