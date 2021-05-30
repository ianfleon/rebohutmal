<?php

session_start();

if (isset($_SESSION['user_logined'])) {
	header('reboisasi.php');
}

require_once 'functions.php'; // main function

if (isset($_POST['register'])) {
	
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "INSERT INTO users VALUES (
		'', '$nama', '$email', '$password'
	)";

	$hasil = my_query_set($query);

	if ($hasil > 0) {
		$notifikasi = true;
		header("Refresh: 2; url='login.php'");
	} else {
		$notifikasi = false;
	}

}

?>

<!-- Header -->
<?php require_once 'templates/header.php' ?>

<div class="container my-5">

	<?php if( @$notifikasi == true ) : ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-success" role="alert">
              Berhasil <strong>daftar.</strong> Login sekarang!
            </div>
        </div>  
    </div>
    <?php endif; ?>

	<p>Sudah punya akun? <a href="login.php">Silahkan Login.</a></p>
	<h5 class="card-title">Register</h5>
	<div class="card">
		<div class="card-body">
			<form action="" method="post">
				<div class="mb-3">
				    <label class="form-label">Nama Lengkap</label>
				    <input type="text" class="form-control" name="nama" required>
				    <div class="form-text">Contoh : Budi Santoso</div>
				</div>
				<div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Email</label>
				    <input type="email" class="form-control" name="email" required>
				    <div id="emailHelp" class="form-text">Contoh : budi@gmail.com</div>
				</div>
			  	<div class="mb-3">
			    	<label for="exampleInputPassword1" class="form-label">Password</label>
			    	<input type="password" class="form-control" name="password" required>
			  	</div>
			  	<button type="submit" class="btn btn-primary" name="register">Daftar!</button>
			</form>
		</div>
	</div>
</div>

</body>
</html>