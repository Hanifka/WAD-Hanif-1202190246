<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form


$id_buku = $_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$penulis_buku = $_POST['penulis_buku'];
$tahun_terbit = $_POST['tahun_terbit'];
$deskripsi = $_POST['deskripsi'];
$bahasa = $_POST['bahasa'];
$tag = implode(', ', $_POST['tag']); 
// echo $id_buku;
// echo $judul_buku;
// echo $penulis_buku;
// echo $tahun_terbit;
// echo $deskripsi;

mysqli_query($koneksi,"update buku_table set judul_buku='$judul_buku', penulis_buku='$penulis_buku', tahun_terbit='$tahun_terbit',deskripsi='$deskripsi', bahasa='$bahasa' , tag ='$tag' where id_buku='$id_buku'");

header("location:hanif_home.php");
?>

