<?php include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" tampil_data="IE=edge">
        <meta name="viewport" tampil_data="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Table</title>
    </head>
    <body>
        <h2>Data Mahasiswa</h2>
        <br>
        <table class="table">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Angkatan</th>
                <th colspan="2"></th>
            </tr>

        <?php
        $sql=$conn->query("select * from mahasiswa order by Prodi asc, Angkatan asc");
        while($mhs=$sql->fetch_object()){
        ?>
            <tr>
                <td style="text-align: center;"><?php echo $mhs->NIM; ?></td>
                <td><?php echo $mhs->Nama; ?></td>
                <td style="text-align: center;"><?php echo $mhs->Prodi; ?></td>
                <td style="text-align: center;"><?php echo $mhs->Angkatan; ?></td>
                <td><a href="javascript:void()" onclick="update('<?php echo $mhs->NIM; ?>')">EDIT</a></td>
                <td><a href="javascript:void()" onclick="del('<?php echo $mhs->NIM; ?>')">DELETE</a></td>
            </tr> 

        <?php } ?>
        </table>

        <script>
            function update(NIM){
                $.get("update.php", {NIM}, function(data) {
                    $("#tampil_data").html(data); 
                });
            }

            function del(NIM){
                $.get("hapus.php", {NIM}, function(data) {
                    show();
                    alert('Data berhasil dihapus!');
                });
            }
        </script>
    </body>
</html>