<?php
    include "koneksi.php";
    $NIM=$_GET['NIM'];

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
        <title>Form</title>
    </head>
    <body>
        <form id="form" onsubmit="simpan(); return false;">
            <table class="table">
                <h3>Update Data Mahasiswa</h3>
                <br>
                <p>NIM = <?php echo $NIM;?></p>
                <input type="hidden" name="NIM" value="<?php echo $NIM;?>">
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
            <button type="submit" value="simpan">Update</button>
        </form>

        <script>
            function simpan(){
                $.ajax({
                    type: "POST",
                    url: "simpan.php",
                    data: $("#form").serialize(),
                    success: function(data) {
                        show();
                        alert('Data berhasil diupdate!')
                    },
                    error: function() {
                        alert('error handling here');
                    }
                });
            }
        </script>
    </body>
</html>