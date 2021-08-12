<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $judul; ?></title>

    <!-- Font CSS From Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="https://cdn.rawgit.com/mfd/f3d96ec7f0e8f034cc22ea73b3797b59/raw/856f1dbb8d807aabceb80b6d4f94b464df461b3e/gotham.css">

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Line Awesome CSS From https://icons8.com/line-awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- Costum CSS -->
    <link rel="stylesheet" href="/assets/css/style_user.css">
    <?= $this->renderSection('style'); ?>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i'); ?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?= ($tipe_admin == 'Admin') ? $this->include('layout/v_sidebar_admin') : $this->include('layout/v_sidebar'); ?>
        <!-- End Sidebar -->
        <!-- Topbar -->
        <?= $this->include('layout/v_topbar'); ?>
        <!-- End Topbar -->
        <!-- Content di sini -->
        <?= $this->renderSection('content'); ?>

        <!-- Footer -->
        <?= $this->include('layout/v_footer'); ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" style="z-index: 2000;" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/login/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->

    <script src="<?= base_url('https://code.jquery.com/jquery-3.5.1.slim.min.js'); ?>"></script>
    <script src="<?= base_url('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->


    <!-- Lottie Js -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@0.5.1/dist/lottie-player.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>
    <script src="https://kit.fontawesome.com/46f670f20d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>
    <script src="<?= base_url('assets/js/script.js'); ?>"></script>
    <script>
        function previewImage() {
            const foto = document.querySelector('#foto');
            const fotoLabel = document.querySelector('.custom-file-label');
            const imgPreview = document.querySelector('.img-preview');

            fotoLabel.textContent = foto.files[0].name;

            const fileFoto = new FileReader();
            fileFoto.readAsDataURL(foto.files[0]);

            fileFoto.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
        ClassicEditor
            .create(document.querySelector('#exampleFormControlTextarea1'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#exampleFormControlTextarea2'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#exampleFormControlTextarea3'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#exampleFormControlTextarea4'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>