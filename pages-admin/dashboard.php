<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right" style="font-size: 14px;">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item ">Home</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

<div class="row">
    <div class="container-fluid">
        <div class="row mx-2">
            <div class="col-4">
                <div class="info-box bg-navy">
                    <span class="info-box-icon"><i class="fas fa-address-card"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Guru</span>
                            <?php 
                                $sqlguru=mysqli_query($connect_db, "select count(*) as jumguru from tbl_guru");
                                $rowguru=mysqli_fetch_assoc($sqlguru);
                            ?>
                            <span class="info-box-number">
                                <?php echo $rowguru['jumguru']. " Orang" ?>
                            </span>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="info-box bg-dark">
                    <span class="info-box-icon"><i class="fas fa-book"></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">Mata Pelajaran</span>
                    <?php 
                                $sqlmapel=mysqli_query($connect_db, "select count(*) as jummapel from tbl_mapel");
                                $rowmapel=mysqli_fetch_assoc($sqlmapel);
                            ?>
                            <span class="info-box-number">
                                <?php echo $rowmapel['jummapel']. " Mapel" ?>
                            </span>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="info-box bg-success">
                    <span class="info-box-icon"><i class="fas fa-school"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Kelas</span>
                        <?php 
                                $sqlkelas=mysqli_query($connect_db, "select count(*) as jumkelas from tbl_kelas");
                                $rowkelas=mysqli_fetch_assoc($sqlkelas);
                            ?>
                            <span class="info-box-number">
                                <?php echo $rowkelas['jumkelas']. " Kelas" ?>
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>