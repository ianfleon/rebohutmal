<?php

require_once '../functions.php';

$berita = getAllData('berita');

// var_dump($data);

// die();

?>

<?php require "templates/header.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h5 class="mt-4">Berita</h5>
	<hr>

	<!-- content -->
	<a href="form-berita.php" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah data</a>
	<div class="card mt-3">
		<div class="card-header">
			<strong>Data Berita</strong>
		</div>
		<div class="card-body">
			<div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Judul Berita</th>
                          <th scope="col">Tanggal</th>
                          <th colspan="3" scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                    <?php foreach( $berita as $b ) :?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $b['judul_berita'] ?></td>
                            <td><?= $b['waktu_post'] ?></td>
                            <td>
                                <a href="hapus.php?id=<?= $b['id'] ?>&table=berita" class="btn btn-warning btn-sm" onclick="return confirm('Hapus?')">Hapus</a>
                            </td>
                            <td>
                                <a href="form-berita.php?edit=<?= $b['id'] ?>" class="btn btn-primary btn-sm"> Ubah</a>
                            </td>
                            <td>
                                <a href="/rebohutmal/berita.php?p=<?= $b['id'] ?>" class="btn btn-success btn-sm"> Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
		</div>	
	</div>
	<!-- akhir content -->
</div>

<!-- tambahkan file footer -->
<?php require "templates/footer.php"; ?>