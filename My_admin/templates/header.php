<?php  
// require "../functions.php";
// $jum = query("pengaduan_user");
// $num = mysqli_num_rows($jum);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/vendor/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap JS -->
    <script src="assets/jQuery/jquery-file.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- JQuery File -->
  <script src="../assets/jQuery/jquery-file.js"></script>

  <!-- datepicker bootstrap -->
  <link rel="stylesheet" href="assets/bootstrap/date-picker/css/bootstrap-datepicker.min.css">
  <script src="assets/bootstrap/date-picker/js/bootstrap-datepicker.min.js"></script>
  <script src="assets/bootstrap/date-picker/locales/bootstrap-datepicker.id.min.js"></script>
  
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-text mx-3">Admin Page</div>
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
      <hr class="sidebar-divider d-none d-md-block">
      <li class="nav-item">
        <a class="nav-link" href="laporan.php">
          <i class="fas fa-fw fa-print"></i>
          <span>Laporan</span>
        </a>
      </li>
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

