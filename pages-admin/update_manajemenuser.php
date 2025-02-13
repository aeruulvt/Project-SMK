<?php
include '../config/koneksi.php';
$id =$_POST['txtID'];
$username=$_POST['txtNama'];
$email=$_POST['txtEmail'];
$password=$_POST['txtPassword'];
mysqli_query($connect_db,"UPDATE tbl_users set user_name='$username', 
user_email='$email', user_password=md5('$password') WHERE user_id='$id'");
echo '<script>alert("Data Telah Di Update")
document.location="menu.php?page=view_manajemenuser"</script>';