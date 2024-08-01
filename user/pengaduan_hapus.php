<?php 
include '../koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "select * from pengaduan where id_pengaduan='$id'");
mysqli_query($koneksi, "delete from pengaduan where id_pengaduan='$id'");
header("location:pengaduan.php");
