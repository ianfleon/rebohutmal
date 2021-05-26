<?php

require_once 'functions.php';

$berita = my_query_get("SELECT * FROM berita");

?>

<!-- Header -->
<?php require_once 'templates/header_index.php' ?>

    <!-- Slogan -->
    <div class="container position-relative slogan">
        <div class="row">
            <div class="col-md-6 offset-md-1 mt-5">
                <h2>Jagalah Hutan seperti menjaga Jantungmu sendiri.</h2>
            </div>
            <div class="col-md-5 mt-5">
                <p>Hutan Indonesia kini menjadi bahan pembantaian oleh mereka yang ingin mendapat keuntungan sepihak.</p>
            </div>
        </div>
    </div>

</div>

<!-- Berita -->
<div class="container mt-5">

    <div class="row text-center mb-5">
        <h4>Berita Terbaru</h4>
    </div>

    <div class="row">

        <!-- Tampilkan data berita -->
        <?php foreach ($berita as $b) : ?>
        <div class="col-md-4 mb-5">
            <div class="card">
                <img src="assets/<?= ($b['cover_berita'] != "") ? "thumbnails/".$b['cover_berita'] : "img/no-image.jpg" ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="berita.php?p=<?= $b['id'] ?>" class="card-title">
                        <?= substr($b['judul_berita'], 0, 50) . "..." ?>
                    </a>
                    <p class="card-text">
                        <?= substr($b['isi_berita'], 0, 95) . ".." ?>
                    </p>
                </div>
            </div>
        </div>
        <?php endforeach ?>

    </div>

    <div class="row mb-5 text-center">
        <div class="col-md-12">
            <button class="btn btn-success">Lainnya</button>
        </div>
    </div>
</div>

<script src="script.js"></script>

<!-- Footer -->
<?php require_once 'templates/footer.php' ?>