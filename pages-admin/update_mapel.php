<?php
include '../config/koneksi.php';
$id =$_POST['txtID'];
$namakelas=$_POST['txtNama'];
$guru=$_POST['cboGuru'];
$level=$_POST['cbolevel'];
mysqli_query($connect_db,"UPDATE tbl_mapel set nama_mapel='$namakelas', id_guru='$guru', level='$level'  WHERE id_mapel='$id'");
echo '<script>alert("Data Telah Di Update")
document.location="menu.php?page=view_mapel"</script>';