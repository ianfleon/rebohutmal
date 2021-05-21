<?php  
// panggil file header.php
require "templates/header.php";
require "functions.php";

// cek jika tombol kirim sudah ditekan, jalankan function
if( isset($_POST['kirim']) )
{
    $result = kontak($_POST,'kontak');
    if( $result > 0 ) 
    {
        $notifikasi = true;
        echo "
            <meta content='1; url=index.php' http-equiv='refresh'>
        ";
    }
}
// akhir


?>




<!-- Form Reboisasi -->
<div class="container mt-5 mb-5">

    <div class="row text-center mb-3">
        <h4>Hubungi Kami</h4>
    </div>

    <!-- notifikasi sukses -->
    <?php if( @$notifikasi ) : ?>
    <div class="row">
        <div class="col">
            <div class='alert alert-success' role='alert'>
               <strong>Pesan Terkirim!</strong>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!-- akhir -->

    <form action="" method="post">
        <div class="mb-3">
            <label for="nama_pengguna" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama_pengguna" name="nama">
        </div>
        <div class="mb-3">
            <label for="email_pengguna" class="form-label">Email</label>
            <input type="email" class="form-control" id="email_pengguna" name="email">
        </div>
        <div class="form-floating mb-5">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="pesan"></textarea>
            <label for="floatingTextarea2">Pesan</label>
            <div class="form-text">Tulis pesan anda untuk kami.</div>
        </div>
        <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
    </form>

</div>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
-->
<!-- Footer -->
<footer class="footer">
    <p class="txt-credit">Rebohutmal, 2021. Terima kasih Hutan!</p>
</footer>

</body>
</html>
