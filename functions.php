<?php  

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "farah_ta");
// akhir koneksi

// functions getAllData >> untuk mengambil seluruh data;
function getAllData($namaTabel) {
	global $conn;
	$result = mysqli_query($conn, "SELECT * FROM $namaTabel");
	$rows = [];
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
		('', '$nama', '$email', '$pesan', '$tanggal') ");
	return $result;
}
// akhir function tambah data

// function tambah data hutan
function tambahDataHutan($data, $namaTabel) {
	$namaHutan = htmlspecialchars($data['namaHutan']);
	$link = $data['link'];
	$info = htmlspecialchars($data['info']);
	global $conn;
	$result = mysqli_query($conn, "INSERT INTO $namaTabel VALUES 
		('', '$namaHutan', '$link', '$info') ");
	return $result;
}
// akhir function tambah data

// function tambah data > untuk memasukan data ke database
function reboisasi($data) {
	global $conn;
	$namaHutan = $data['namaHutan'];
	$jenisKerusakan = $data['jenisKerusakan'];
	$jumlahBibit = $data['jumlahBibit'];
	$jenisBibit = $data['jenisBibit'];
	$tanggal = $data['tanggal'];

	$jumlahBibitYgDipilih = count($jenisBibit);
	for($x=0;$x<$jumlahBibitYgDipilih;$x++){
	mysqli_query($conn, "INSERT INTO reboisasi values('','$namaHutan','$jenisBibit[$x]','$jumlahBibit','$jenisKerusakan','$tanggal')");
	}
}
// akhir function tambah data

// function hapus >> untuk menghapus data berdasarkan id yang dikirm
function hapus($id,$namaTabel) {
	global $conn;
	return $result = mysqli_query($conn, "DELETE FROM $namaTabel WHERE id = $id ");
}
// akhir function hapus

// function cari data
function cari($namaTabel,$keyword) {
	global $conn;
	$result = mysqli_query($conn, "SELECT * FROM $namaTabel WHERE nama LIKE'%$keyword%' OR email LIKE '%$keyword%'");
	return $result;
}
// akhir function cari

















