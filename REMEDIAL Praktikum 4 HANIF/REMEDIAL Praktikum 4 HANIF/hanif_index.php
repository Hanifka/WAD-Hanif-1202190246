<?php
include 'koneksi.php';
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

// Item1
if(isset($_POST['item1'])){
    $date = date('Y-m-d H:i:s', strtotime($_POST['item_date']));
    $sql = "INSERT INTO bookings (user_id,nama_tempat ,lokasi ,harga,tanggal) VALUES ('$id_user', 'Ocean Park','Tangerang Selatan','90000', '$date')";
    
    $insert = mysqli_query($koneksi, $sql);
    if ($insert) {
            header("Refresh:2");
            echo '<div class="alert alert-warning" role="alert">';
            echo 'Berhasil Ditambahkan';
            echo '</div>';
    }
    else{
            header("Refresh:2");
            echo '<div class="alert alert-danger" role="alert">';
            echo 'Gagal Menambahkan';
            echo '</div>';
    }
}
// Item2
if(isset($_POST['item2'])){
    $date = date('Y-m-d H:i:s', strtotime($_POST['item_date']));
    $sql = "INSERT INTO bookings (user_id,nama_tempat ,lokasi ,harga,tanggal) 
    VALUES ('$id_user', 'Scientia Square Park','Tangerang','200000', '$date')";
    
    $insert = mysqli_query($koneksi, $sql);
    if ($insert) {
            header("Refresh:2");
            echo '<div class="alert alert-warning" role="alert">';
            echo 'Berhasil Ditambahkan';
            echo '</div>';
    }
    else{
            header("Refresh:2");
            echo '<div class="alert alert-danger" role="alert">';
            echo 'Gagal Menambahkan';
            echo '</div>';
    }
}
// Item3
if(isset($_POST['item3'])){
    $date = date('Y-m-d H:i:s', strtotime($_POST['item_date']));
    $sql = "INSERT INTO bookings (user_id,nama_tempat ,lokasi ,harga,tanggal) VALUES ('$id_user', 'Pantai Seribu','Jakarta','500000', '$date')";
    
    $insert = mysqli_query($koneksi, $sql);
    if ($insert) {
            header("Refresh:2");
            echo '<div class="alert alert-warning" role="alert">';
            echo 'Berhasil Ditambahkan';
            echo '</div>';
    }
    else{
            header("Refresh:2");
            echo '<div class="alert alert-danger" role="alert">';
            echo 'Gagal Menambahkan';
            echo '</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
    <link rel="stylesheet" type="text/css" href="import/css/bootstrap.css">
    <script type="text/javascript" src="import/js/jquery.js"></script>
    <script type="text/javascript" src="import/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="import/css/bootstrap.css">
    <script type="text/javascript" src="import/js/jquery.js"></script>
    <script type="text/javascript" src="imports/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/fe18d29869.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" type="text/css" href="import/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body class="bg-white">
    <!-- Navbar Section -->
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
    <!-- Content Section-->
    <div class="container my-5">
        <div class="card mx-auto border-0" style="width:65%">
            <div class="border rounded bg-info">
                <br>
                <h1 class="mt-3" align="center">EAD Travel</h1>
                <p class="mb-3"align="center">Destinasi Wisata Sekitar JABODETABEK</p>
                <br>
            </div>
            <form method="post" action="">
                <div class="card-body pt-0 px-3">
                    <div class="row border rounded">
                        <div class="col card border-0 px-0">
                            <img class="card-img-top" src="https://cdn.nativeindonesia.com/foto/ocean-park-bsd-nan-mempesona/Landscape-Ocean-Park-BSD.webp" alt="Card image cap" style="height:199.5px;height:199.5px">
                            <div class="card-body px-3">
                                <h5 class="card-title">Ocean Park</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non architecto amet cupiditate dolores repudiandae error reiciendis omnis nisi, temporibus assumenda voluptas aperiam tempore deleniti perspiciatis, in quibusdam porro voluptas aperiam tempore deleniti perspiciatis, in quibusdam porro quibusdam porro voluptas aperiam tempore deleniti perspiciatis, in quibusdam porro</p>
                                <hr>
                                <p><b>Rp90.000</b></p>
                            </div>
                        </div>
                        <div class="col card border-top-0 border-bottom-0 px-0">
                            <img class="card-img-top" src="https://cdn.sindonews.net/dyn/620/content/2020/01/10/34/1493479/nikmati-kenyamanan-car-free-day-di-area-scientia-square-park-8lR-thumb.jpg" alt="Card image cap" style="height:199.5px;height:199.5px">
                            <div class="card-body px-3">
                                <h5 class="card-title">Scientia Square Park</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non architecto amet cupiditate dolores repudiandae error reiciendis omnis nisi, temporibus assumenda voluptas aperiam tempore deleniti perspiciatis, in quibusdam porro voluptas aperiam tempore deleniti perspiciatis, in quibusdam porro quibusdam porro voluptas aperiam tempore deleniti perspiciatis, in quibusdam porro</p>
                                <hr>
                                <p><b>Rp200.000</b></p>
                            </div>
                        </div>
                        <div class="col card border-0 px-0">
                            <img class="card-img-top" src="https://img.okezone.com/content/2021/09/06/408/2466956/5-pulau-dengan-spot-snorkeling-terindah-di-kepulauan-seribu-mana-favoritmu-LGMtxB0ayY.jpg" alt="Card image cap" style="height:199.5px;height:199.5px">
                            <div class="card-body px-3">
                                <h5 class="card-title">Pulau Seribu</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non architecto amet cupiditate dolores repudiandae error reiciendis omnis nisi, temporibus assumenda voluptas aperiam tempore deleniti perspiciatis, in quibusdam porro voluptas aperiam tempore deleniti perspiciatis, in quibusdam porro quibusdam porro voluptas aperiam tempore deleniti perspiciatis, in quibusdam porro</p>
                                <hr>
                                <p><b>Rp500.000</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="row border rounded" align="center">
                        <div class="col card border-0">
                            <button type="button" name="item1" class="btn btn-primary btn-sm my-3" data-target="#modal1" data-toggle="modal" style="width:100%">Pesan</button>
                        </div>
                        <div class="col card border-top-0 border-bottom-0">
                            <button type="button" name="item2" class="btn btn-primary btn-sm my-3" data-target="#modal2" data-toggle="modal" style="width:100%">Pesan</button>
                        </div>
                        <div class="col card border-0">
                            <button type="button" name="item3" class="btn btn-primary btn-sm my-3" data-target="#modal3" data-toggle="modal" style="width:100%">Pesan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- MODAL 1-->
  <div class="modal fade" id="modal1" role="dialog" aria-labelledby="modalLabel" tabindex="-1">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">Pilih Tanggal </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="post">
            <input class="form-control" type="datetime-local" name="item_date" placeholder="Select DateTime">
          
              <div class="modal-body" style="height: 50px;">
           
          </div>
            <div class="modal-footer">
            
           <button type="submit" name="item1" class="btn btn-primary btn-sm my-3" style="width:100%">Pesan Tiket</button>
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- MODAL 2-->
    <div class="modal fade" id="modal2" role="dialog" aria-labelledby="modalLabel" tabindex="-1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">Pilih Tanggal Perjalananmu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="post">
            <input class="form-control" type="datetime-local" name="item_date" placeholder="Select DateTime">
          
              <div class="modal-body" style="height: 50px;">
            
          </div>
        
          <div class="modal-footer">

            <button type="submit" name="item2" class="btn btn-primary btn-sm my-3" style="width:100%">Pesan Tiket</button>
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <!-- MODAL 3-->
   <div class="modal fade" id="modal3" role="dialog" aria-labelledby="modalLabel" tabindex="-1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">Pilih Tanggal Perjalananmu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"readonly="true">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="post">
            <input class="form-control" type="datetime-local" name="item_date" placeholder="Select DateTime">
          
              <div class="modal-body" style="height: 50px;">
            
          </div>
    
                <button type="submit" name="item3" class="btn btn-primary btn-sm my-3" style="width:100%">Pesan Tiket</button>
            </form>
          </div>
        </div>
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
 



    <!-- Content Section -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    

    <!-- Bootstrap Js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    

    <!-- Datepicker JS-->
    <script src="js/datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <script src="js/datepicker.js"></script>

    <script>
      config = {
        enableTime: true,
        dateFormat: "Y-m-d H:i:s",
        altInput: true,
      }
    </script>

    <script>
      $(function() {
          $('[data-toggle="datepicker"]').datepicker({
              autoHide: true,
              zIndex: 2048,
          });
      });
    </script>

    <script>flatpickr("input[type=datetime-local]", {});</script>
   
</html>