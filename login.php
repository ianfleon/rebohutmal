<?php

session_start();

if (isset($_SESSION['user_logined'])) {
	header('reboisasi.php');
}

require_once 'functions.php'; // main function

$notifikasi = null;

if (isset($_POST['login'])) {
	
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "SELECT * FROM users WHERE email = '$email'";

	$hasil = my_query_get($query)[0];

	if ($hasil > 0) {
		if ($hasil['email'] == $email) {
			if ($hasil['password'] == $password) {
				$notifikasi = true;
				$_SESSION['user_logined'] = $hasil['nama'];
				header("Refresh: 2; url='reboisasi.php'");
			} else {
				$notifikasi = false;
			}
		}
	}

}

?>

<!-- Header -->
<?php require_once 'templates/header.php' ?>

<div class="container my-5">

	<?php if( @$notifikasi === true ) : ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-success" role="alert">
              Berhasil <strong>login!</strong>
            </div>
        </div>  
    </div>
    <?php endif; ?>

    <?php if( @$notifikasi === false ) : ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-success" role="alert">
              Periksa lagi <strong>akun anda!</strong>
            </div>
        </div>  
    </div>
    <?php endif; ?>

	<p>Belum punya akun? <a href="register.php">Daftar sekarang.</a></p>
	<h5 class="card-title">Login</h5>
	<div class="card">
		<div class="card-body">
			<form action="" method="post">
				<div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Email</label>
				    <input type="email" class="form-control" name="email">
				    <div id="emailHelp" class="form-text">Contoh : budi@gmail.com</div>
				</div>
			  	<div class="mb-3">
			    	<label for="exampleInputPassword1" class="form-label">Password</label>
			    	<input type="password" class="form-control" name="password">
			  	</div>
			  	<button type="submit" class="btn btn-primary" name="login">Login!</button>
			</form>
		</div>
	</div>
</div>

</body>
</html>