<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama_mahasiswa'];
$jk = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi, "update mahasiswa set nim='$nim', nama_mahasiswa='$nama', 
    jenis_kelamin='$jk', alamat='$alamat' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>