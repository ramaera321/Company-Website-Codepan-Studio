<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul; ?></title>

    <!-- Font CSS From Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        rel="https://cdn.rawgit.com/mfd/f3d96ec7f0e8f034cc22ea73b3797b59/raw/856f1dbb8d807aabceb80b6d4f94b464df461b3e/gotham.css">

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Line Awesome CSS From https://icons8.com/line-awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet"
        media="all">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- Hover Effect CSS -->
    <link rel="stylesheet" href="/assets/css/hover-min.css">
    <!-- Header Effect CSS -->
    <link rel="stylesheet" href="/assets/css/headerEffect/style.css">
    <link rel="stylesheet" href="/assets/css/headerEffect/reset.css">

    <!-- Owl Carousel CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Animate on Scroll CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Costum CSS -->
    <link rel="stylesheet" href="/assets/css/style_user.css">
    <?= $this->renderSection('style'); ?>
</head>

<body>
    <?= $this->include('layout/header'); ?>

    <!-- Fixed Button WA -->
    <a href="" class="wa-button hvr-icon-pop">
        <i class="fab fa-whatsapp hvr-icon"></i>
        <p>Silahkan Konsultasi di Nomor Whatsapp Kami</p>
    </a>
    <!-- End Fixed Button WA -->

    <?= $this->renderSection('content_user'); ?>

    <?= $this->include('layout/footer'); ?>

    <!-- Contact -->
    <div class="contact" data-aos="fade-left">
        <p>Alamat : Jl. Sidosermo VI No.7, Sidosermo, Kec. Wonocolo, Kota SBY, Jawa Timur 60285 </p>
        <p>Telepon: <a href="tel:+620318437588" class="hvr-underline-from-left">(031) 8437588</a> | Email: <a
                href="mailto:info@codepanstudio.com" class="hvr-underline-from-left"
                target="_blank">info@codepanstudio.com</a> | GMAPS : <a href="https://bit.ly/GMAPSCodepanStudio"
                class="hvr-underline-from-left" target="_blank">https://bit.ly/GMAPSCodepanStudio</a> </p>
    </div>
    <!-- End of Contact -->

    <!-- Copyright -->
    <div class="copyright text-center">
        <p>Copyright © 2021 CV. Arindra Production</p>
    </div>
    </div>
    </footer>

    <!-- Boostrap Bundle CSS include JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>

    <!-- Owl Caousel .js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
        integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
        crossorigin="anonymous"></script>

    <!-- Header Effect .js -->
    <script src="/assets/js/headerEffect/main.js"></script>
    <script src="/assets/js/headerEffect/modernizr.js"></script>

    <!-- Lottie Js -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@0.5.1/dist/lottie-player.js"></script>

    <!-- Animate on Scroll .js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Costum Main.js -->
    <script type="text/javascript" src="/assets/js/user_script.js"></script>
</body>

</html>