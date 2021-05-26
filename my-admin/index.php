<?php

/* Main Function */
require_once '../functions.php';

/* Data Kontak */
date_default_timezone_set("Asia/Tokyo"); // set zona waktu
$tanggal = date("Y-m-d"); // tanggal hari ini
// echo $tanggal;

// ambil data berdasarkan hari ini
$kontak = my_query_get("SELECT * FROM kontak WHERE tanggal = '$tanggal'");

$total = count($kontak); // menghitung total data yang didapat

?>

<?php require_once 'templates/header.php' ?>

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h5 class="mt-4">Dashboard</h5>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>
  <hr>  
  <!-- Content Row -->
  <div class="row">

  <div class="col-sm-1"></div>

   <!-- Earnings (Monthly) Card Example -->
   <div class="col-xl-3 col-sm-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengaduan Hari ini</div>
            <div class="row no-gutters align-items-center">
              <div class="col-auto">
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $total ?></div>
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

<?php require_once 'templates/footer.php' ?>