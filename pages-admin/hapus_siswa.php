<?php
include '../config/koneksi.php';
$id=$_GET['id'];
mysqli_query($connect_db,"DELETE from tbl_siswa where id_siswa='$id'");
echo '<script>alert("Data Telah Terhapus")
document.location="menu.php?page=view_siswa"</script>'; 