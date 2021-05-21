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
require "templates/header.php";

// tambahkan file function
require "../functions.php";

// cek jika tombol submit sudah ditekan
if( isset($_POST['submit']) ) {
  $result = tambahDataHutan($_POST, 'lokasi_dan_info_hutan');
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
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
       <i class="fas fa-plus"></i> Tambah data hutan
      </button>

      <!-- button buka google maps -->
      <a target="_blank" href="https://www.google.com/maps/place/Kabupaten+Maluku+Tengah,+Maluku/@-3.5262671,128.7564986,8.75z/data=!4m5!3m4!1s0x2d6ceb72d255d343:0x69ff574b116c5785!8m2!3d-3.0166501!4d129.4864411" class="btn btn-primary btn-md">Buka google maps</a>
      <!-- akhir -->

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" method="post">
                <div class="form-group">
                  <label for="namaHutan">Nama hutan</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="namaHutan">
                    <option>-- pilih hutan lindung --</option>
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
                  <label for="link">Link hutan lindung</label>
                  <textarea name="link" class="form-control"></textarea>
                  <small id="emailHelp" class="form-text text-muted">*link maps hutan.</small>
                </div>
                <div class="form-group">
                  <label for="info">Informasi hutan lindung</label>
                  <input type="text" class="form-control" id="info" name="info">
                  <small id="emailHelp" class="form-text text-muted">*wajib diisi.</small>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
                <button type="submit" name="submit" class="btn btn-success">Tambahkan</button>
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
              <th scope="row"><?= $no++ ?></th>
              <td><?= $dt['nama_hutan_lindung'] ?></td>
              <td><?= $dt['info'] ?></td>
              <td class="text-center">
                <a href="hapusDataHutan.php?id=<?=$dt['id'] ?>" class="btn btn-warning btn-sm" onclick="return confirm('Yakin Hapus?')")><i class="fas fa-trash-restore"></i> hapus</a>
              </td>
              <td>
                <a href="ubahDataHutan.php?id=<?=$dt['id'] ?>" class="btn btn-success btn-sm ml-2"><i class="far fa-edit"></i> ubah</a>
              </td>
              <td>
                <a href="pengembangan.php" class="btn btn-primary btn-sm"><i class="fas fa-info-circle"></i> detail</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
<?php require "templates/footer.php" ?>

