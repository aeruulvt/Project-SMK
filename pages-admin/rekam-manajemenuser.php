<?php
include '../config/koneksi.php';
$username=$_POST['txtNama'];
$email=$_POST['txtEmail'];
$password=$_POST['txtPassword'];
mysqli_query($connect_db,"INSERT INTO tbl_users (user_name, user_email,user_password,user_level) 
VALUES ('$username','$email',MD5('$password'),'admin')");

echo '<script>alert("Data Telah Dikirim")
document.location="menu.php?page=view_manajemenuser"</script>';