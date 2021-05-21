<?php  

// panggil file header_index.php
require "templates/header.php";
require "functions.php";

$result = getAllData('lokasi_dan_info_hutan');

?>

<!-- Berita -->
<div class="container mt-7">
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

  <div class="row">
    <?php foreach($result as $dt): ?>
      <div class="col-md-4 mb-5">
        <div class="card lokasi">
          <iframe src="<?= $dt['link_maps'] ?>">link</iframe>
          <div class="card-body">
            <a href="#" class="card-title"><?= $dt['nama_hutan_lindung'] ?></a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
              Info
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>

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
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Footer -->
    <footer class="footer">
      <p class="txt-credit">Rebohutmal, 2021. Terima kasih Hutan!</p>
    </footer>
  </body>
</html>
