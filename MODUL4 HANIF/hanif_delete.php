<?php
    include 'koneksi.php';
    $sql = "DELETE FROM bookings WHERE id='" . $_GET['name'] . "'";
    if (mysqli_query($koneksi, $sql)) {
        echo "Record deleted successfully";
        header('location:hanif_booking.php');
    }
    else {
        echo "Error";
    }
    mysqli_close($koneksi);
?>