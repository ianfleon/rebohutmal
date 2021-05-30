<?php  

date_default_timezone_set("Asia/Tokyo"); // Setting Timezone

/* Koneksi ke Database */
$conn = mysqli_connect("localhost", "root", "", "farah_ta");

/* Query ke Database */
function my_query($query) {
	global $conn;
	return mysqli_query($conn, $query);
}

function my_query_set($query) {
	global $conn;
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

/* Query mengambil data */
function my_query_get($query) {

	$rows = [];

	$result = my_query($query);

	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}

	return $rows;
}

// functions getAllData >> untuk mengambil seluruh data;
function getAllData($namaTabel, $id = null) {

	global $conn;

	$query =  "SELECT * FROM $namaTabel ORDER BY id DESC";

	$rows = [];

	if ($id != null) {
		$query = "SELECT * FROM $namaTabel WHERE id = '$id' ORDER BY id DESC";
	}

	$result = mysqli_query($conn, $query);

	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}

	return $rows;
}
// akhir function getAllData

// function getById >> untuk mengambil data berdasarkan ID
function getById($namaTabel, $id) {

	global $conn;

	$result = mysqli_query($conn, "SELECT * FROM $namaTabel WHERE id = $id");
	$rows = [];

	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}

	return $rows;
}
// akhir function getById

// function tambah data > untuk memasukan data ke database
function kontak($data, $namaTabel) {

	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$pesan = htmlspecialchars($data['pesan']);
	$tanggal = date("y-m-d");

	global $conn;
	
	$result = mysqli_query($conn, "INSERT INTO $namaTabel VALUES 
		(null, '$nama', '$email', '$pesan', '$tanggal') ");
	
	return $result;
}
// akhir function tambah data

// function tambah data hutan
function tambahDataHutan($data) {

	global $conn;
	
	$link = $data['link'];
	$namaHutan = htmlspecialchars($data['namaHutan']);
	$info = htmlspecialchars($data['info']);

	$query = "INSERT INTO lokasi_dan_info_hutan VALUES 
		(null, '$namaHutan', '$link', '$info')";

	$result = mysqli_query($conn, $query);

	return $result;

}
// akhir function tambah data

/* Function tambah data > untuk memasukan data ke database */
function reboisasi($data, $id = null, $cmd = null) {

	global $conn;

	$namaHutan = $data['namaHutan'];
	$jenisKerusakan = $data['jenisKerusakan'];
	$jumlahBibit = $data['jumlahBibit'];
	$jenisBibit = implode('-', $data['jenisBibit']);
	// $tanggal = $data['tanggal'];
	$tanggal = date("Y-m-d");
	$pengadu = $data['pengadu'];

	$query = "INSERT INTO reboisasi VALUES (
		null, '$namaHutan', '$jenisBibit', '$jumlahBibit', '$jenisKerusakan', '$tanggal', '$pengadu'
	)";

	/* Ubah */
	if ($cmd == 'ubah') {

		if ($id != null) {
			$query = "UPDATE reboisasi SET
				nama_hutan = '$namaHutan',
				jenis_bibit = '$jenisBibit',
				jumlah_bibit = '$jumlahBibit',
				jenis_kerusakan = '$jenisKerusakan',
				tanggal = '$tanggal'
			WHERE id = '$id'
			";
		}
	}

	my_query($query);

	return mysqli_affected_rows($conn);
}
// akhir function tambah data

// function hapus >> untuk menghapus data berdasarkan id yang dikirm
function hapus($id, $namaTabel) {
	global $conn;
	return $result = mysqli_query($conn, "DELETE FROM $namaTabel WHERE id = $id ");
}
// akhir function hapus

/* Berita */
function berita($data, $gambar, $id = null, $cmd = null) {

	$judul = $data['judul'];
	$isi = $data['isi-berita'];
	$tanggal = date("Y-m-d");

	$cover = $data['gambar-lama'];

	if ($gambar['img-cover']['size'] != 0) {
		$img = uploadGambar($gambar['img-cover']);
	}

	if (isset($img)) {
		if (!$img['status']) {			
			echo "Gagal Upload Berita!";
			header("Refresh:2, url='berita.php'");
			die();
		} else {
			$cover = $img['nama_baru']; // cover berita
		}
	}

	$query = "INSERT INTO berita VALUES (null, '$judul', '$isi', '$tanggal', '$cover')";

	if ($cmd == 'ubah' && $id != null) {
		$query = "UPDATE berita SET
			judul_berita = '$judul',
			isi_berita = '$isi',
			cover_berita = '$cover'
			WHERE id = '$id'
		";
	}


	return my_query($query);

}

/* Prosesing Gambar */
function uploadGambar($gambar) {

    $nama = $gambar['name'];
    $tipe = $gambar['type'];
    $lokasi_tmp = $gambar['tmp_name'];
    $error = $gambar['error'];
    $size = $gambar['size'];

    $nama_ex = explode('.', $nama);

    $eksetensi = end($nama_ex);

    $nama = uniqid() . "." . $eksetensi;

    $dir = '../assets/thumbnails/';

    if (!is_dir($dir) ) {
        mkdir($dir);
    }

    $v['status'] = move_uploaded_file($lokasi_tmp, $dir . $nama);

    if ($v['status']) {
        $v['nama_baru'] = $nama;
    }

    return $v;

}

/* Cek Login */
function cek_login() {
	session_start();
	if (!isset($_SESSION['admin_logined'])) {
		header("Location: login.php");
	}
}