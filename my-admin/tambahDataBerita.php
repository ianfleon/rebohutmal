<?php

if (isset($_POST['submit'])) {
	var_dump($_POST);
	var_dump($_FILES);
	die();
}

?>

<?php require "templates/header.php"; ?>

<!-- hubungkan ke ckeditor online CDN -->
<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h6 class="h3 mb-4 text-gray-800 mt-3">Form Tambah Data</h6>
	<hr>
	<!-- content -->

	<!-- form tambah -->
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
		    <label for="foto">Foto</label>
		    <input type="file" class="form-control col-md-3" id="foto" name="img-cover">
		    <small id="emailHelp" class="form-text text-muted">*Gambar cover berita (thumbnail).</small>
		</div>
		<div class="form-group">
		    <label for="tanggal">Tanggal</label>
		    <input type="date" class="form-control col-md-2" id="tanggal" name="tanggal">
		    <small id="emailHelp" class="form-text text-muted">*Tanggal penulisan berita.</small>
		</div>
		<div class="form-group">
		    <label for="judul">Judul berita</label>
		    <input type="text" class="form-control" id="judul" name="judul">
		    <small id="emailHelp" class="form-text text-muted">*Judul berita</small>
		</div>
		<div class="form-group">
		    <label for="isi-berita">Isi berita</label>
		    <textarea class="form-control" id="isi-berita" name="isi-berita"></textarea>
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

<!-- tambahkan file footer -->
<?php require "templates/footer.php"; ?>