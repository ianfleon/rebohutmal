<?php

/* Ubah tanggal jadi int */
function parseDate($date) {
    $dt = explode('-', $date);
    $dt = implode('', $dt);
    return intval($dt);
}

/* Event cetak */
if (isset($_POST['cetak'])) {

    /* Get Data dari form */
    $dari = $_POST['tanggal-dari'];
    $sampai = $_POST['tanggal-sampai'];

    /* Jika kosong, maka sama */
    if (empty($sampai)) {
        $sampai = $dari;
    }

    /* Cek kesesuaian */
    if (parseDate($dari) > parseDate($sampai)) {
        $err_waktu = true;
    } else {
        require_once '../functions.php';
        $data = cetak_data($dari, $sampai);
        // cetak($hasil);
    }

    /* Cetak */
    require_once __DIR__ . '/assets/mpdf/vendor/autoload.php';

    $mpdf = new \Mpdf\Mpdf();

    /* Tabel */
    $html1 = '
        <h2>Laporan Data Reboisasi</h2>
        <p>Dari: ['. minify_date($dari, '/').'] Sampai: ['.minify_date($sampai, '/').']
        <table cellpadding="5" cellspacing="0">
            <thead>
                <tr style="background: black; border: 1px solid black;">
                    <th style="color: white">No</th>
                    <th style="color: white">Tanggal</th>
                    <th style="color: white">Nama Hutan</th>
                    <th style="color: white">Jenis Kerusakan</th>
                    <th style="color: white">Jenis Bibit</th>
                    <th style="color: white">Jumlah Bibit</th>
                </tr>
            </thead>
            <tbody>
    ';

    $html2 = '
        </tbody>
        </table>
    ';

    $mpdf->WriteHTML($html1);

    $no = 1;
    
    /* Isi Tabel */
    foreach($data as $d) {

        $d['tanggal'] = minify_date($d['tanggal'], '-');

        $mpdf->WriteHTML('<tr>');
        $mpdf->WriteHTML('<td style="border: .5px solid black;">'.$no.'</td>');
        $mpdf->WriteHTML('<td style="border: .5px solid black;">'.$d['tanggal'].'</td>');
        $mpdf->WriteHTML('<td style="border: .5px solid black;">'.$d['nama_hutan'].'</td>');
        $mpdf->WriteHTML('<td style="border: .5px solid black;">'.$d['jenis_kerusakan'].'</td>');

        $mpdf->WriteHTML('<td style="border: .5px solid black;">');

        // Looping jenis bibit
        $jb = explode('-', $d['jenis_bibit']);
        foreach ($jb as $b) {
            $mpdf->WriteHTML('<ul>');
                $mpdf->WriteHTML('<li>'.$b.'</li>');
            $mpdf->WriteHTML('</ul>');
        }

        $mpdf->WriteHTML('</td>');
        $mpdf->WriteHTML('<td style="border: .5px solid black;">'.$d['jumlah_bibit'].'</td>');
        $mpdf->WriteHTML('</tr>');

        $no++;
    }

    $mpdf->WriteHTML($html2);

    $mpdf->Output();


}

?>

<!-- Header -->
<?php require_once 'templates/header.php' ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <?php if( isset($err_waktu) ) : ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-danger" role="alert">
              Periksa lagi rentan waktu yang dipilih.
            </div>
        </div>  
    </div>
    <?php endif; ?>

  <!-- Page Heading -->
  <h5 class="mt-4">Laporan</h5>
  <hr>

<!-- form tambah -->
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="tanggal-dari" class="form-label">Dari:</label>
        <input type="date" class="form-control col-md-2" id="tanggal-dari" name="tanggal-dari" required>
    </div>
    <div class="mb-3">
        <label for="tanggal-sampai" class="form-label">Sampai:</label>
        <input type="date" class="form-control col-md-2" id="tanggal-sampai" name="tanggal-sampai">
        <div class="small text-grey">*biarkan kosong jika hanya cetak untuk hari ini.</div>
    </div>   
    <button type="submit" name="cetak" class="btn btn-primary">Cetak</button>
  </form>


<!-- <table style="border: 2px solid black;" cellpadding="5" cellspacing="">
    <thead>
        <th style="border: 2px solid black;">Nama Hutan</th>
        <th style="border: 2px solid black;">Jenis Kerusakan</th>
        <th style="border: 2px solid black;">Jenis Bibit</th>
        <th style="border: 2px solid black;">Jumlah Bibit</th>
    </thead>
    <tbody>
        <tr>
            <td></td>
        </tr>
    </tbody>
</table> -->

</div>

<!-- Footer -->
</body>
</html>