<?php
include 'config/koneksi.php';
session_start();
$email= $_POST['txtEmail'];
$password= $_POST['txtPass'];
if(isset($email) && isset($password)){

    $sql = mysqli_query($connect_db,"SELECT * FROM tbl_users
    WHERE user_email='$email' and user_password=md5('$password')");

    $cek = mysqli_num_rows($sql);
    if($cek > 0){
        $_SESSION['email']=$email;
        $rowuser=mysqli_fetch_assoc($sql);
        if($rowuser['user_level']=='admin'){
            header("location:pages-admin/menu.php?page=dashboard");
        }else if ($rowuser['user_level']=='guru'){
            header("location:pages-guru/menu.php?page=dashboard");
            
        }

    }else{
    echo '<script>alert("Username dan password tidak dikenali");
        document.location="index.php";</script>';
    }
}
?>