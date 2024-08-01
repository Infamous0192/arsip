<?php 
include '../koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "select * from layanan_online where id_layanan='$id'");
mysqli_query($koneksi, "delete from layanan_online where id_layanan='$id'");
header("location:layanan_online.php");
