<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right" style="font-size: 14px">
                <li class="breadcrumb-item"><a href="#">Jadwal Pelajaran</a></li>
                <li class="breadcrumb-item">View</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

<div class="row">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="menu.php?page=input_jadwal" method="post">
                    <div class="form-group">
                        <label for="">Kelas</label>
                        <select class="form-control" name="cboKelas">
                            <option value="" selected>Pilih Kelas</option>
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
                        <label for="">Hari</label>
                        <select class="form-control" name="cboHari">
                            <option value="" selected>Pilih Hari</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jum'at</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Proses</button>
                    </div>
                </div>
            </div>
        </div>
        </form> 
    </div>
</div>