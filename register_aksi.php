<?php
include 'koneksi.php';
$nama  = $_POST['name'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$rand = rand();
$allowed =  array('gif', 'png', 'jpg', 'jpeg');
$filename = $_FILES['foto']['name'];

if ($filename == "") {
    mysqli_query($koneksi, "insert into user values (NULL,'$nama','$username','$password','')");
    header("location:user/");
} else {
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $allowed)) {
        header("location:register.php?alert=gagal");
    } else {
        move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/user/' . $rand . '_' . $filename);
        $file_gambar = $rand . '_' . $filename;
        mysqli_query($koneksi, "insert into user values (NULL,'$nama','$username','$password','$file_gambar')");

        $hash_password = md5($_POST['password']);
        $login = mysqli_query($koneksi, "SELECT * FROM user WHERE user_username='$username' AND user_password='$hash_password'");
        $cek = mysqli_num_rows($login);

        if ($cek > 0) {
            session_start();
            $data = mysqli_fetch_assoc($login);
            $_SESSION['id'] = $data['user_id'];
            $_SESSION['nama'] = $data['user_nama'];
            $_SESSION['username'] = $data['user_username'];
            $_SESSION['status'] = "user_login";

            header("location:user/");
        } else {
            header("location:register.php?alert=gagal");
        }
    }
}
