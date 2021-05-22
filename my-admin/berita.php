<?php  
// tambahkan file header
require "templates/header.php";
?>



<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h6 class="h3 mb-4 text-gray-800 mt-3">Berita</h6>
	<hr>
	<!-- content -->
	<a href="tambahDataBerita.php" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah data</a>
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
                          <th scope="col">tanggal</th>
                          <!-- <th scope="col">Tanggal</th> -->
                          <th colspan="3" class="text-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <!-- <?php $no = 1; ?>
                    <?php foreach( $dataReboisasi as $dr ) :?> -->
                        <tr>
                            <td><?= $no++; ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-center">
                                <a href="hapus.php?id=...&table=reboisasi" class="btn btn-warning btn-sm" onclick="return confirm('Hapus?')">hapus</a>
                            </td>
                            <td class="text-center">
                                <a href="" class="btn btn-primary btn-sm">ubah</a>
                            </td>
                            <td class="text-center">
                                <a href="" class="btn btn-success btn-sm">detail</a>
                            </td>
                        </tr>
                    <!-- <?php endforeach; ?> -->
                    </tbody>
                </table>
            </div>
		</div>	
	</div>
	<!-- akhir content -->
</div>

	<!-- tambahkan file footer -->
	<?php require "templates/footer.php"; ?>