<?php 
include '../koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "select * from ktp_sementara where id_sementara='$id'");
mysqli_query($koneksi, "delete from ktp_sementara where id_sementara='$id'");
header("location:ktp_sementara.php");
