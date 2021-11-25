<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas Praktikum Minggu 7</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="judul">		
		<h2>Form Pendataan Kehilangan Kendaraan</h2>
	</div>

	<br>
	<a class="a" href="index.php">← Lihat Semua Data</a>

	<h3>Input Data Kendaraan Baru</h3>
	<form action="proses_tambah.php" method="post">		
		<table>
			<tr>
				<td>Jenis Kendaraan</td>
				<td><input type="text" name="jenis" required></td>					
			</tr>	
			<tr>
				<td>Merk / Type</td>
				<td><input type="text" name="merk" required></td>					
			</tr>	
			<tr>
				<td>Warna Kendaraan</td>
				<td><input type="text" name="warna" required></td>					
			</tr>	
			<tr>
				<td>Tahun Pembuatan</td>
				<td><input type="number" name="tahun" required></td>					
			</tr>
			<tr>
				<td>Bahan Bakar</td>
				<td><input type="text" name="bbm" required></td>					
			</tr>	
			<tr>
				<td>Nomor Polisi</td>
				<td><input type="text" name="nopol" required></td>					
			</tr>
			<tr>
				<td>Nomor Rangka</td>
				<td><input type="text" name="norangka" required></td>					
			</tr>
			<tr>
				<td>Nomor Mesin</td>
				<td><input type="text" name="nomesin" required></td>					
			</tr>
			<tr>
				<td>Pemilik</td>
				<td><input type="text" name="pemilik" required></td>					
			</tr>
			<tr>
				<td>Alamat Pemilik</td>
				<td><textarea name="alamat" required></textarea></td>					
			</tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>					
			</tr>				
		</table>
	</form>
	
</body>
</html>