<?php
session_start();
include 'koneksi.php';
$database = new database();

if (isset($_SESSION['is_login'])) {
    header('location:hanif_index.php');
}

if (isset($_COOKIE['email'])) {
    $database->relogin($_COOKIE['email']);
    header('location:hanif_index.php');
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (isset($_POST['remember'])) {
        $remember = TRUE;
    }
    else {
        $remember = FALSE;
    }

    if ($database->login($email,$password,$remember)) {
        header('location:hanif_index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        .centered {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

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
                            <a class="nav-link" href="#">Login</a>
                        </li>
                        <li class="nav-item active mr-3">
                            <a class="nav-link" href="hanif_register.php">Register</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Navbar  -->

            <!-- login-->
            <div class="container my-3 ">
                
                <div class="card centered mx-auto px-3 shadow bg-white rounded" style="width: 26rem;">
                
                    <div class="card-body ">
                        <h5 class="card-title" align="center">Login</h5>
                        <hr></hr>
                        <form method="post" action="">
                            <div class="form-group ml-3">
                                <label>E-mail</label>
                                <input type="email" class="form-control" name="email" style="width:80%" placeholder="Masukkan Alamat E-mail">
                            </div>
                            <div class="form-group ml-3">
                                <label>Kata Sandi</label>
                                <input type="password" class="form-control" name="password" style="width:80%" placeholder="Buat Kata Sandi">
                            </div>
                            <div class="form-check ml-3">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                            </div>
                            <div class="form-group mt-3" align="center">
                                <button type="submit" name="login" class="btn btn-primary mb-2">Login</button>
                                <br>
                                Belum punya akun? <a href="hanif_register.php">Registrasi</a>
                            </div>

                        </form>
                    
                    </div>
            
                </div>
                
            </div>

            
            <!--  Content Section -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
</body>

</html>