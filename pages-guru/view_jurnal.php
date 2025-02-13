<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right" style="font-size: 14px;">
                <li class="breadcrumb-item"><a href="#">Jurnal Mengajar</a></li>
                <li class="breadcrumb-item active">Harian</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>

<div class="row">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <?php include 'fungsi_haritanggal.php'?>
                    Hari/Tanggal : <?php echo $tanggal ?>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="text-align:center" width="5%">No</th>
                                <th style="text-align:center" width="10%">Jam Ke</th>
                                <th style="text-align:center" width="10%">Kelas</th>
                                <th width="65%">Nama Mata Pelajaran</th>
                                <th style="text-align:center" width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $email=$_SESSION['email'];
                                $sqluser= mysqli_query($connect_db,"SELECT * FROM tbl_users WHERE user_email='$email'");
                                $rowuser=mysqli_fetch_assoc($sqluser);
                                $nama=$rowuser['user_name'];
                                $hr=$hariBahasaIndonesia;
                                $no=1;
                                $sql=mysqli_query($connect_db,"select * from view_jadwal where nama_guru='$nama' and hari='$hr'");
                                while($row=mysqli_fetch_assoc($sql))
                                {
                            ?>
                            <tr>
                                <td style="text-align:center"><?php echo $no++ ?></td>
                                <td style="text-align:center"><?php echo $row['jam_ke']?></td>
                                <td style="text-align:center"><?php echo $row['nama_kelas']?></td>
                                <td><?php echo $row['nama_mapel']?></td>
                                <td style="text-align:center">
                                    <a href="menu.php?page=input_jurnal&idkelas=<?php echo $row['id_kelas']?>&idmapel=<?php echo $row['id_mapel'] ?>" type="button" class="btn btn-success btn-sm"><i class="far fa-edit"></i></a>
                                    <a href="menu.php?page=view_absen&idkelas=<?php echo $row['id_kelas']?>&idmapel=<?php echo $row['id_mapel'] ?>" type="button" class="btn btn-dark btn-sm"><i class="far fa-user"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>