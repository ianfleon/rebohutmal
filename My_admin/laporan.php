<?php 
  require "templates/header.php";
  // require "../functions.php";

if( isset($_POST['submit']) ) {
  $tahun = $_POST['tahun'];
  $bulan = $_POST['bulan'];
  $tahun .='-';
  $tahun .=$bulan;
  $laporan = getDataLaporan($tahun);
}


?>
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800 mt-3">Laporan </h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>
  <hr>  
  <!-- Content Row -->
    <div class="row">
      <div class="col-sm">
        <div class="card">
          <h5 class="card-header">Laporan pengaduan</h5>
          <div class="card-body">
            <form action="" method="post">
              <div class="form-group">
                <label for="exampleInputPassword1">Pilih bulan</label>
                <select class="form-control col-sm-3" name="bulan">
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="099">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Pilih Tahun</label>
                <select class="form-control col-sm-3" name="tahun">
                    <option value="2021">2021</option>
                    <option value="2022">2021</option>
                    <option value="2023">2022</option>
                </select>
              </div>
              <button type="submit" name="submit" class="btn btn-primary">submit</button>
            </form>
            <hr>
            <a href="cetakLaporan.php?laporan=<?= $tahun; ?>" class="btn btn-primary mb-3" target="_blank"> <i class="fas fa-fw fa-print"></i> Cetak Laporan</a>
            <table class="table table-bordered table-responsive">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Nomor meter</th>
                  <th scope="col">Nomor HP</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Jenis Pengaduan</th>
                  <th scope="col">Tanggal</th>
                </tr>
              </thead>
              <tbody>
                <?php $nomor = 1; ?>
                <?php foreach ( $laporan as $row ) :?>
                <tr>
                  <td><?= $nomor++ ?></td>
                  <td><?= $row['nama_kepala_keluarga'];?></td>
                  <td><?= $row['nomor_meter']; ?></td>
                  <td><?= $row['nomor_hp']; ?></td>
                  <td><?= $row['alamat']; ?></td>
                  <td><?= $row['jenis_pengaduan']; ?></td>
                  <td><?= $row['tanggal']; ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

</div>

<?php require "templates/footer.php" ?>