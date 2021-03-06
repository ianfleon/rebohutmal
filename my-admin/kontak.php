<?php 

// tambahkan file header
require "templates/header.php";
// akhir

// tambahkan file functions.php
require "../functions.php";

cek_login(); // cek login

//ambil seluruh data kontak masuk dari user
$result = getAllData('kontak');

//  cari data kontak
if( isset($_POST['cari']) ) {
    $keyword = htmlspecialchars($_POST['keyword']);
    $result = my_query_get("SELECT * FROM kontak WHERE nama LIKE '%$keyword%'");
    // var_dump($result);
    // $total = count($data);
}

$total = count($result);
 
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h5 class="mt-4">Kontak</h5>
  <hr>
  <!-- pencarian -->
    <div class="row">
      <div class="col-md-7">
        <form action="" method="post">
          <div class="input-group mb-1">
            <input type="text" class="form-control" placeholder="masukan nama pengirim pesan..." name="keyword" autofocus="on" autocomplete="off">
            <div class="input-group-append">
              <button  type="submit" class="btn btn-outline-success" name="cari" id="button-addon2">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  <!-- jumlah data yang ditampilkan -->
    <div class="row mt-2">
      <div class="col-md-3">
        <p>Total Data : <?= ($total != null) ? $total : "-" ?><span class="text-primary"></p>
      </div>
    </div>
    
  <!-- tampilkan pesan tidak ada pengaduan terbaru -->
  <?php if( $total < 1 ) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Tidak ada pengaduan terbaru !</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif; ?>
  <!-- akhir pesan -->

  <!-- content -->
    <div class="row">
      <div class="col-md-12">
        <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">NAMA PENGIRIM</th>
            <th scope="col">EMAIL PENGIRIM</th>
            <th scope="col">ISI PESAN</th>
            <th scope="col">TANGGAL</th>
            <th scope="col">AKSI</th>
          </tr>
        </thead>
        <tbody>
          <div class="row">
          	<div class="col-sm-3 mb-2">
          		<a href="kontak.php" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
          	</div>
          </div>
          <?php $noUrut = 1; ?>
          <?php foreach ($result as $row):?>
          <tr>
            <td scope="row"><?= $noUrut; ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['pesan'] ?></td>
            <td><?= $row['tanggal'] ?></td>
            <td><a href="hapus.php?id=<?= $row['id'] ?>&table=kontak" class="btn btn-warning  btn-sm float-right" onclick="return confirm('Hapus?')"><i class="fa fa-fw fa-trash"></i> Hapus</a>
            </td>
          </tr>
          <?php $noUrut++; ?>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  <!-- and of content -->
</div>
<!-- /.container-fluid -->
<?php require "templates/footer.php" ?>

