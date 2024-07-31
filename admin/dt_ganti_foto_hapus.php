<?php 
include '../koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "select * from dt_ganti_foto where id_ganti='$id'");
mysqli_query($koneksi, "delete from dt_ganti_foto where id_ganti='$id'");
header("location:dt_ganti_foto.php");
