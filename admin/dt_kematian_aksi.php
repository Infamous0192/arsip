<?php 
include '../koneksi.php';
$tgl_input  = $_POST['tgl_input'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nik = $_POST['nik'];
$tempat_lahir  = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat  = $_POST['alamat'];
$agama = $_POST['agama'];
$negara = $_POST['negara'];
$tgl_kematian = $_POST['tgl_kematian'];
$jam = $_POST['jam'];
$status = $_POST['status'];

mysqli_query($koneksi, "insert into dt_kematian values (NULL,'$tgl_input','$nama','$jenis_kelamin','$nik','$tempat_lahir','$tgl_lahir','$alamat','$agama','$negara','$tgl_kematian','$jam','$status')");
header("location:dt_kematian.php");