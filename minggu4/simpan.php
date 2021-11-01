<?php
    include "koneksi.php";

    $sql=$conn->query("select * from mahasiswa where NIM='".$_POST['NIM']."'");
    $jml=$sql->num_rows;
    if($jml>0){
        $conn->query("update mahasiswa set Nama='".$_POST['Nama']."', Prodi='".$_POST['Prodi']."', Angkatan='".$_POST['Angkatan']."' 
        where NIM='".$_POST['NIM']."'");
    }else{
        $conn->query("insert into mahasiswa(NIM, Nama, Prodi, Angkatan) values('".$_POST['NIM']."', 
        '".$_POST['Nama']."', '".$_POST['Prodi']."', '".$_POST['Angkatan']."')");
    }
?>