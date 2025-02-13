<?php
include "../config/koneksi.php";
$bulan=$_POST['cboBulan'];
$tahun=$_POST['txtTahun'];
$idkelas=$_POST['cboKelas'];
$idmapel=$_POST['cboMapel'];
$idguru=$_POST['txtIDGuru'];

$sqlkelas=mysqli_query($connect_db,"SELECT * FROM tbl_kelas WHERE id_kelas='$idkelas'");
$rowkelas=mysqli_fetch_assoc($sqlkelas);

$sqlmapel=mysqli_query($connect_db,"SELECT * FROM view_mapel WHERE id_mapel='$idmapel'");
$rowmapel=mysqli_fetch_assoc($sqlmapel);

$sqlguru=mysqli_query($connect_db,"SELECT * FROM tbl_guru WHERE id_guru='$idguru'");
$rowguru=mysqli_fetch_assoc($sqlguru);

if($bulan=="1")
{
    $bln="Januari";
}elseif($bulan=="2")
{
    $bln="Februari";
}elseif($bulan=="3")
{
    $bln="Maret";
}elseif($bulan=="4")
{
    $bln="April";
}elseif($bulan=="5")
{
    $bln="Mei";
}elseif($bulan=="6")
{
    $bln="Juni";
}elseif($bulan=="7")
{
    $bln="Juli";
}elseif($bulan=="8")
{
    $bln="Agustus";
}elseif($bulan=="9")
{
    $bln="September";
}elseif($bulan=="10")
{
    $bln="Oktober";
}elseif($bulan=="11")
{
    $bln="Nopember";
}elseif($bulan=="12")
{
    $bln="Desember";
}

?>
<html>
    <head>
        <title>
            Aplikasi Jurnal Guru Harian | SMKS Mutiara Ilmu
        </title>
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <script src="../assets/jquery/jquery-3.2.1.slim.min.js"> </script>
	    <script src="../assets/bootstrap/js/bootstrap.min.js">   </script>
        <style>
            .card{
                margin-top: 20px;
                margin-right:5px;
                padding:5px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid ">
            <div class="card">
                <h3 style="text-align:center">Laporan Jurnal Guru Kelas <?php echo $rowkelas['nama_kelas'] ?> </h3>
                <h3 style="text-align:center">Mata Pelajaran : <?php echo $rowmapel['nama_mapel'] ?> <br>Pengampuh : <?php echo $rowguru['nama_guru'] ?></h3>
                <h3 style="text-align:center">Bulan <?php echo $bln ." ".$tahun ?></h3>
                <hr>
                <table border="1" cellpadding="5" width="100%">
                    <thead>
                        <tr>    
                            <th width="5%" style="text-align:center">No</th>
                            <th width="10%" style="text-align:center">Tanggal</th>
                            <th width="30%" style="text-align:left">Materi</th>
                            <th width="30%" style="text-align:left">Hambatan</th>
                            <th width="25%" style="text-align:left">Pemecahan</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no=1;
                            $sqljurnal=mysqli_query($connect_db,"select * from tbl_jurnal where id_kelas='$idkelas' and id_mapel='$idmapel' and id_guru='$idguru'  order by tanggal");
                            while($rowjurnal=mysqli_fetch_assoc($sqljurnal))
                            {
                        
                        ?>
                        <tr>
                            <td style="text-align:center"><?php echo $no++ ?></td>
                            <td style="text-align:center"><?php echo $rowjurnal['tanggal'] ?></td>
                            <td><?php echo $rowjurnal['materi'] ?></td>
                            <td><?php echo $rowjurnal['hambatan'] ?></td>
                            <td><?php echo $rowjurnal['pemecahan'] ?></td>   
                            
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    <script>
                window.print();
    </script>
</html>