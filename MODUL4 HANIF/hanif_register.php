<?php
include_once 'koneksi.php';
$database = new database();
if (isset($_POST['register'])) {
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    
    $no_hp = mysqli_real_escape_string($koneksi, $_POST['no_hp']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $konfirmasi_password = mysqli_real_escape_string($koneksi, $_POST['konfirmasi_password']);
    $query = "SELECT * FROM users";
    $result = mysqli_query($koneksi, $query);
    
    $row = mysqli_num_rows($result);
    $row++;
    
    if ($_POST['konfirmasi_password'] == $_POST['password']) {
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        
        
        $query = "INSERT INTO users (id,nama, email,password,no_hp) 
                VALUES('$row','$nama', '$email', '$password',$no_hp)";
        mysqli_query($koneksi, $query);
        header("Refresh:2; url=hanif_login.php");
        echo '<div class="alert alert-warning" role="alert">';
        echo 'Berhasil registrasi';
        echo '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="import/css/bootstrap.css">
    <script type="text/javascript" src="import/js/jquery.js"></script>
    <script type="text/javascript" src="import/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body style="background-color:#e3f2fd">
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <a class="navbar-brand" href="#"><b>EAD Travel</b> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active mr-3">
                    <a class="nav-link" href="hanif_login.php">Login</a>
                </li>
                <li class="nav-item active mr-3">
                    <a class="nav-link" href="hanif_register.php">Register</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar  -->

    <!--  Navbar Section -->

    <!-- Content Section -->
    <div class="container my-3">
        <div class="card my-4 mx-auto px-3" style="width: 26rem;">
            <div class="card-body">
                <h5 class="card-title" align="center">Registrasi</h5>
                <hr></hr>
                <form method="post" action="">
                    <div class="form-group ml-3">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" style="width:80%" placeholder="Masukkan Nama Lengkap">
                    </div>
                    <div class="form-group ml-3">
                        <label>E-mail</label>
                        <input type="email" class="form-control" name="email" style="width:80%" placeholder="Masukkan Alamat E-mail">
                    </div>
                    <div class="form-group ml-3">
                        <label>No. Handphone</label>
                        <input type="number" class="form-control" name="no_hp" style="width:80%" placeholder="Masukkan Nomor Handphone">
                    </div>
                    <div class="form-group ml-3">
                        <label>Kata Sandi</label>
                        <input type="password" class="form-control" name="password" style="width:80%" placeholder="Buat Kata Sandi">
                    </div>
                    <div class="form-group ml-3">
                        <label>Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control" name="konfirmasi_password" style="width:80%" placeholder="Konfirmasi Kata Sandi">
                    </div>
                    <div class="form-group ml-3" align="center">
                        <button type="submit" name="register" class="btn btn-primary mb-2">Daftar</button>
                        <br>
                        Sudah punya akun? <a href="hanif_login.php">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Content Section -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Created By</h5>
        
      </div>
      <div class="modal-body">
        <p>NAMA     = Hanif Kurniawan A</p>
        <p>Nim      = 1202190246</p>
        <p>Waktu    = 20 Jam+ (Tidak Termasuk Istirahat)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" aria-label="Close" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
    <!--  Content Section -->
</body>
<footer class="page-footer font-small bg-info">

    <div class="footer-copyright text-center py-3">?? 2021 Copyright:
    <a data-toggle="modal" data-target="#exampleModal">HANIF_1202190246</a>
</div>
</html>