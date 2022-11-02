<?php 
    $conn = mysqli_connect("localhost", "root", "", "mbul");


    if (!$conn) {
        die("Gagal terhubung ke database" . mysqli_connect_error());
    }
?>