<?php
include '../config/koneksi.php';
$id=$_POST['txtID'];
$guru=$_POST['txtNama'];
$filefoto=$_POST['txtFilefoto'];
$filename =$_FILES['txtFile']['name'];
$tempname =$_FILES['txtFile']['tmp_name'];
$folder ="upload/".$filename;
if (!empty($filename))
{
mysqli_query($connect_db,"UPDATE tbl_guru SET nama_guru='$guru', nama_file='$filename' where id_guru='$id'");
}else{
    mysqli_query($connect_db,"UPDATE tbl_guru SET nama_guru='$guru', nama_file='$filefoto' where id_guru='$id'");
}
if (move_uploaded_file($tempname,$folder)){
    echo '<script>alert("Data Kini Telah Ter-update");
    document.location="menu.php?page=view_guru"</script>';
} else{
    echo '<script>alert("Data Yang Anda Masukkan Salah");
    document.location="menu.php?page=view_guru"</script>';
}