<?php

/* Main Function */
require '../functions.php';

/* Submit */
if ( isset($_POST['submit']) ) {

	if ( berita($_POST, $_FILES) > 0 ) {
		$notifikasi = true;
        echo "
        <meta content='2; url=berita.php' http-equiv='refresh'>
        ";
	} else {
		echo "Gagal Upload Berita Gais!";
		header("Refresh:2, url='berita.php'");
		die();
	}

}

/* Edit */
if ( isset($_GET['edit']) ) {
	$data = getAllData('berita', $_GET['edit'])[0];
}

?>

<?php require "templates/header.php"; ?>

<script>
    function preview_image(event) 
    {
        var reader = new FileReader();
        reader.onload = function()
        {
	        var output = document.getElementById('img-cover');
	        output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

<!-- hubungkan ke ckeditor online CDN -->
<!-- <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script> -->


<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- notifiksi sukeses -->
	<?php if( @$notifikasi == true ) : ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-success" role="alert">
              Tambah data <strong>berhasil!</strong>
            </div>
        </div>  
    </div>
    <?php endif; ?>
	<!-- akhir -->

	<!-- Page Heading -->
	<h5 class="mt-4">Form <?= (isset($_GET['edit'])) ? "Ubah" : "Tambah" ?> Data Berita</h5>
	<hr>
	<!-- content -->

	<!-- form tambah -->
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
		    <img src="" alt="" id="img-cover" class="view-img">
		    <br>
		    <label for="foto">Gambar Cover</label>
		    <input type="file" class="form-control col-md-3" name="img-cover" accept="image/*" onchange="preview_image(event)" required>
		    <small id="emailHelp" class="form-text text-muted">*Gambar cover berita (thumbnail)</small>
		</div>
		<div class="form-group">
		    <label for="judul">Judul Berita</label>
		    <input type="text" class="form-control" id="judul" name="judul" value="<?= (isset($data['judul_berita'])) ? $data['judul_berita'] : "" ?>">
		    <small id="emailHelp" class="form-text text-muted">*Judul berita</small>
		</div>
		<div class="form-group">
		    <label for="isi-berita">Isi Berita</label>
		    <textarea class="form-control" id="isi-berita" name="isi-berita"><?= (isset($data['judul_berita'])) ? $data['isi_berita'] : "" ?></textarea>
		    <small id="emailHelp" class="form-text text-muted">*Konten</small>
		</div>
		<div class="button mb-5">
			<button name="submit" type="submit" class="btn btn-primary">Publikasikan</button>
			<a href="berita.php" class="btn btn-danger" onclick="return confirm('Buang perubahan?')">Batal</a>
		</div>
	</form>
</div>

<!-- ckeditor -->
<script type="text/javascript">
	CKEDITOR.replace( 'isi-berita', {
    filebrowserBrowseUrl: 'assets/ckfinder/ckfinder.html',
    filebrowserUploadUrl: 'assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserWindowWidth: '1000',
    filebrowserWindowHeight: '700'
} );
</script>

<!-- <script src="assets/my-js/popper.js"></script> -->


<!-- tambahkan file footer -->
<?php require "templates/footer.php"; ?>