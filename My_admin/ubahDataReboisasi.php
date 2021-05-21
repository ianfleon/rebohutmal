<!-- header -->
<?php  

require 'templates/header.php';
require '../functions.php';

// ambil data reboisasi dari database
$result = getAllData('reboisasi');

// cek jika tombol submit sudah ditekan
if( isset($_POST['submit']) )
{
    $result = ubahDataReboisasi($_POST);
    global $conn;
    if( mysqli_affected_rows($conn) ) 
    {
        $notifikasi = true;
        echo "
        <meta content='2; url=reboisasi.php' http-equiv='refresh'>
        ";
    }
}
?>

<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800 mt-5">Form Ubah Data</h1>
	<hr>

	<!-- notifiksi sukeses -->
	<?php if( @$notifikasi == true ) : ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-success" role="alert">
              Tambah data <strong>berhasil!</strong>
            </div>
        </div>  
    </div>
    <?php endif; ?>
	<!-- akhir -->

	<!-- content -->
	<form action="" method="post">
		<div class="mb-3">
			<label for="nama_hutan" class="form-label">Nama Hutan</label>
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
		</div>
		<div class="mb-3">
			<label for="jenisKerusakan" class="form-label">Jenis Kerusakan</label>
			<select class="form-select form-control" aria-label="Default select example" name="jenisKerusakan" id="jenisKerusakan">
				<option>-- Pilih jenis kerusakan --</option>
				<option value="Kebakaran">Kebakaran</option>
				<option value="Penebangan liar">Penebangan liar</option>
			</select>
		</div>
		<div class="mb-3">
			<label for="jenisBibit" class="form-label">Jenis bibit</label>
			<table class="table table-bordered">
				<tr>
					<td>
						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1" name="jenisBibit[]" value="kayu merah">
							<label class="form-check-label" for="exampleCheck1">Kayu merah</label>
						</div>

						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck2" name="jenisBibit[]" value="Bintanggur">
							<label class="form-check-label" for="exampleCheck2">Bintanggur</label>
						</div>

					</td>
					<td>
						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck3" name="jenisBibit[]" value="Makila">
							<label class="form-check-label" for="exampleCheck3">Makila</label>
						</div>
						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck4" name="jenisBibit[]" value="Nani air">
							<label class="form-check-label" for="exampleCheck4">Nani air</label>
						</div>
					</td>
					<td>

						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck5" name="jenisBibit[]" value="Siki">
							<label class="form-check-label" for="exampleCheck5">Siki</label>
						</div>

						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck6" name="jenisBibit[]" value="Meranti">
							<label class="form-check-label" for="exampleCheck6">Meranti</label>
						</div>

					</td>
					<td>

						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck7" name="jenisBibit[]" value="Manggis hutan">
							<label class="form-check-label" for="exampleCheck7">Manggis hutan</label>
						</div>

						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck8" name="jenisBibit[]" value="Halaor">
							<label class="form-check-label" for="exampleCheck8">Halaor</label>
						</div>
						
					</td>
					<td>

						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck9" name="jenisBibit[]" value="Kayu burung">
							<label class="form-check-label" for="exampleCheck9">Kayu burung</label>
						</div>

						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck10" name="jenisBibit[]" value="Matoa">
							<label class="form-check-label" for="exampleCheck10">Matoa</label>
						</div>
						
					</td>
				</tr>
			</table>
		</div>
		<div class="mb-3">
			<label for="jumlahBibit" class="form-label">Jumlah Bibit</label>
			<input type="number" class="form-control col-md-2" id="jumlahBibit" value="number" name="jumlahBibit">
			<div class="small text-grey">*Jumlah bibit yang dibutuhkan.</div>
		</div>
		<div class="mb-4">
			<label for="tanggal" class="form-label">Tanggal</label>
			<input type="date" class="form-control col-md-2" id="tanggal" name="tanggal">
			<div class="small text-grey">*Tanggal pengiriman data</div>
		</div>
		<div class="mb-5 mt-3">
			<a href="reboisasi.php" class="btn btn-warning">Batal</a>
			<button type="submit" name="submit" class="btn btn-primary">Tambahkan</button>
		</div>
	</form>
	<!-- akhir content -->

</div>

<!-- footer -->
<?php require 'templates/footer.php'; ?>