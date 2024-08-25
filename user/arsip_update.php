<?php
include '../koneksi.php';

$id = $_POST['id'];
$waktu_upload = $_POST['arsip_waktu_upload'];
$petugas = $_POST['arsip_petugas'];
$kode = $_POST['arsip_kode'];
$nama = $_POST['arsip_nama'];
$jenis = $_POST['arsip_jenis'];
$kategori = $_POST['arsip_kategori'];
$keterangan = $_POST['arsip_keterangan'];
$file_existing = $_POST['arsip_file_existing'];

if ($_FILES['arsip_file']['name'] != '') {
    $file = $_FILES['arsip_file']['name'];
    move_uploaded_file($_FILES['arsip_file']['tmp_name'], '../uploads/' . $file);
} else {
    $file = $file_existing;
}

mysqli_query($koneksi, "UPDATE arsip SET arsip_waktu_upload='$waktu_upload', arsip_petugas='$petugas', arsip_kode='$kode', arsip_nama='$nama', arsip_jenis='$jenis', arsip_kategori='$kategori', arsip_keterangan='$keterangan', arsip_file='$file' WHERE arsip_id='$id'");

header("location:arsip.php");
