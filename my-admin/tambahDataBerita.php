<?php  
// tambahkan file header
require "templates/header.php";
?>

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
		    <input type="file" class="form-control col-md-3" id="foto">
		    <small id="emailHelp" class="form-text text-muted">*tanggal penulisan berita</small>
		</div>
		<div class="form-group">
		    <label for="Tanggal">Tanggal</label>
		    <input type="date" class="form-control col-md-2" id="Tanggal">
		    <small id="emailHelp" class="form-text text-muted">*tanggal penulisan berita</small>
		</div>
		<div class="form-group">
		    <label for="judul">Judul berita</label>
		    <input type="text" class="form-control" id="judul">
		    <small id="emailHelp" class="form-text text-muted">*judul berita</small>
		</div>
		<div class="form-group">
		    <label for="judul">Isi berita</label>
		    <textarea class="form-control" id="isiBerita">
		    </textarea>
		    <small id="emailHelp" class="form-text text-muted">*isi berita</small>
		</div>
		<div class="button mb-5">
			<button name="submit" type="submit" class="btn btn-primary">Publikasikan</button>
			<a href="berita.php" class="btn btn-danger" onclick="return confirm('buang perubahan?')">Batal</a>
		</div>
	</form>
</div>

<!-- ckeditor -->
<script type="text/javascript">
	CKEDITOR.replace( 'isiBerita', {
    filebrowserBrowseUrl: 'assets/ckfinder/ckfinder.html',
    filebrowserUploadUrl: 'assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserWindowWidth: '1000',
    filebrowserWindowHeight: '700'
} );
</script>
<!-- tambahkan file footer -->
<?php require "templates/footer.php"; ?>