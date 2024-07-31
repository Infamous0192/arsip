<?php 
include '../koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "select * from dt_perekaman where id_perekaman='$id'");
mysqli_query($koneksi, "delete from dt_perekaman where id_perekaman='$id'");
header("location:dt_perekaman.php");
