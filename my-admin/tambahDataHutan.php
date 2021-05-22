<?php  

// jalankan SESSION
// session_start();
// // akhir
// // cek apakah user sudah login atau belum
//   if( !isset($_SESSION['adminLogin']) ) {
//     header("Location: login.php");
//   exit;
//   }

// tambahkan halaman header.php
require "templates/header.php";
// akhir

// tambahkan halaman functions.php
require "../functions.php";
// akhir


// ambil data pengumuman
// $result = getDataFromTabel('pengumuman');

// cek apakah tombol submit sudah ditekan atau belum
// if( isset($_POST['submit']) )
// {
//   $pengumuman = pengumuman($_POST);
//   if( $pengumuman > 0) 
//   {
//     echo "
//       <script>
//         alert('pengumuman TERKIRIM!');
//         document.location.href = 'pengumuman.php';
//       </script>
//     ";
//   }
// }


?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h5 class="mt-3">Tambah Data Hutan</h5>
  <hr>
  <div class="card mt-3">
    <div class="card-header">
      Form Tambah Data
    </div>
    <div class="card-body">
      <form>
        <div class="form-group">
          <label for="namaHutan">Nama hutan</label>
          <input type="text" class="form-control" id="namaHutan" name="namaHutan">
          <small id="emailHelp" class="form-text text-muted">*wajib diisi.</small>
        </div>
        <div class="form-group">
          <label for="link">Link hutan lindung</label>
          <input type="text" class="form-control" id="link" name="link">
          <small id="emailHelp" class="form-text text-muted">*link maps hutan.</small>
        </div>
        <div class="form-group">
          <label for="info">Informasi hutan lindung</label>
          <input type="text" class="form-control" id="info" name="info">
          <small id="emailHelp" class="form-text text-muted">*wajib diisi.</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

<?php require_once 'templates/footer.php'; ?>