<?php

$title = $_SERVER['REQUEST_URI'];
$title = explode('/', $title);
$title = $title[count($title) - 1];
$title = substr($title, 0, strpos($title, '.php'));
$title[0] = strtoupper($title);

?>

<!doctype html>
<html lang="en">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet"> 

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<!-- Bootstrap js -->
<script type="text/javascript" src="my_admin/assets/bootstrap/js/bootstrap.min.js"></script>

<!-- jquery -->
<script type="text/javascript" src="my_admin/assets/JQuery/jquery-file.js"></script>


<!-- CSS -->
<link rel="stylesheet" href="style.css">

<title><?= $title ?> | Rebohutmal</title>
</head>
<body>
    
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-teal" id="navku">
    <div class="container">
        <a class="navbar-brand" href="index.php">REBOHUTMAL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="lokasi.php">Lokasi</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="reboisasi.php">Reboisasi</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="kontak.php">Kontak</a>
            </li>
        </ul>
        </div>
    </div>
</nav>