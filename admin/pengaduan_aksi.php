<?php 
include '../koneksi.php';
$tanggal = $_POST['tanggal'];
$nama_user = $_POST['nama_user'];
$kategori_pengaduan = $_POST['kategori_pengaduan'];
$keterangan = $_POST['keterangan'];

mysqli_query($koneksi, "INSERT INTO pengaduan VALUES (NULL, '$tanggal', '$nama_user', '$kategori_pengaduan', '$keterangan')");
mysqli_query($koneksi, "INSERT INTO penerbitan (tanggal, nama_user, jenis_dokumen) VALUES ('$tanggal', '$nama_user', 'pengaduan')");
header("location:pengaduan.php");
?>
