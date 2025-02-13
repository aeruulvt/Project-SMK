<?php
include '../config/koneksi.php';
$statusAbsen = $_POST["cboStatus"];
$nis = $_POST["txtNIS"];
for ($i = 0; $i < count($nis); $i++) {
    mysqli_query($connect_db,"insert into tbl_absen(tanggal,nis,status_absen)values
    (now(),'$nis[$i]','$statusAbsen[$i]')");
    echo '<script>alert("Data Kini Telah Terekam");
    document.location="menu.php?page=view_jurnal"</script>';       
}
?>