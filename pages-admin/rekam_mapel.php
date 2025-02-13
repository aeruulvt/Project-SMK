<?php
include '../config/koneksi.php';
$guru=$_POST['cboGuru'];
$mapel=$_POST['txtNama'];
$level=$_POST['cboLevel'];
mysqli_query($connect_db,"INSERT INTO tbl_mapel (nama_mapel,id_guru,level) VALUES ('$mapel','$guru','$level')");

echo '<script>alert("Data Telah Dikirim")
document.location="menu.php?page=view_mapel"</script>';