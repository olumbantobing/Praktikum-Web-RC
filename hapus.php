<?php
    include "koneksi.php";
    $conn->query("delete from mahasiswa where NIM='$_GET[NIM]'");
?>