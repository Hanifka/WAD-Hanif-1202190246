<?php
include 'koneksi.php';
$database = new database();
session_start();
if (! isset($_SESSION['is_login'])) {
    header('location:hanif_login.php');
}






// Menampilkan Data Profil 
$current = $_SESSION['email'];
$sql = "SELECT * FROM users WHERE email = '$current'";
$data = mysqli_query($koneksi,$sql);
// END

// Update Profil
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    
    if ($_POST['confirm_password'] == $_POST['password']){
        try {
            $sql = "UPDATE users SET nama='$nama', email='$email', no_hp='$no_hp', password='$password' WHERE email='$email'";
            $stmt = $koneksi->prepare($sql);
            $stmt->execute();
            header('Refresh:2');
            echo '<div class="alert alert-warning" role="alert">';
            echo 'Berhasil di update!';
            echo '</div>';
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $koneksi = null;
    }
    else{
            header('Refresh:2');
            echo '<div class="alert alert-danger" role="alert">';
            echo 'Gagal di update!';
            echo '</div>';
    }
    }
else{
    if(isset($_POST['cancel'])){
        header('location: hanif_index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="import/css/bootstrap.css">
    <script type="text/javascript" src="import/js/jquery.js"></script>
    <script type="text/javascript" src="import/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/fe18d29869.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body class="bg-white">
    <!-- Navbar Section -->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <a class="navbar-brand" href="hanif_index.php">EAD Travel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active mr-3">
                    <a class="nav-link" href="hanif_booking.php"><i class="fa fa-shopping-cart" style="font-size:22px"></i></a>
                </li>
                <li class="nav-item active mr-3">
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Lorem ipsum, dolor 
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="hanif_profile.php">Profile</a>
                            <a class="dropdown-item" href="logout.php">Log Out</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!--  Navbar Section -->
    <!-- Content Section -->
    <div class="container my-3">
        <div class="card centered mx-auto" style="width: 70%;">
            <div class="card-body">
                <h2 class="card-title" align="center">Profile</h2>
                <form method="post" action="">
                    <?php
                        while ($row = mysqli_fetch_assoc($data)) {
                    ?>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control-plaintext" name="email" value="<?php echo $row['email'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" value="<?php echo $row['nama'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nomor Handphone</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="no_hp" value="<?php echo $row['no_hp'] ?>">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Password Confirm</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="confirm_password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Warna Navbar</label>
                            <div class="col-sm-10">
                                <select id="select-color" name="warna_nav">
                                    <option value="">Coming Soon</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <button type="submit" class="btn btn-primary btn-block" name="update">Submit</button>
                            <button type="submit" class="btn btn-danger btn-block" name="cancel">Cancel</button>
                        </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
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

    <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a data-toggle="modal" data-target="#exampleModal">HANIF_1202190246</a>
</div>
            
</footer>
</html>