<?php
    include "koneksi.php";
    if(isset($_GET['NIM'])){
        $NIM=$_GET['NIM'];
    }else{
        $NIM="";
    }

    $Nama="";
    $Prodi="";
    $Angkatan="";

    $sql=$conn->query("select * from mahasiswa where NIM='$NIM'");
    while($mhs=$sql->fetch_object()){
        $Nama=$mhs->Nama;
        $Prodi=$mhs->Prodi;
        $Angkatan=$mhs->Angkatan;
    } 
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta chamhset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Masukkan Data Mahasiswa</h3>
    <br>
    <form id="form" onsubmit="simpan(); return false;">
        <table class="table">
            <tr>
                <td>NIM</td>
                <td><input type="number" name="NIM" value="<?php echo $NIM;?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama" value="<?php echo $Nama;?>"></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td><input type="text" name="Prodi" value="<?php echo $Prodi;?>"></td>
            </tr>
            <tr>
                <td>Angkatan</td>
                <td><input type="number" name="Angkatan" value="<?php echo $Angkatan;?>"></td>
            </tr>

        </table>
        <br>
        <button type="submit" value="simpan">Create</button>
    </form>
    
    <script>
        function simpan(){
            $.ajax({
                type: "POST",
                url: "simpan.php",
                data: $("#form").serialize(),
                success: function(data) {
                    show();
                    alert('Data berhasil disimpan!')
                },
                error: function() {
                    alert('error handling here');
                }
            });
        }
    </script>
</body>
</html>
