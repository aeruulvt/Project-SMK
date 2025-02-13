<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right" style="font-size: 14px;">
                <li class="breadcrumb-item"><a href="#">Mata Pelajaran</a></li>
                <li class="breadcrumb-item">Input Data</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

<div class="row">
    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="rekam_mapel.php" method="post">
                        <div class="form-group">
                            <label for="">Nama Mata Pelajaran</label>
                            <input type="text" class="form-control" name="txtNama">
                        </div>
                        <div class="form-group">
                            <label>Pengampuh</label>
                            <select class="form-control" name="cboGuru">
                                <option value="" selected>Pilih Pengampuh</option>
                                <?php
                                include '../config/koneksi.php';
                                $sql = mysqli_query($connect_db, "SELECT * FROM tbl_guru");
                                while ($row = mysqli_fetch_assoc($sql)) {
                                ?>
                                    <option value="<?php echo $row['id_guru']; ?>">
                                        <?php echo $row['nama_guru']; ?>
                                    </option>
                                <?php   } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Level</label>
                            <select class="form-control" name="cboLevel" >
                            <option value="">Pilih Kelas</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm">Kirim</button>
                            <a href="menu.php?page=view_mapel" type="button" class="btn btn-dark btn-sm">Batal</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>