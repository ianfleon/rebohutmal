<?php  

require 'templates/header.php';
require '../functions.php';

cek_login(); // cek login

/* ambil data reboisasi dari database */
$dataReboisasi = getAllData('reboisasi');

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h5 class="mt-4">Reboisasi</h5>
    <hr>
    <div class="row">
        <div class="col-md">
            <a href="form-reboisasi.php" class="btn btn-primary" id="tambahDataReboisasi"><i class="fas fa-plus"></i> Tambah Data</a>
        </div>
    </div>

    <!-- jalankan notifikasi hapus jika true -->
    <?php if( @$notifikasi == true ) : ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              Data <strong>berhasil</strong>dihapus!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        </div>  
    </div>
    <?php endif; ?>
    <!-- akhir -->

    <div class="row mt-4">
        <div class="col-md">
            <div class="card">
              <div class="card-header">
                <strong>Data Permintaan Reboisasi</strong>
              </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama Hutan</th>
                              <th scope="col">Jenis Kerusakan</th>
                              <th scope="col">Jenis Bibit</th>
                              <th scope="col">Jumlah Bibit</th>
                              <th scope="col">Tanggal</th>
                              <th colspan="2">Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1; ?>
                        <?php foreach( $dataReboisasi as $dr ) :?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $dr['nama_hutan']; ?></td>
                                <td><?= $dr['jenis_kerusakan']; ?></td>
                                <td>
                                    <ul>
                                      <?php $jb = explode('-', $dr['jenis_bibit']); ?>
                                      <?php foreach ($jb as $j) : ?>
                                        <li><?= $j ?></li>
                                      <?php endforeach; ?>
                                    </ul>    
                                </td>
                                <td><?= $dr['jumlah_bibit']; ?></td>
                                <td><?= $dr['tanggal']; ?></td>
                                <td>
                                    <a href="hapus.php?id=<?= $dr['id'] ?>&table=reboisasi" class="btn btn-warning btn-sm" onclick="return confirm('Hapus?')"><i class="fas fa-trash-restore"></i> Hapus</a>
                                </td>
                                <td class="text-center">
                                    <a href="form-reboisasi.php?edit=<?= $dr['id'] ?>" class="btn btn-primary btn-sm"><i class="far fa-edit"></i> Ubah</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>

</script>

<?php require 'templates/footer.php'; ?>


