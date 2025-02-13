<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right"  style="font-size: 14px;">
                <li class="breadcrumb-item"><a href="#">Siswa</a></li>
                <li class="breadcrumb-item ">Input Data</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

<div class="row">
    <div class="container">
        <div class="col-12" >
            <div class="card">
                <div class="card-body">
                    <form action="rekam_siswa.php" method="POST">
                    <div class="form-group">
                        <label for="">NIS</label>
                        <input type="text" class="form-control" name="txtNIS">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Siswa</label>
                        <input type="text" class="form-control" name="txtNama">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select class="form-control" name="cboJK">
                            <option value="" selected>Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
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
                        <button type="submit" class="btn btn-success btn-sm">Kirim</button>
                        <a href="menu.php?page=view_siswa" type="button" class="btn btn-dark btn-sm" >Batal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>