<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_buku = rand();
$judul_buku = $_POST['judul_buku'];
$penulis_buku = $_POST['penulis_buku'];
$tahun_terbit = $_POST['tahun_terbit'];
$deskripsi = $_POST['deskripsi'];
$bahasa = $_POST['bahasa'];

$tag = implode(', ', $_POST['tag']); 

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['gambar']['name'];
$ukuran = $_FILES['gambar']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:Hanif_form.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO buku_table VALUES('$id_buku','$judul_buku','$penulis_buku','$tahun_terbit','$deskripsi','$xx','$tag','$bahasa')");
		header("location:Hanif_form.php?alert=berhasil");
	}else{
		header("location:Hanif_form.php?alert=gagal_ukuran");
	}
}
 
// mengalihkan halaman kembali ke index.php
header("location:hanif_home.php");
 
?>


