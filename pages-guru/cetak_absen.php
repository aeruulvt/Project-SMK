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
                <div class="card-body">
                    <form action="lap_absen.php" method="post">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Kelas</label>
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
                                <div class="col-6">
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
                                        <option value="11">Nopember</option>
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