<?php 

// jalankan SESSION
session_start();
// akhir
// cek apakah user sudah login atau belum
  if( !isset($_SESSION['adminLogin']) ) {
    header("Location: login.php");
  exit;
  }

 //hubungkan halaman ini ke halaman header.php  
require "templates/header.php";

// cek apakah tombol registrasi sudah ditekan 
if(isset($_POST['registrasi']))
{
  if( registrasiTeknisi($_POST) > 0) 
  {
    echo "
        <script>
          alert('Registrasi berhasil, SILAHKAN LOGIN!');
          document.location.href = 'index.php';
        </script>
      ";
  }else 
  {
    echo "
        <script>
          alert('Registrasi GAGAL!');
          document.location.href = 'registrasiTeknisi.php';
        </script>
      ";
  }
}



?>
<!-- begin content -->
<div class="container-fluid">
	
	<!-- page heading -->
	 <h1 class="h3 mb-5 text-gray-800 mt-3">Registrasi Teknisi</h1>
  <hr>
  <div class="container">
  	<div class="row">
  		<div class="col-sm">
        <?php if( isset($errorPassword) ) : ?>
          <div class="alert alert-danger" role="alert">
            <?= $errorPassword; ?>
          </div>
        <?php endif; ?>
  			<form action="" method="post" enctype="multipart/form-data" class="mb-5">
  				<div class="form-group col-sm-8">
		            <label for="nama">Nama Teknisi</label>
		            <input type="text" class="form-control" name="nama" id="nama">
		        </div>
		        <div class="form-group col-sm-2">
		            <label for="jenisKelamin">Jenis Kelamin</label>
		            <select class="form-control" name="jenisKelamin">
		            	<option value="laki - laki">Laki - laki</option>
		            	<option value="Perempuan">Perempuan</option>
		            </select>
		        </div>
		        <div class="form-group col-sm-4">
		            <label for="nip">NIP / NIK</label>
		            <input type="text" class="form-control" name="nip" id="nip">
		        </div>
            <div class="form-group col-sm-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="form-group col-sm-4">
                <label for="konfirmasiPassword">Konfirmasi Password</label>
                <input type="password" class="form-control" name="konfirmasiPassword" id="konfirmasiPassword">
            </div>
                <input type="checkbox" name="showPassword" id="showPassword">
                <label for="showPassword" style="font-size: 14px; color: red;">show password</label>
		        <div class="form-group col-sm-5 mt-3">
		            <label for="foto">Upload Foto</label>
		            <input type="file" class="form-control" name="gambar" id="foto">
		        </div>
		        <div class="col-sm-4">
			        <button class="btn btn-primary mr-4" name="registrasi" type="submit">Registrasi</button>
			        <a href="index.php" class="btn btn-danger">batal</a>
		        </div>
  			</form>
  		</div>
  	</div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#showPassword').click(function(){
      $('#password').attr('type', 'text');
      $('#konfirmasiPassword').attr('type', 'text');
    })
  });
</script>
