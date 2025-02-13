<?php
if(isset($_POST['cboKelas']) and $_POST['cboHari']){	
    //session_unset();
    session_start(); 
    $_SESSION['kelas']=$_POST['cboKelas'];
    $_SESSION['hari']=$_POST['cboHari'];
    include '../config/koneksi.php';
    $sql=mysqli_query($connect_db,"select * from tbl_kelas where id_kelas='$_SESSION[kelas]'");
    $row=mysqli_fetch_assoc($sql);
}
?>

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right" style="font-size: 14px;">
                <li class="breadcrumb-item"><a href="#">Jadwal Mengajar</a></li>
                <li class="breadcrumb-item active">Input</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

<div class="row">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Hari : <?php echo '<b>'.$_SESSION['hari'].'</b>';?> &nbsp;&nbsp;|
                    Kelas : <?php echo '<b>'. $row['nama_kelas'].'</b>';?>
                </div>
                <form action="rekam_jadwal.php" method="post" >
                <div class="card-body">
                    <div class="form-group">
                        <label>Mata Pelajaran</label>
                        <input type="hidden" name="txtHari" value="<?php echo $_SESSION['hari'] ?>">
                        <input type="hidden" name="txtKelas" value="<?php echo $_SESSION['kelas'] ?>">
                        <select class="form-control" name="cboMapel">
                                <option value="" selected>Pilih Mata Pelajaran</option>  
                                <?php
                                
                                $sql=mysqli_query($connect_db, "SELECT * FROM view_mapel");
                                while ($rowmapel=mysqli_fetch_assoc($sql))
                                {
                                ?>
                                <option value="<?php echo $rowmapel['id_mapel'] ?>">
                                    <?php echo $rowmapel['nama_mapel'] ." | ". $rowmapel['nama_guru'] ?>
                                </option>
                                <?php } ?>
                        </select>
                    </div>
                        <div class="form-group">
                            <label>Jam Pelajaran</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control" name="cboJam1">
                                        <option value="" selected>Jam Ke</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" name="cboJam2">
                                        <option value="" selected>s.d Jam Ke</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm">Rekam</button>
                            <a href="menu.php?page=view_jadwal" class="btn btn-dark btn-sm">Kembali</a>
                        </div>
                    </div>
                
                </form>
                
                <table id="tabel" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="15%" style="text-align:center">Jam Pelajaran</th>
                                <th width="40%">Nama Mata Pelajaran</th>
                                <th width="45%">Pengampuh</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            
                            $query=mysqli_query($connect_db,"SELECT * FROM view_jadwal where hari='$_SESSION[hari]' and id_kelas='$_SESSION[kelas]'");
                            while($rowjadwal=mysqli_fetch_assoc($query))
                            {
                            ?>
                            <tr>
                                <td style="text-align:center"><?php echo $rowjadwal['jam_ke']?></td>
                                <td><?php echo $rowjadwal['nama_mapel']?></td>
                                <td><?php echo $rowjadwal['nama_guru']?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>