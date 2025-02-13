<?php 
include '../config/koneksi.php';
$id=$_GET['id'];
$sql=mysqli_query($connect_db,"select * from view_siswa where id_siswa='$id'");
$row=mysqli_fetch_assoc($sql);
?>

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right"  style="font-size: 14px;">
                <li class="breadcrumb-item"><a href="#">Siswa</a></li>
                <li class="breadcrumb-item ">Edit Data</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

<div class="row">
    <div class="container">
        <div class="col-12" >
            <div class="card">
                <div class="card-body">
                    <form action="update_siswa.php" method="POST">
                    <div class="form-group">
                        <label for="">NIS</label>
                        <input type="text" class="form-control" name="txtNIS" value="<?php echo $row['nis'] ?>">
                        <input type="hidden" class="form-control" name="txtID" value="<?php echo $row['id_siswa'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Siswa</label>
                        <input type="text" class="form-control" name="txtNama" value="<?php echo $row['nama'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select class="form-control" name="cboJK">
                            <option value="<?php echo $row['jk'] ?>">
                                <?php 
                                if ($row['jk']=="Laki-Laki")
                                {
                                    echo "Laki-Laki";
                                }else {
                                    echo "Perempuan";
                                }
                                ?> 
                            </option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Kelas</label>
                        <select class="form-control" name="cboKelas">
                            <option value="<?php echo $row['id_kelas'] ?>">
                                <?php echo $row['nama_kelas'] ?>
                            </option>
                            <?php 
                            include '../config/koneksi.php';
                            $sql=mysqli_query($connect_db, "SELECT * FROM tbl_kelas");
                            while($row=mysqli_fetch_assoc($sql)){
                            ?>
                                <option value="<?php echo $row['id_kelas']?>"> 
                                <?php echo $row['nama_kelas'];?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm">Rekam</button>
                        <a href="menu.php?page=view_siswa" type="button" class="btn btn-dark btn-sm" >Batal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>