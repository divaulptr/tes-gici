<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kampus Gici</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <br>
    <a href="tambah.php">TAMBAH MAHASISWA</a>
    <br>
    <br>

    <form action="index.php" method="get">
        <label>Cari :</label>
        <input type="text" name="cari">
        <input type="submit" value="Cari">
    </form>
 
    <?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        echo "<b>Hasil pencarian : ".$cari."</b>";
    }
    ?>

    <br><br>

    <table border="1">
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama Mahasiwa</th>
			<th>JK</th>
			<th>Alamat</th>
		</tr>

        

		<?php 
        include 'koneksi.php';
        $no = 1;
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $data = mysqli_query($koneksi, "select * from mahasiswa where nama_mahasiswa like '%".$cari."%'");				
        }else{
            $data = mysqli_query($koneksi, "select * from mahasiswa");		
        }
		// $data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['nama_mahasiswa']; ?></td>
				<td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>