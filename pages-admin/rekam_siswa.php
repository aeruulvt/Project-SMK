<?php
include '../config/koneksi.php';
$nis=$_POST['txtNIS'];
$nama=$_POST['txtNama'];
$jk=$_POST['cboJK'];
$kelas=$_POST['cboKelas'];
mysqli_query($connect_db,"INSERT INTO tbl_siswa (nis,nama,jk,id_kelas)
VALUES ('$nis', '$nama', '$jk', '$kelas')");

echo '<script>alert("Data Telah Dikirim")
document.location="menu.php?page=view_siswa"</script>';