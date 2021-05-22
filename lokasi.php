<?php  

require "functions.php"; // main function

$result = getAllData('lokasi_dan_info_hutan'); // get data

?>

<?php require_once 'templates/header.php' ?>

<!-- Lokasi -->
<div class="container mt-5">

    <!-- Head -->
    <div class="row mb-3">
        <div class="col-md-6">
          <h4>Lokasi Hutan</h4>
        </div>
        <div class="col-md-6">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari lokasi.." aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-success" type="button" id="button-addon2">Cari</button>
          </div>
        </div>
    </div>

    <!-- Cards -->
    <div class="row">

    <?php foreach($result as $dt): ?>
        <div class="col-md-4 mb-5">
            <div class="card lokasi">
                <?= $dt['link_maps'] ?>
                <div class="card-body">
                    <a href="#" class="card-title"><?= $dt['nama_hutan_lindung'] ?></a>
                </div>
            </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="row mb-5 text-center">
        <div class="col-md-12">
            <button class="btn btn-success">Lainnya</button>
        </div>
    </div>

</div>

<?php require_once 'templates/footer.php' ?>