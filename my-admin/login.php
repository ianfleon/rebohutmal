<?php  

session_start();

if (isset($_SESSION['admin_logined'])) {
    header("Location: index.php");
}

require '../functions.php'; // main function


if( isset($_POST['login']) ) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek = my_query_get("SELECT * FROM admin WHERE username = '$username'");

    if ($cek && $cek > 0) {
        if ($cek[0]['username'] == $username && $cek[0]['password'] == $password) {
            $_SESSION['admin_logined'] = true;
            echo "Berhasil login, tunggu sebentar..";
            header("Refresh: 2; url='login.php'");
            die();
        } else {
            echo "Akun salah, coba lagi!";
            header("Refresh: 2; url='login.php'");
            die();
        }
    } else {
        echo "Akun salah, coba lagi!";
        header("Refresh: 2; url='login.php'");
        die();
    }


}


?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Login | Admin</title>

<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="assets/vendor/css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom Css -->
<style>
  body {
    background-color: teal;
  }
</style>

</head>

<body class="bg-teal">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-md-6 mt-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <?php if( isset($error ) ) : ?>
                    <div class="alert alert-danger" role="alert">
                      password anda salah!
                    </div>
                  <?php endif; ?>
                  <?php if( isset($error2 ) ) : ?>
                    <div class="alert alert-danger" role="alert">
                      Username tidak terdaftar, silahkan registrasi!
                    </div>
                  <?php endif; ?>
                  <form class="user" action="" method="post">
                    <div class="form-group">
                      <input type="username" class="form-control form-control-user" id="username" placeholder="Masukan Username Anda..." name="username" autofocus>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" placeholder="Password" name="password">
                    </div>
                    <button class="btn btn-primary btn-user btn-block" type="submit" name="login">Login</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>
</html>
