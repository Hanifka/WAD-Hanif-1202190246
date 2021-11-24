    <?php 
    // koneksi database
    include 'koneksi.php';
    
    // menangkap data id yang di kirim dari url
    $id_buku = $_GET['id_buku'];
    
    
    // menghapus data dari database
    mysqli_query($koneksi,"delete from buku_table where id_buku ='$id_buku");
    
    // mengalihkan halaman kembali ke index.php
    header("location:hanif_home.php");
    
    ?>












