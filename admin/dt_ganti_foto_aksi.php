<?php 
include '../koneksi.php';
$tgl_input  = $_POST['tgl_input'];
$foto = $_POST['foto'];
$nama = $_POST['nama'];
$no_kk  = $_POST['no_kk'];
$nik = $_POST['nik'];
$tempat_lahir  = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alasan  = $_POST['alasan'];
$agama = $_POST['agama'];
$negara = $_POST['negara'];

$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['foto']['name'];

if($filename == ""){
	    mysqli_query($koneksi, "insert into dt_ganti_foto values (NULL,'$tgl_input','$foto','$nama','$no_kk','$nik','$tempat_lahir','$tgl_lahir','$alasan','$agama','$negara')");
        header("location:dt_ganti_foto.php");
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		header("location:dt_ganti_foto.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/user/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		mysqli_query($koneksi, "insert into dt_ganti_foto values (NULL,'$tgl_input','$file_gambar','$nama','$no_kk','$nik','$tempat_lahir','$tgl_lahir','$alasan','$agama','$negara')");
header("location:dt_ganti_foto.php");
	}
}