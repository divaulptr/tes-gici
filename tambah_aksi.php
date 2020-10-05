<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama_mahasiswa'];
$jk = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('','$nim', '$nama','$jk','$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>