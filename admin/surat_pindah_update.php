<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$tanggal = $_POST['tanggal'];
$nama_user = $_POST['nama_user'];
$nik = $_POST['nik'];
$kk = $_POST['kk'];
$alasan_pindah = $_POST['alasan_pindah'];
$alamat_pindah = $_POST['alamat_pindah'];

mysqli_query($koneksi, "update surat_pindah set tanggal='$tanggal', nama_user='$nama_user', nik='$nik', kk='$kk', alasan_pindah='$alasan_pindah', alamat_pindah='$alamat_pindah' where id_surat_pindah='$id'");
header("location:surat_pindah.php");
