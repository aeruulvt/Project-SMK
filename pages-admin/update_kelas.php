<?php
include '../config/koneksi.php';
$id =$_POST['txtID'];
$namakelas=$_POST['txtNama'];
mysqli_query($connect_db,"UPDATE tbl_kelas set nama_kelas='$namakelas' WHERE id_kelas='$id'");
echo '<script>alert("Data Telah Di Update")
document.location="menu.php?page=view_kelas"</script>';