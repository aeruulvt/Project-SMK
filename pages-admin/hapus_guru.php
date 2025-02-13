<?php
include '../config/koneksi.php';
$id=$_GET['id'];
$sql= mysqli_query($connect_db,"select nama_file from tbl_guru where id_guru='$id'");
$row=mysqli_fetch_assoc($sql);
$namafile=$row['nama_file'];
unlink("upload/".$namafile);
mysqli_query($connect_db,"delete from tbl_guru where id_guru='$id'");
echo '<script>alert("Data Telah Terhapus")
document.location="menu.php?page=view_guru"</script>'; 