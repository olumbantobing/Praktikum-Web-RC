<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas Praktikum Minggu 7</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<!-- <div class="judul">		
		<h2>Form Pendataan Kehilangan Kendaraan</h2>
	</div>

	<br>
	<a class="a" href="index.php">← Lihat Semua Data</a> -->
	
	
	<form action="proses_edit.php" method="post">
		<?php 
		include "index.php";
		$id = $_GET['id'];
		$query = mysqli_query($koneksi,"SELECT * FROM kendaraan WHERE id = '$id'") or die(mysqli_error());
		$data = mysqli_fetch_array($query);
		?>
		
		<h3>Edit Data Kendaraan</h3>
		<table>
			<tr>
				<td>Jenis Kendaraan</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="jenis" value="<?php echo $data['jenis'] ?>" required>
				</td>					
			</tr>	
			<tr>
				<td>Merk/Type</td>
				<td><input type="text" name="merk" value="<?php echo $data['merk'] ?>" required></td>					
			</tr>	
			<tr>
				<td>Warna Kendaraan</td>
				<td><input type="text" name="warna" value="<?php echo $data['warna'] ?>" required></td>					
			</tr>	
			<tr>
				<td>Tahun Pembuatan</td>
				<td><input type="number" name="tahun" value="<?php echo $data['tahun'] ?>" required></td>					
			</tr>
			<tr>
				<td>Bahan Bakar</td>
				<td><input type="text" name="bbm" value="<?php echo $data['bbm'] ?>" required></td>					
			</tr>	
			<tr>
				<td>Nomor Polisi</td>
				<td><input type="text" name="nopol" value="<?php echo $data['nopol'] ?>" required></td>					
			</tr>
			<tr>
				<td>Nomor Rangka</td>
				<td><input type="text" name="norangka" value="<?php echo $data['norangka'] ?>" required></td>					
			</tr>
			<tr>
				<td>Nomor Mesin</td>
				<td><input type="text" name="nomesin" value="<?php echo $data['nomesin'] ?>" required></td>					
			</tr>
			<tr>
				<td>Pemilik</td>
				<td><input type="text" name="pemilik" value="<?php echo $data['pemilik'] ?>" required></td>					
			</tr>
			<tr>
				<td>Alamat Pemilik</td>
				<td><textarea name="alamat" required><?php echo $data['alamat'] ?></textarea></td>					
			</tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>				
			</tr>				
		</table>
	</form>
</body>
</html>