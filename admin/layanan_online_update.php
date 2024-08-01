<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$tanggal = $_POST['tanggal'];
$nama_user = $_POST['nama_user'];
$jenis_pelayanan = $_POST['jenis_pelayanan'];

mysqli_query($koneksi, "update layanan_online set tanggal='$tanggal', nama_user='$nama_user', jenis_pelayanan='$jenis_pelayanan' where id_layanan='$id'");
header("location:layanan_online.php");
