<?php
    include '../config/koneksi.php';
    $mapel=$_POST['cboMapel'];
    $jam=$_POST['cboJam1'].'-'.$_POST['cboJam2'];
    $hari=$_POST['txtHari'];
    $kelas=$_POST['txtKelas'];

    mysqli_query($connect_db,"insert into tbl_jadwal
    (id_mapel,id_kelas,hari,jam_ke) values ('$mapel','$kelas','$hari','$jam')");

    echo '<script>alert("Data Kini Telah Terekam")
    document.location="menu.php?page=input_jadwal"</script>';       
?>