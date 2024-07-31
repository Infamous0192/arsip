<?php 
include '../koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "select * from dt_kematian where id_sementara='$id'");
mysqli_query($koneksi, "delete from dt_kematian where id_sementara='$id'");
header("location:dt_kematian.php");
