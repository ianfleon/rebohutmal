<?php
// jalankan SESSION
// session_start();
// akhir

// cek apakah user sudah login atau belum
  // if( !isset($_SESSION['adminLogin']) ) {
  //   header("Location: login.php", true, 301);
  // exit();
  // }
  
// hubungkan ke halaman header
require_once "templates/header.php";
// akhir

// hubungkan ke halaman functions
   // require "../functions.php";
// akhir




// menghitung jumlah teknisi yang terdaftar di database
  // $teknisi = query("teknisi");
  // $jumlahTeknisi = mysqli_num_rows($teknisi);

// menghitung jumlah user yang terdaftar di database
  // $user = query("registrasi");
  // $jumlahUser = mysqli_num_rows($user);
  
?>
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800 mt-3">Dashboard</h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>
  <hr>  
  <!-- Content Row -->
  <div class="row">

  <div class="col-sm-1"></div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-sm-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Teknisi</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><!-- <?= $jumlahTeknisi; ?> --></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-user-cog fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-sm-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">User</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><!-- <?= $jumlahUser;?> --></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-users fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

   <!-- Earnings (Monthly) Card Example -->
   <div class="col-xl-3 col-sm-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengaduan Hari ini</div>
            <div class="row no-gutters align-items-center">
              <div class="col-auto">
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">10000</div>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-envelope fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
</div>
