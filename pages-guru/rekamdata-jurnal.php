<?php
    include '../config/koneksi.php';
    $idkelas=$_POST['txtIDKelas'];
    $idguru=$_POST['txtIDGuru'];
    $idmapel=$_POST['txtIDMapel'];
    $materi=$_POST['txtBahasan'];
    $hambatan=$_POST['txtHambatan'];
    $pemecahan=$_POST['txtPemecahan'];
    
   // echo $idkelas .$idguru .$materi .$hambatan .$pemecahan;
    mysqli_query($connect_db,"insert into tbl_jurnal
    (id_kelas,id_guru,id_mapel,materi,hambatan,pemecahan,tanggal)values ('$idkelas','$idguru','$idmapel','$materi','$hambatan','$pemecahan',curdate())");

    echo '<script>alert("Data Kini Telah Terekam");
    document.location="menu.php?page=view_jurnal"</script>';        
?>