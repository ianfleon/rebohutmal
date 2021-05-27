<?php 
// tambahkan file function
require "../functions.php";

cek_login(); // cek login

$id = $_GET['id'];
global $conn;
$hapusLokasi = mysqli_query($conn, "DELETE FROM lokasi_dan_info_hutan WHERE id =$id");
echo "
<script>
alert('Data Terhapus');
document.location.href = 'lokasi.php';
</script>
";
?>