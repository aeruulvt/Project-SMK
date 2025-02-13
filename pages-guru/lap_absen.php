<?php
include "../config/koneksi.php";
$bulan=$_POST['cboBulan'];
$tahun=$_POST['txtTahun'];
$idkelas=$_POST['cboKelas'];

$sqlkelas=mysqli_query($connect_db,"SELECT * FROM tbl_kelas WHERE id_kelas='$idkelas'");
$rowkelas=mysqli_fetch_assoc($sqlkelas);

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
                <h3 style="text-align:center">Laporan Absensi Siswa Kelas <?php echo $rowkelas['nama_kelas'] ?> </h3>
                <h3 style="text-align:center">Bulan <?php echo $bln ." ".$tahun ?></h3>
                <hr>
                <table border="1" cellpadding="5" width="100%">
                    <thead>
                        <tr>    
                            <th width="5%" style="text-align:center">No</th>
                            <th width="10%" style="text-align:center">NIS</th>
                            <th width="55%" style="text-align   :left">Nama</th>
                            <th width="5%" style="text-align:center">JK</th>
                            <th width="5%" style="text-align:center">H</th>
                            <th width="5%" style="text-align:center">S</th>
                            <th width="5%" style="text-align:center">I</th>
                            <th width="5%" style="text-align:center">A</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no=1;
                            $sqlabsen=mysqli_query($connect_db,"select * from view_absen where id_kelas='$idkelas' and month(tanggal)='$bulan' order by tanggal");
                            while($rowabsen=mysqli_fetch_assoc($sqlabsen))
                            {
                                //rekaphadir
                            $sqlhadir=mysqli_query($connect_db,"SELECT count(status_absen) as hadir FROM view_absen where month(tanggal)='$bulan' and nis='$rowabsen[nis]' and status_absen='H'");
                            $rowhadir=mysqli_fetch_assoc($sqlhadir);

                            //rekapsakit
                            $sqlsakit=mysqli_query($connect_db,"SELECT count(status_absen) as sakit FROM view_absen where month(tanggal)='$bulan' and nis='$rowabsen[nis]' and status_absen='S'");
                            $rowsakit=mysqli_fetch_assoc($sqlsakit);

                            //rekapizin
                            $sqlizin=mysqli_query($connect_db,"SELECT count(status_absen) as izin FROM view_absen where month(tanggal)='$bulan' and nis='$rowabsen[nis]' and status_absen='I'");
                            $rowizin=mysqli_fetch_assoc($sqlizin);

                            //rekapalpa
                            $sqlalpa=mysqli_query($connect_db,"SELECT count(status_absen) as alpa FROM view_absen where month(tanggal)='$bulan' and nis='$rowabsen[nis]' and status_absen='A'");
                            $rowalpa=mysqli_fetch_assoc($sqlalpa);                                
                        ?>
                        <tr>
                            <td style="text-align:center"><?php echo $no++ ?></td>
                            <td style="text-align:center"><?php echo $rowabsen['nis'] ?></td>
                            <td ><?php echo $rowabsen['nama'] ?></td>
                            <td style="text-align:center"><?php echo $rowabsen['jk'] ?></td>   
                            <td style="text-align:center"><?php echo $rowhadir['hadir'] ?></td>    
                            <td style="text-align:center"><?php echo $rowsakit['sakit'] ?></td>    
                            <td style="text-align:center"><?php echo $rowizin['izin'] ?></td>    
                            <td style="text-align:center"><?php echo $rowalpa['alpa'] ?></td>    
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