<?php 
include '../koneksi.php';
$tanggal = $_POST['tanggal'];
$nama_user = $_POST['nama_user'];
$nik = $_POST['nik'];
$kk = $_POST['kk'];
$alasan_pindah = $_POST['alasan_pindah'];
$alamat_pindah = $_POST['alamat_pindah'];

mysqli_query($koneksi, "INSERT INTO surat_pindah VALUES (NULL, '$tanggal', '$nama_user', '$nik', '$kk', '$alasan_pindah', '$alamat_pindah')");
header("location:surat_pindah.php");
?>
