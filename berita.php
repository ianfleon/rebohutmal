<?php  

require "functions.php"; // Main Function

// jika tidak ada id
if (!isset($_GET['p'])) {
    header('Location: index.php');
}

$id = $_GET['p']; // id

$data = my_query_get("SELECT * FROM berita WHERE id = '$id'")[0]; // data berita

// jika data tidak ditemukan
if (!$data) {
	header('Location: index.php');
}


?>

<!-- Header -->
<?php require_once 'templates/header.php' ?>

<!-- Berita -->
<div class="container mt-5 mb-5">
	<div class="col-md-8 m-auto">
		<div class="card berita-card">
		  <div class="card-body">
		    <h4 class="card-title"><?= $data['judul_berita'] ?></h4>
		    <p class="text-muted">Diupload pada tanggal: <?= minify_date($data['waktu_post']) ?></p>
		    <img src="assets/thumbnails/<?= $data['cover_berita'] ?>" class="card-img-top m-auto mb-3">
		    <div class="card-text">
		    	<?= $data['isi_berita'] ?>
		    </div>
		  </div>
		</div>
	</div>
</div>

<!-- Footer -->
<?php require_once 'templates/footer.php' ?>