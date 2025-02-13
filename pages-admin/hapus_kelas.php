<?php
include '../config/koneksi.php';
$id=$_GET['id'];
mysqli_query($connect_db,"delete from tbl_kelas where id_kelas='$id'");
echo '<script>alert("Data Telah Terhapus")
document.location="menu.php?page=view_kelas"</script>'; 