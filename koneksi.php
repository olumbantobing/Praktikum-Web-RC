<?php
    $conn = mysqli_connect("localhost", "root", "", "prakmg4");
    if (!$conn){
        die("Koneksi gagal:".mysqli_connect_error());
    }
?>