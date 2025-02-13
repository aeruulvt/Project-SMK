<?php
include '../config/koneksi.php';
$idkelas=$_GET['idkelas'];
$sql= mysqli_query($connect_db,"SELECT * FROM tbl_kelas WHERE id_kelas='$idkelas'");
$row=mysqli_fetch_assoc($sql);
$kelas=$row['nama_kelas'];
?>

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right" style="font-size: 14px;">
                <li class="breadcrumb-item"><a href="#">Absen Siswa</a></li>
                <li class="breadcrumb-item active">Input</li>
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
                    
                </div>
                <div class="card-body">
                    <form action="rekamdata-absen.php" method="post">
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
                                $sqlsiswa=mysqli_query($connect_db,"select * from view_siswa where id_kelas='$idkelas'");
                                while($rowsiswa=mysqli_fetch_assoc($sqlsiswa))
                                {
                            ?>
                            <tr>
                                    <td style="text-align:center"><?php echo $no++ ?></td>
                                    <td style="text-align:center">
                                        <?php echo $rowsiswa['nis']?>
                                        <input type="hidden" name="txtNIS[]" value="<?php echo $rowsiswa['nis'] ?>">
                                    </td>
                                    <td><?php echo $rowsiswa['nama']?></td>
                                    <td><?php echo $rowsiswa['jk']?></td>
                                    <td style="text-align:center">
                                        <select name="cboStatus[]" class="form-control" >
                                            <option value="H">Hadir</option>
                                            <option value="S">Sakit</option>
                                            <option value="I">Izin</option>
                                            <option value="A">Alpa</option>
                                        </select>
                                    </td>     
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-sm btn-block btn-success" >
                    Rekam</button>  
                    </form>               
                </div>
            </div>
        </div>
    </div>
</div>