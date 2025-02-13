<?php
include '../config/koneksi.php';
$guru=$_POST['txtNama'];
$email=$_POST['txtEmail'];
$password=$_POST['txtPass'];
    mysqli_query($connect_db,"INSERT INTO tbl_users (user_name, user_email, user_password, user_level)
    values ('$guru', '$email', md5('$password'), 'guru')");

$filename =$_FILES['txtfile']['name'];
$tempname =$_FILES['txtfile']['tmp_name'];
$folder ="upload/".$filename;
    mysqli_query($connect_db,"INSERT INTO tbl_guru (nama_guru,nama_file) 
    VALUES ('$guru','$filename')");

if (move_uploaded_file($tempname, $folder)){
    echo '<script>alert("Data Telah Di Kirim");
    document.location="menu.php?page=view_guru"</script>';
} else{
    echo '<script>alert("Data Kini Telah Terkirim");
    document.location="menu.php?page=view_guru"</script>';
}