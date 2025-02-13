<?php
include '../config/koneksi.php';
include 'fungsi_haritanggal.php';
$idkelas=$_GET['idkelas'];
$sql= mysqli_query($connect_db,"SELECT * FROM tbl_kelas WHERE id_kelas='$idkelas'");
$row=mysqli_fetch_assoc($sql);
$kelas=$row['nama_kelas'];
$tgl=date("Y-m-d");
?>

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right" style="font-size: 14px;">
                <li class="breadcrumb-item"><a href="#">Detail Absen Siswa</a></li>
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
                    <table class="table table-bordered" >
                        <tr>
                            <td style="width:150px">Absensi Kelas</td>
                            <td style="font-weight: bold;"><?php echo $kelas ?></td>
                        </tr>
                        <tr>
                            <td style="width:150px">Tanggal</td>
                            <td style="font-weight: bold;"><?php echo $tanggal ?></td>
                        </tr>
                    </table>
                    
                </div>
                <div class="card-body">
                <table class="table table-bordered"  width="100%">
                    <thead>
                        <tr>    
                            <th width="5%" style="text-align:center">No</th>
                            <th width="10%" style="text-align:center">NIS</th>
                            <th width="70%" style="text-align   :left">Nama</th>
                            <th width="5%" style="text-align:center">JK</th>
                            <th width="10%" style="text-align:center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $no=1;
                                $sqlsiswa=mysqli_query($connect_db,"select * from view_absen where id_kelas='$idkelas' and tanggal='$tgl'");
                                while($rowsiswa=mysqli_fetch_assoc($sqlsiswa))
                                {
                        ?>
                        <tr>
                            <td style="text-align:center"><?php echo $no++ ?></td>
                            <td style="text-align:center"><?php echo $rowsiswa['nis'] ?></td>
                            <td ><?php echo $rowsiswa['nama'] ?></td>
                            <td style="text-align:center"><?php echo $rowsiswa['jk'] ?></td>
                            <td style="text-align:center"><?php echo $rowsiswa['status_absen'] ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a href="menu.php?page=view_absen&idkelas=<?php echo $idkelas ?>" type="button" class="btn btn-sm btn-block btn-success" >
                    Kembali</a> 
                </div>
            </div>
        </div>
    </div>
</div>