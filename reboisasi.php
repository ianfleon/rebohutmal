<?php  
// panggil file header_index.php
require "templates/header.php";
require "functions.php";

// cek jika tombol kirim sudah ditekan, jalankan function
if( isset($_POST['submit']) )
{
    $result = reboisasi($_POST);
    global $conn;
    if( mysqli_affected_rows($conn) ) 
    {
        $notifikasi = true;
        echo "
        <meta content='2; url=index.php' http-equiv='refresh'>
        ";
    }
}
// akhir

?>
<!-- Form Reboisasi -->
<div class="container mt-5 mb-5">

    <?php if( @$notifikasi == true ) : ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-success" role="alert">
              Permintaan <strong>berhasil</strong> dikirim!
            </div>
        </div>  
    </div>
    <?php endif; ?>
    <div class="row text-center mb-3">
        <h4>Form Reboisasi</h4>
    </div>

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
    <div class="mb-3 col-md-2">
        <label for="jumlah_tanaman" class="form-label">Jumlah Bibit</label>
        <input type="number" class="form-control" id="jumlah_tanaman" value="number" name="jumlahBibit">
        <div class="form-text">Jumlah bibit yang dibutuhkan.</div>
    </div>
    <div class="mb-5">
        <label for="jenisKerusakan" class="form-label">Jenis Kerusakan</label>
        <select class="form-select" aria-label="Default select example" name="jenisKerusakan" id="jenisKerusakan">
            <option selected>-- Pilih jenis kerusakan --</option>
            <option value="Kebakaran">Kebakaran</option>
            <option value="Penebangan liar">Penebangan liar</option>
        </select>
    </div>    
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
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
