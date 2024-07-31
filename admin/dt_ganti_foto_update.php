<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$tgl_input  = $_POST['tgl_input'];
$foto  = $_POST['foto'];
$nama = $_POST['nama'];
$no_kk  = $_POST['no_kk'];
$nik = $_POST['nik'];
$tempat_lahir  = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alasan  = $_POST['alasan'];
$agama = $_POST['agama'];
$negara = $_POST['negara'];




// cek gambar
$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if($pwd=="" && $filename==""){
	    mysqli_query($koneksi, "update dt_ganti_foto set nama='$nama', foto='$foto', no_kk='$no_kk', nik='$nik', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', alasan='$alasan', agama='$agama', negara='$negara' where id_ganti='$id'");
        header("location:dt_ganti_foto.php");
}elseif($pwd==""){
	if(!in_array($ext,$allowed) ) {
		header("location:dt_ganti_foto.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/user/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		mysqli_query($koneksi, "update dt_ganti_foto set nama='$nama', foto='$file_gambar', no_kk='$no_kk', nik='$nik', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', alasan='$alasan', agama='$agama', negara='$negara' where id_ganti='$id'");	
		header("location:dt_ganti_foto.php?alert=berhasil");
	}
}elseif($filename==""){
	    mysqli_query($koneksi, "update dt_ganti_foto set nama='$nama', foto='$foto', no_kk='$no_kk', nik='$nik', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', alasan='$alasan', agama='$agama', negara='$negara' where id_ganti='$id'");	
		header("location:dt_ganti_foto.php?alert=berhasil");
}