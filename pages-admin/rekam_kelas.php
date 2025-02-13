<?php
include '../config/koneksi.php';
$kelas=$_POST['txtNama'];
mysqli_query($connect_db,"INSERT INTO tbl_kelas (nama_kelas) 
VALUES ('$kelas')");

echo '<script>alert("Data Telah Dikirim")
document.location="menu.php?page=view_kelas"</script>';