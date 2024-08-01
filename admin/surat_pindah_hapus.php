<?php 
include '../koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "select * from surat_pindah where id_surat_pindah='$id'");
mysqli_query($koneksi, "delete from surat_pindah where id_surat_pindah='$id'");
header("location:surat_pindah.php");
