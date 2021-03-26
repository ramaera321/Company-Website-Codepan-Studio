<?= $this->extend('templates/v_super_user'); ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="/assets/css/blog.css">
<link rel="stylesheet" href="/assets/css/responsive.css">
<?= $this->endSection(); ?>

<?= $this->section('content_user'); ?>
<!-- List Blog -->
<div id="mt" class="list-blog">
    <div class="container">
        <!-- Container Judul Blog -->
        <div class="container-judul text-center">
            <h1>BLOG</h1>
            <p>Explorasi gagasan, narasi, dan inovasi dalam teknologi informasi</p>
        </div>
        <!-- End of Container Judul Blog -->

        <!-- Container Blog -->
        <div class="container-blog">
            <div class="list-wrapper row">
                <?php
                foreach ($blog as $blog) :
                ?>
                    <!-- Card Blog 1 -->
                    <div class="list-item col-lg-4 col-md-6 margin-blog" data-aos="fade-up">
                        <div class="card hvr-underline-from-left">
                            <a href="./blog_content.php">
                                <img src="/assets/img/blog/<?= $blog['foto']; ?>" class="card-img-top hvr-bob" alt="...">
                                <div class="card-body">
                                    <p class="sub-judul"><?= $blog['kategori']; ?> • <?= $blog['sub_kategori']; ?></p>
                                    <h5 class="card-title"><?= $blog['judul']; ?></h5>
                                    <p class="card-text"><?= $blog['describ']; ?></p>
                                    <p class="card-penulis">by <?= $blog['penulis']; ?></p>
                                    <?php
                                    $timestamp = strtotime($blog['created_at']);
                                    $tanggal = date('d/m/Y', $timestamp)
                                    ?>
                                    <p class="card-tanggal"><?= $tanggal; ?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>

                <div id="pagination-container"></div>
            </div>
            <!-- End of Container Blog -->

            <!-- Pagination -->
            <nav class="pagination-bar" aria-label="...">
                <ul class="pagination justify-content-center">
                    <li class="page-item hvr-icon-wobble-horizontal">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="fa fa-arrow-left hvr-icon"></i></span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">2</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item hvr-icon-wobble-horizontal">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="fa fa-arrow-right hvr-icon"></i></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#2926A9" fill-opacity="1" d="M0,192L34.3,176C68.6,160,137,128,206,138.7C274.3,149,343,203,411,192C480,181,549,107,617,80C685.7,53,754,75,823,106.7C891.4,139,960,181,1029,208C1097.1,235,1166,245,1234,240C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
    </svg>
    <!-- End of Isi Blog -->
    <?= $this->endSection(); ?>