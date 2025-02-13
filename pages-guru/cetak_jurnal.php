<?php
include '../config/koneksi.php';
$email=$_SESSION['email'];
$sql = mysqli_query($connect_db,"SELECT * FROM tbl_users 
    WHERE user_email='$email'");
    $rowuser=mysqli_fetch_assoc($sql);
    $nama=$rowuser['user_name'];

    $sqlguru = mysqli_query($connect_db,"SELECT * FROM tbl_guru 
    WHERE nama_guru='$nama'");
    $rowguru=mysqli_fetch_assoc($sqlguru);
    $idguru=$rowguru['id_guru'];
?>

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right" style="font-size: 14px;">
                <li class="breadcrumb-item"><a href="#">Jurnal Guru</a></li>
                <li class="breadcrumb-item active">Cetak</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>

<div class="row">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="lap_jurnal.php" method="post">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Kelas</label>
                                        <input type="hidden" name="txtIDGuru" value="<?php echo $idguru ?>">
                                        <select class="form-control" name="cboKelas">
                                            <option value="" selected>Pilih Kelas</option>
                                            <?php
                                                include '../config/koneksi.php';
                                                $sql=mysqli_query($connect_db,"select * from tbl_kelas");
                                                while($row=mysqli_fetch_assoc($sql))
                                                {
                                            ?>
                                            <option value="<?php echo $row['id_kelas'] ?>">
                                                <?php echo $row['nama_kelas'] ?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Mata Pelajaran yang diampuh</label>
                                        <select class="form-control" name="cboMapel">
                                                <option value="" selected>Pilih Mata Pelajaran</option>  
                                                <?php
                                                $sql=mysqli_query($connect_db, "SELECT * FROM view_jadwal where id_guru='$idguru'");
                                                while ($rowmapel=mysqli_fetch_assoc($sql))
                                                {
                                                ?>
                                                <option value="<?php echo $rowmapel['id_mapel'] ?>">
                                                    <?php echo $rowmapel['nama_mapel'] ?>
                                                </option>
                                                <?php } ?>
                                        </select>
                                    </div>                                                    
                                </div>
                                <div class="col-3">
                                    <label>Bulan :</label>
                                    <input type="hidden" class="form-control" name="txtIDKelas" value="<?php echo $idkelas?>">
                                    <select class="form-control" name="cboBulan">
                                        <option value="" selected>Silahkan Pilih Bulan</option>
                                        <option value="1">Januari</option>
                                        <option value="2">Februari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">Juli</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Tahun :</label>
                                        <input type="text" class="form-control" name="txtTahun" 
                                        value="<?php echo date('Y')?>" readonly>
                                    </div>    
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" formtarget="_blank" class="btn btn-success btn-sm">Cetak</button>
                                <a href="menu.php?page=dashboard" class="btn btn-dark btn-sm">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>