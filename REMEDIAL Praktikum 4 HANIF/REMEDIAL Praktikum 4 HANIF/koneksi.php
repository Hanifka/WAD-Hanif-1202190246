<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wad_modul4";
$port = "3307";

$koneksi = mysqli_connect($servername,$username,$password,$dbname,$port);

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

if (isset($_POST["cobanavbar"])) {
    setcookie('cobanavbar', $_POST["cobanavbar"], strtotime('+14 days'), '/');
  }


class database{
    var $host = "localhost";
    var $user = "root";
    var $pass = "";
    var $name = "wad_modul4";
    var $por = "3307";
    var $connect;

    function __construct(){
        $this->connect = mysqli_connect($this->host, $this->user, $this->pass, $this->name, $this->por);
    }

    

    function login($email, $password, $remember){
        $query = mysqli_query($this->connect, "SELECT * FROM users WHERE email='$email'");
        $data_user = $query->fetch_array();
        if (password_verify($password,$data_user['password'])) {
            if ($remember) {
                setcookie('email', $email, time() + (60*60*24*5), '/');
                setcookie('nama', $data_user['nama'], time() + (60*60*24*5), '/');
            }
            $_SESSION['email'] = $email;
            $_SESSION['nama'] = $data_user['nama'];
            $_SESSION['is_login'] = TRUE;
            return TRUE;
        }
    }
    

    function relogin($email){
        $query = mysqli_query($this->connect, "SELECT * FROM users WHERE email='$email'");
        $data_user = $query->fetch_array();
        $_SESSION['email'] = $email;
        $_SESSION['nama'] = $data_user['nama'];
        $_SESSION['is_login'] = TRUE;
    }
}


?>