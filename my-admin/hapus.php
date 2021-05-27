<?php

session_start();
// tambahkan halaman function
require '../functions.php';

cek_login(); // cek login

// ambil id dan tabel yang dikirim dari url
$id = $_GET['id'];
$namaTabel = $_GET['table'];

// query untuk menghapus data berdasarkan id yang dikirm
global $conn;
$query = "DELETE FROM $namaTabel WHERE id = $id ";
// akhir function hapus

if( mysqli_query($conn, $query) ) {
	echo "
		<script> 
			alert('Data berhasil dihapus');
		</script>
	";
	header("location: $namaTabel.php", true, 301);
	exit();

}

?>