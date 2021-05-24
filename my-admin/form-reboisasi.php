<?php

require '../functions.php';

// ambil data bibit dari database
// $result = getAllData('bibit');

if (isset($_GET['edit'])) {
	
	$id = $_GET['edit'];
	if (!$data = getAllData('reboisasi', $id)[0]) {
		header('Location: reboisasi.php');
	}

}

// cek jika tombol submit sudah ditekan
if( isset($_POST['submit']) ) 
{
	// var_dump($_POST);
	// die();

    $result = reboisasi($_POST);

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

<?php require_once 'templates/header.php' ?>

<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800 mt-5">Form <?= (isset($_GET['edit'])) ? "Ubah" : "Tambah" ?> Data</h1>
	<hr>

	<!-- notifiksi sukeses -->

	<!-- akhir -->

	<!-- content -->
	<form action="" method="post">
		<div class="mb-3">
			<label for="nama_hutan" class="form-label">Nama Hutan</label>
			<select class="form-control" id="select-nama-hutan" name="namaHutan" required>
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
		</div>
		<div class="mb-3">
			<label for="jenisKerusakan" class="form-label">Jenis Kerusakan</label>
			<select class="form-select form-control" aria-label="Default select example" name="jenisKerusakan" id="select-jenis-kerusakan">
				<option>-- Pilih Jenis Kerusakan --</option>
				<option value="Kebakaran">Kebakaran</option>
				<option value="Penebangan Liar">Penebangan Liar</option>
			</select>
		</div>
		<div class="row">
			<div class="col">
				
			</div>
		</div>
		<div class="mb-3">
			<label for="jenisBibit" class="form-label">Jenis bibit</label>
			<table class="table table-bordered">
				<tr id="check-jenis-bibit">
					<td>
						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1" name="jenisBibit[]" value="Kayu Merah">
							<label class="form-check-label" for="exampleCheck1">Kayu Merah</label>
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
							<input type="checkbox" class="form-check-input" id="exampleCheck4" name="jenisBibit[]" value="Nani Air">
							<label class="form-check-label" for="exampleCheck4">Nani Air</label>
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
							<input type="checkbox" class="form-check-input" id="exampleCheck7" name="jenisBibit[]" value="Manggis Hutan">
							<label class="form-check-label" for="exampleCheck7">Manggis Hutan</label>
						</div>

						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck8" name="jenisBibit[]" value="Halaor">
							<label class="form-check-label" for="exampleCheck8">Halaor</label>
						</div>
						
					</td>
					<td>

						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck9" name="jenisBibit[]" value="Kayu Burung">
							<label class="form-check-label" for="exampleCheck9">Kayu Burung</label>
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
			<input type="number" class="form-control col-md-2" id="jumlahBibit" value="<?= (isset($data['jumlah_bibit'])) ? $data['jumlah_bibit'] : 0 ?>" name="jumlahBibit">
			<div class="small text-grey">*Jumlah bibit yang dibutuhkan.</div>
		</div>
		<div class="mb-4">
			<label for="tanggal" class="form-label">Tanggal</label>
			<input type="date" class="form-control col-md-2" id="tanggal" value="<?= $data['tanggal'] ?>" name="tanggal">
			<div class="small text-grey">*Tanggal pengiriman data</div>
		</div>
		<div class="mb-5 mt-3">
			<a href="reboisasi.php" class="btn btn-warning">Batal</a>
			<button type="submit" name="<?= (isset($_GET['edit'])) ? 'update' : 'submit' ?>" class="btn btn-primary">Simpan</button>
		</div>
	</form>
	<!-- akhir content -->

</div>

<input type="hidden" id="nama-hutan" value="<?= $data['nama_hutan'] ?>">
<input type="hidden" id="jenis-kerusakan" value="<?= $data['jenis_kerusakan'] ?>">
<input type="hidden" id="jenis-bibit" value="<?= $data['jenis_bibit'] ?>">

<script>

const nama_hutan = document.getElementById('nama-hutan').value;
const jenis_kerusakan = document.getElementById('jenis-kerusakan').value;
const jenis_bibit = document.getElementById('jenis-bibit').value;

const s_namaHutan = document.getElementById('select-nama-hutan');
const s_jenisKerusakan = document.getElementById('select-jenis-kerusakan');

const c_jenisBibit = document.querySelectorAll('.form-check-input');

for (let i=0; i<s_namaHutan.length; i++) {
	if (s_namaHutan[i].value == nama_hutan) {
		s_namaHutan[i].setAttribute('selected', '');
	}
}

for (let j=0; j<s_jenisKerusakan.length; j++) {
	if (s_jenisKerusakan[j].value == jenis_kerusakan) {
		s_jenisKerusakan[j].setAttribute('selected', '');
	}
}

c_jenisBibit.forEach((c)=> {
	if (c.value == jenis_bibit) {
		c.setAttribute('checked', '');
	}
});

</script>

<!-- footer -->
<?php require 'templates/footer.php'; ?>