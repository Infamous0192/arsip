<?php 
session_start();
include '../koneksi.php';
$id  = $_POST['id'];
$tgl_input  = $_POST['tgl_input'];
$nama = $_POST['nama'];
$nama_petugas = $_POST['nama_petugas'];
$nik = $_POST['nik'];
$tempat_lahir  = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat  = $_POST['alamat'];
$agama = $_POST['agama'];
$negara = $_POST['negara'];
$tgl_kematian = $_POST['tgl_kematian'];
$jam = $_POST['jam'];
$status = $_POST['status'];
$nama_petugas = $_SESSION['nama'];

mysqli_query($koneksi, "update dt_kematian set nama='$nama', nama_petugas='$nama_petugas', nik='$nik', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat', agama='$agama', negara='$negara', tgl_kematian='$tgl_kematian', jam='$jam', status='$status', nama_petugas='$nama_petugas' where id_sementara='$id'");
header("location:dt_kematian.php");
