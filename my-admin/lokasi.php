<?php

// jalankan SESSION
// session_start();
// // akhir
// // cek apakah user sudah login atau belum
//   if( !isset($_SESSION['adminLogin']) ) {
//     header("Location: login.php");
//   exit;
//   }

// tambahkan file header
require_once "templates/header.php";

// tambahkan file function
require_once "../functions.php";

// cek jika tombol submit sudah ditekan
if( isset($_POST['submit']) ) {

  $result = tambahDataHutan($_POST);

  $notifikasi = true;

  echo "
  <meta content='1; url=lokasi.php' http-equiv='refresh'>
  ";

}

// ambil data hutan dari database
$dataHutan = getAllData('lokasi_dan_info_hutan');

// cek apakah data berhasil dihapus


?>
<!-- Begin Page Content -->
<div class="container-fluid">
  <h5 class="mt-4">Lokasi Hutan Lindung</h5>
  <hr>
  <!-- tampilkan pesan tidak ada pengaduan terbaru -->
  <!-- <?php if( isset($error ) ): ?> -->
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Tidak ada pengaduan terbaru !</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <!-- <?php endif; ?> -->
  <!-- akhir pesan -->

  <?php if( @$notifikasi == true ) : ?>
    <div class="row">
      <div class="col">
        <div class="alert alert-success" role="alert">
          Data <strong>berhasil</strong> ditambahkan!
        </div>
      </div>  
    </div>
  <?php endif; ?>
  <div class="row">
    <div class="col-md">

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lokasi">
       <i class="fas fa-plus"></i> Tambah Data Hutan
      </button>

      <!-- button buka google maps -->
      <a target="_blank" href="https://www.google.com/maps/place/Kabupaten+Maluku+Tengah,+Maluku/@-3.5262671,128.7564986,8.75z/data=!4m5!3m4!1s0x2d6ceb72d255d343:0x69ff574b116c5785!8m2!3d-3.0166501!4d129.4864411" class="btn btn-success btn-md"> <i class="fa fa-map"></i> Buka Google Maps</a>
      <!-- akhir -->

      <!-- Modal -->
      <div class="modal fade" id="modal-lokasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-title">Form Tambah Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" method="post">
                <div class="form-group">
                  <label for="namaHutan">Nama hutan</label>
                  <select class="form-control" id="opsi-hutan" name="namaHutan">
                    <option>-- Pilih Hutan Lindung --</option>
                    <option value="HL Gn Tipukekene">HL Gn Tipukekene</option>
                    <option value="HL Nakabata">HL Nakabata</option>
                    <option value="HL Gunung Kuluala">HL Gunung Kuluala</option>
                    <option value="HL Gunung Kalapain">HL Gunung Kalapain</option>
                    <option value="HL Yala">HL Yala</option>
                    <option value="HL Bulabulasi">HL Bulabulasi</option>
                    <option value="HL Gunung Katan">HL Gunung Katan</option>
                    <option value="HL Gung Salela">HL Gung Salela</option>
                    <option value="HL Gunung Baleu">HL Gunung Baleu</option>
                  </select>
                  <small id="emailHelp" class="form-text text-muted">*wajib diisi.</small>
                </div>
                <div class="form-group">
                  <label for="link">Link Hutan Lindung</label>
                  <textarea name="link" class="form-control" id="link-maps"></textarea>
                  <small id="emailHelp" class="form-text text-muted">*link maps hutan.</small>
                </div>
                <div class="form-group">
                  <label for="info">Informasi Hutan Lindung</label>
                  <input type="text" class="form-control" id="info" name="info">
                  <small id="emailHelp" class="form-text text-muted">*wajib diisi.</small>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
                <button type="submit" id="btn-submit-lokasi" name="submit" class="btn btn-success">Tambahkan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-md">
      <table class="table table-bordered table-hover text-center">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Hutan</th>
            <th scope="col">Informasi Hutan</th>
            <th scope="col" class="text-center" colspan="3">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach($dataHutan as $dt): ?>
            <tr>
              <td id="maps" style="display: none"><?= $dt['link_maps'] ?></td>
              <th scope="row"><?= $no++ ?></th>
              <td><?= $dt['nama_hutan_lindung'] ?></td>
              <td><?= $dt['info'] ?></td>
              <td class="text-center">
                <a href="hapusDataHutan.php?id=<?=$dt['id'] ?>" class="btn btn-warning btn-sm" onclick="return confirm('Yakin Hapus?')")><i class="fas fa-trash-restore"></i> Hapus</a>
                <a href="pengembangan.php" class="btn btn-primary btn-sm"><i class="fas fa-info-circle"></i> Detail</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

<?php require_once 'templates/footer.php'; ?>