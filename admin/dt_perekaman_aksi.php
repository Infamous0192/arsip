<?php 
include '../koneksi.php';
$tgl_input  = $_POST['tgl_input'];
$nama = $_POST['nama'];
$no_kk  = $_POST['no_kk'];
$nik = $_POST['nik'];
$tempat_lahir  = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat  = $_POST['alamat'];
$agama = $_POST['agama'];
$negara = $_POST['negara'];

$tanggal = date('Y-m-d');

mysqli_query($koneksi, "insert into dt_perekaman values (NULL,'$tgl_input','$nama','$no_kk','$nik','$tempat_lahir','$tgl_lahir','$alamat','$agama','$negara')");
mysqli_query($koneksi, "INSERT INTO penerbitan (tanggal, nama_user, jenis_dokumen) VALUES ('$tanggal', '{$_SESSION['nama']}', 'perekaman')");
header("location:dt_perekaman.php");