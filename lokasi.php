<?php  

require "functions.php"; // main function

$result = getAllData('lokasi_dan_info_hutan'); // get data

if (isset($_POST['cari'])) {
    $keyword = $_POST['keyword'];
    $result = my_query_get("SELECT * FROM lokasi_dan_info_hutan WHERE nama_hutan_lindung LIKE '%$keyword%'");
    // var_dump($result);
    // die();
}

?>

<?php require_once 'templates/header.php' ?>

<!-- Modal -->
<div class="modal fade" id="modal-lokasi" tabindex="-1" aria-labelledby="modal-lokasi-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-lokasi-label">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p id="modal-hutan-info"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>


<!-- Lokasi -->
<div class="container mt-5">

    <!-- Head -->
    <div class="row mb-3">
        <div class="col-md-6">
          <h4>Lokasi Hutan</h4>
        </div>
        <div class="col-md-6">
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="keyword" placeholder="Cari lokasi..">
                        <button class="btn btn-outline-success" name="cari" type="submit" id="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Cards -->
    <div class="row">

    <?php foreach($result as $dt): ?>
        <div class="col-md-4 mb-5">
            <div class="card lokasi">
                <?= $dt['link_maps'] ?>
                <div class="card-body">
                    <p data-nama-hutan="<?= $dt['nama_hutan_lindung'] ?>" class="card-title"><?= $dt['nama_hutan_lindung'] ?></p>
                    <input id="info-hutan" type="hidden" data-info-hutan="<?= $dt['info'] ?>">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-info-detail" data-bs-toggle="modal" data-bs-target="#modal-lokasi">
                      Lihat Informasi
                    </button>
                </div>
            </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- <div class="row mb-5 text-center">
        <div class="col-md-12">
            <button class="btn btn-success">Lainnya</button>
        </div>
    </div> -->

</div>

<script>
    
const hutan = document.querySelectorAll('.btn-info-detail');

console.log(hutan);

const modal_title = document.getElementById('modal-lokasi-label');
// const info_hutan = document.getElementById('info-hutan').getAttribute('data-info-hutan');
const modal_info = document.getElementById('modal-hutan-info');

// console.log(modal_info);

hutan.forEach((h)=> {
    h.addEventListener('click', ()=> {
        modal_title.innerHTML = h.parentElement.querySelector('.card-title').getAttribute('data-nama-hutan');
        modal_info.innerHTML = h.parentElement.querySelector('#info-hutan').getAttribute('data-info-hutan');
    });
});

</script>

<?php require_once 'templates/footer.php' ?>