<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$tgl_input  = $_POST['tgl_input'];
$nama = $_POST['nama'];
$no_kk  = $_POST['no_kk'];
$nik = $_POST['nik'];
$tempat_lahir  = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat  = $_POST['alamat'];
$agama = $_POST['agama'];
$negara = $_POST['negara'];

mysqli_query($koneksi, "update ktp_sementara set nama='$nama', no_kk='$no_kk', nik='$nik', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat', agama='$agama', negara='$negara' where id_sementara='$id'");
header("location:ktp_sementara.php");
