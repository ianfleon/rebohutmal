<?php

// Require composer autoload
require_once __DIR__ . '/assets/mpdf/vendor/autoload.php';


require "../functions.php";
$date = $_GET['laporan'];

// query data pengaduan berdasarkan tahun dan bulan
$data = getDataLaporan($date);


// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();
$html = '
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="utf-8">
        <title>DAFTAR LAPORAN PENGADUAN BULANAN</title>
      </head>
      <body>
          <h3 style="text-align: center;">DAFTAR LAPORAN PENGADUAN</h3>
          <table  border="1" cellpadding="10" cellspacing="0">
            <tr>
              <th>No</th>
              <th>Nama </th>
              <th>Nomor meter</th>
              <th>Nomor HP</th>
              <th>Alamat</th>
              <th>Jenis Pengaduan</th>
              <th>Tanggal</th>
            </tr>';
          $i = 1;
          foreach ( $data as $r ) {
            $html .= '<tr>
                          <td>'. $i++ .'</td>
                          <td>'. $r['nama_kepala_keluarga'] .'</td>
                          <td>'. $r['nomor_meter'].'</td>
                          <td>'. $r['nomor_hp'].'</td>
                          <td>'. $r['alamat'].'</td>
                          <td>'. $r['jenis_pengaduan'].'</td>
                          <td>'. $r['tanggal'].'</td>
                      </tr>';
          }

        $html .= '</table>
      </body>
      </html>
  

';

// Write some HTML code:
$mpdf->WriteHTML($html);
// Output a PDF file directly to the browser
$mpdf->Output();
 


?>
