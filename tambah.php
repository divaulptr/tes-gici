<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kampus Gici</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <br>
    <a href="index.php">Kembali</a>
    <br>
    <br>
    <form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>NIM</td>
				<td><input type="int" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="varchar" name="nama_mahasiswa"></td>
			</tr>
			<tr>
				<td>JK</td>
				<td><input type="enum" name="jenis_kelamin"></td>
			</tr>
            <tr>
				<td>Alamat</td>
				<td><input type="varchar" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>