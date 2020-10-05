<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kampus Gici</title>
</head>
<body>
    <h2>Pembaruan Data Mahasiswa</h2>
    <br>
    <a href="index.php">Kembali</a>
    <br><br>
    <?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
                <tr>    
					<td>NIM</td>
					<td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="int" name="nim" value="<?php echo $d['nim']; ?>">
                    </td>
				</tr>
                <tr>			
					<td>Nama</td>
					<td>	
						<input type="varchar" name="nama_mahasiswa" value="<?php echo $d['nama_mahasiswa']; ?>">
					</td>
				</tr>
				<tr>
					<td>JK</td>
					<td><input type="enum" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="varchar" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>