<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$tanggal = $_POST['tanggal'];
$nama_user = $_POST['nama_user'];
$kategori_pengaduan = $_POST['kategori_pengaduan'];
$keterangan = $_POST['keterangan'];

mysqli_query($koneksi, "update pengaduan set tanggal='$tanggal', nama_user='$nama_user', kategori_pengaduan='$kategori_pengaduan', keterangan='$keterangan' where id_pengaduan='$id'");
header("location:pengaduan.php");
