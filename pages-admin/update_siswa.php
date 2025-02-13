<?php
include '../config/koneksi.php';
$id =$_POST['txtID'];
$nis=$_POST['txtNIS'];
$nama=$_POST['txtNama'];
$jk=$_POST['cboJK'];
$kelas =$_POST['cboKelas'];
mysqli_query($connect_db,"UPDATE tbl_siswa set nis='$nis', nama='$nama', jk='$jk', id_kelas='$kelas' WHERE id_siswa='$id'");
echo '<script>alert("Data Telah Di Update")
document.location="menu.php?page=view_siswa"</script>';