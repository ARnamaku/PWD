<?php
include "koneksi.php";
    $id_user = $_POST['id_user'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $pass = md5($_POST[password]);
$sql = "INSERT INTO users(id_user,password, nama_lengkap, email, telp) VALUES ('$id_user', '$pass', 
'$nama_lengkap','$email', '$telp')";
$query=mysqli_query($con, $sql);
mysqli_close($con);
header('location:tampil_user.php');
?>