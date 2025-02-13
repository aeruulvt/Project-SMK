<?php
include '../config/koneksi.php';
$idkelas=$_GET['idkelas'];
$sql= mysqli_query($connect_db,"SELECT * FROM tbl_kelas WHERE id_kelas='$idkelas'");
$row=mysqli_fetch_assoc($sql);
$kelas=$row['nama_kelas'];
$start  = new DateTime('first day of this month');
$end    = new DateTime('first day of this month + 1 month');
$period = new DatePeriod($start, new DateInterval('P1D'), $end);
?>

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right" style="font-size: 14px;">
                <li class="breadcrumb-item"><a href="#">Absen Siswa</a></li>
                <li class="breadcrumb-item active">View</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>

<div class="row">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">Absensi Kelas : <?php echo $kelas ?></h6>
                    <br>
                    <a href="menu.php?page=input_absen&idkelas=<?php echo $idkelas ?>" type="button" class="btn btn-success btn-sm">Input</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover" width="40%">
                        <thead>
                            <tr>
                                <th width="5%" style="text-align:center">No</th>
                                <th width="10%" style="text-align:left">Tanggal</th>
                                <th width="5%" style="text-align:center">Hadir</th>
                                <th width="5%" style="text-align:center">Sakit</th>
                                <th width="5%" style="text-align:center">Izin</th>
                                <th width="5%" style="text-align:center">Alpa</th>
                                <th width="5%" style="text-align:center">Aksi</th>
                            </tr>
                        </thead>
                        <?php
                            $no = 1;
                            foreach($period as $day){
                                $tanggal=$day->format('Y-m-d');

                                //rekaphadir
                                $sqlhadir=mysqli_query($connect_db,"SELECT count(status_absen) as hadir FROM view_absen where tanggal='$tanggal' and id_kelas='$idkelas' and status_absen='H'");
                                $rowhadir=mysqli_fetch_assoc($sqlhadir);

                                //rekapsakit
                                $sqlsakit=mysqli_query($connect_db,"SELECT count(status_absen) as sakit FROM view_absen where tanggal='$tanggal' and id_kelas='$idkelas' and status_absen='S'");
                                $rowsakit=mysqli_fetch_assoc($sqlsakit);

                                //rekapizin
                                $sqlizin=mysqli_query($connect_db,"SELECT count(status_absen) as izin FROM view_absen where tanggal='$tanggal' and id_kelas='$idkelas' and status_absen='I'");
                                $rowizin=mysqli_fetch_assoc($sqlizin);

                                //rekapalpa
                                $sqlalpa=mysqli_query($connect_db,"SELECT count(status_absen) as alpa FROM view_absen where tanggal='$tanggal' and id_kelas='$idkelas' and status_absen='A'");
                                $rowalpa=mysqli_fetch_assoc($sqlalpa);                                
                        ?>
                        <tbody>
                        <tr>
                            <td style="text-align:center"><?php echo $no++; ?></td>
                            <td style="text-align:left"><?php echo $day->format('d-M').""; ?></td>   
                            <td style="text-align:center;">
                                <?php 
                                    if($rowhadir['hadir'] >0){
                                        echo '<b style="color:red">'.$rowhadir['hadir'].'</b>';
                                    }else{
                                        echo $rowhadir['hadir'];
                                    }
                                ?>
                            </td> 
                            <td style="text-align:center">
                                <?php 
                                if($rowsakit['sakit']>0)
                                {
                                    echo '<b style="color:red">'.$rowsakit['sakit'].'</b>';
                                }else{
                                    echo $rowsakit['sakit'];
                                }

                                ?>
                            </td>
                            <td style="text-align:center">
                                <?php 
                                if($rowizin['izin']>0)
                                {
                                    echo '<b style="color:red">'.$rowizin['izin'].'</b>';
                                }else{
                                    echo $rowizin['izin'];
                                }
                                ?>
                            </td>       
                            <td style="text-align:center">
                            <?php 
                                if($rowalpa['alpa']>0)
                                {
                                    echo '<b style="color:red">'.$rowalpa['alpa'].'</b>';
                                }else{
                                    echo $rowalpa['alpa'];
                                }
                                ?>
                            </td>            
                            <td style="text-align:center">
                                <a href="menu.php?page=detail_viewabsen&idkelas=<?php echo $row['id_kelas']?>" type="button" class="btn btn-success btn-block btn-sm">Detail</a>
                            </td>                   
                            
                        </tr>
                            <?php } ?>
                        </tbody>
                        
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>