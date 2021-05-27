<?php

$title = $_SERVER['REQUEST_URI'];
$title = explode('/', $title);
$title = $title[count($title) - 1];

if ($title == 'Index' || $title == '') {
    $title = "Beranda";
} else {
    $title = substr($title, 0, strpos($title, '.php'));
    $title[0] = strtoupper($title);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title><?= $title ?> | Admin Rebohutmal</title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- Custom fonts for this template-->
<link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="assets/vendor/css/sb-admin-2.min.css" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

<!-- Bootstrap JS -->
<script type="text/javascript" src="assets/my-js/jquery.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

<style>
  .view-img {
    width: 100px;
    height: 100px;
    object-fit: cover;
  }

  ul, li {
    padding: 0 .5rem;
    margin: 0;
  }

</style>
  
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/rebohutmal">
        <div class="sidebar-brand-text mx-3">Rebohutmal</div>
      </a>

      <!-- garis horizontal -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <!-- garis horizontal -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
      <!-- Nav Item -  -->
      <li class="nav-item">
        <a class="nav-link" href="lokasi.php">
          <i class="fas fa-map-signs"></i>
          <span>Lokasi</span>
        </a>
      </li>
      <!-- garis horizontal -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Nav Item -  -->
      <li class="nav-item">
        <a class="nav-link" href="reboisasi.php">
         <i class="fas fa-tree"></i> 
          <span>Reboisasi</span>
        </a>
      </li>
      <!-- garis horizontal -->
      <hr class="sidebar-divider d-none d-md-block">
      <li class="nav-item">
        <a class="nav-link" href="kontak.php">
          <i class="far fa-envelope"></i>
          <span>Kontak</span>
        </a>
      </li>
      <!-- garis horizontal -->
      <hr class="sidebar-divider d-none d-md-block">
      <li class="nav-item">
        <a class="nav-link" href="berita.php">
          <i class="far fa-newspaper"></i>
          <span>Berita</span>
        </a>
      </li>
      <!-- garis horizontal -->
     <!--  <hr class="sidebar-divider d-none d-md-block">
      <li class="nav-item">
        <a class="nav-link" href="laporan.php">
          <i class="fas fa-fw fa-print"></i>
          <span>Laporan</span>
        </a>
      </li> -->
      <!-- garis horizontal -->
      <hr class="sidebar-divider d-none d-md-block">
      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span>
        </a>
      </li>

    </ul>
    <!-- End of Sidebar -->

