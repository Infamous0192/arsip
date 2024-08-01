<?php 
include '../koneksi.php';
$tanggal = $_POST['tanggal'];
$nama_user = $_POST['nama_user'];
$jenis_pelayanan = $_POST['jenis_pelayanan'];

mysqli_query($koneksi, "INSERT INTO layanan_online VALUES (NULL, '$tanggal', '$nama_user', '$jenis_pelayanan')");
header("location:layanan_online.php");
?>
