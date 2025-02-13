<?php 
include '../config/koneksi.php';
$id=$_GET['id'];
$sql=mysqli_query($connect_db,"select * from view_mapel where id_mapel='$id'");
$row=mysqli_fetch_assoc($sql);
?>

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right" style="font-size: 14px;">
                <li class="breadcrumb-item"><a href="#">Mata Pelajaran</a></li>
                <li class="breadcrumb-item">Edit Data</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

<div class="row">
    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="update_mapel.php" method="post">
                        <div class="form-group">
                            <label for="">Nama Mata Pelajaran</label>
                            <input type="text" class="form-control" name="txtNama" value="<?php echo $row['nama_mapel']; ?>">
                            <input type="hidden" class="form-control" name="txtID" value="<?php echo $row['id_mapel']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Pengampuh </label>
                            <select class="form-control" name="cboGuru">
                                <option value="<?php echo $row['id_guru']; ?>">
                                <?php echo $row['nama_guru']; ?>
                            </option>
                                <?php 
                                include '../config/koneksi.php';
                                $sqlguru = mysqli_query($connect_db, "SELECT * FROM tbl_guru");
                                while ($rowguru = mysqli_fetch_assoc($sqlguru)) {
                                ?>
                                    <option value="<?php echo $rowguru['id_guru']; ?>">
                                        <?php echo $rowguru['nama_guru']; ?>
                                    </option>   
                                <?php   } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Level</label>
                            <select class="form-control" name="cbolevel" >
                            <option value="<?php echo $row['level']; ?>"><?php echo $row['level']; ?></option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm">Update</button>
                            <a href="menu.php?page=view_mapel" type="button" class="btn btn-dark btn-sm">Batal</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>