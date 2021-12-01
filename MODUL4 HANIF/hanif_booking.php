<?php
include 'koneksi.php';;
$database = new database();
session_start();
if (! isset($_SESSION['is_login'])) {
    header('location:hanif_login.php');
}

// Get userid   
$current = $_SESSION['email'];
$sql = "SELECT id FROM users WHERE email = '$current'";
$user_id = mysqli_query($koneksi,$sql);
$id_user=0;
while ($user_ide = mysqli_fetch_assoc($user_id)) {
    $id_user = $user_ide['id'];
}

//Menampilkan item
$query = "SELECT * FROM bookings WHERE user_id = '$id_user'";
$select = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
    <link rel="stylesheet" type="text/css" href="import/css/bootstrap.css">
    <script type="text/javascript" src="import/js/jquery.js"></script>
    <script type="text/javascript" src="import/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body class="bg-white">
    <!-- Navbar Section-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <a class="navbar-brand" href="hanif_index.php"><b>EAD Travel</b></a>
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
    <!-- Navbar Section -->
    <!-- Content Section -->
    <div class="container my-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama tempat</th>
                    <th scope="col">location</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Estimasi Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <?php
                $i = 0;
                $totalharga = 0;
                while ($selects = mysqli_fetch_assoc($select)) {
                    echo '<tbody>';
                    echo '<tr>';
                    //
                    echo '<th scope="row">';
                    echo $i+=1;
                    echo '</th>';
                    // 
                    echo '<td>';
                    echo $selects['nama_tempat'];
                    echo '</td>';

                    echo '<td>';
                    echo $selects['lokasi'];
                    echo '</td>';

                    echo '<td>';
                    echo $selects['tanggal'];
                    echo '</td>';

                    echo '<td>'; 
                    echo 'Rp ' . number_format($selects['harga'], 0, ",", ",");
                    $totalharga = $totalharga + $selects['harga'];
                    echo '</td>';
                    echo '<td>'; ?>

                    <a href="hanif_delete.php?name=<?php echo $selects['id']; ?>" class="btn btn-danger btn-md" onclick="alert('Item berhasil dihapus')">Hapus</a>

                    <?php echo '</td>';
                    echo '</tr>';
                    echo '</tbody>';
                }
                    echo '<tbody>';
                    echo '<tr>';

                    echo '<th scope="row">';
                    echo 'Total';
                    echo '</th>';

                    echo '<td>';
                    echo '';
                    echo '</td>';

                    echo '<td>';
                    echo '';
                    echo '</td>';

                    echo '<td>';
                    echo '';
                    echo '</td>';

                    echo '<td>';
                    echo '<b>';
                    echo 'Rp ' . number_format($totalharga, 0, ",", ",");
                    echo '</b>';
                    echo '</td>';

                    echo '<td>';
                    echo '';
                    echo '</td>';
            ?>
        </table>
        <br><br><br><br>
        <!-- Footer -->
        
        <!-- Footer -->
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

    <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a data-toggle="modal" data-target="#exampleModal">HANIF_1202190246</a>
</div>
</html>