<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right" style="font-size: 14px;">
                <li class="breadcrumb-item"><a href="#">Siswa</a></li>
                <li class="breadcrumb-item">View</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

<div class="row">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 style="text-align: center;">Data Siswa</h5>
                </div>
                <div class="card-body">
                <div class="d-flex justify-content-end">
                        <a href="menu.php?page=input_siswa" type="button" class="btn btn-success btn-sm">
                            <i class="fas fa-plus-circle"></i> Tambah
                        </a>
                    </div>
                    <table id="tabel" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="5%" style="text-align:center">No</th> 
                                <th width="10%" style="text-align:center">NIS</th>   
                                <th width="45%">Nama Siswa</th>
                                <th width="20%" style="text-align:center">Jenis Kelamin</th>
                                <th width="10%" style="text-align:center">Kelas</th>
                                <th width="10%" style="text-align:center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include '../config/koneksi.php';
                                $sql=mysqli_query($connect_db,"SELECT * from view_siswa");
                                $no = 1;
                                while($row=mysqli_fetch_assoc($sql))
                                {
                            ?>
                                <tr>
                                    <td style="text-align:center"><?php echo $no++ ?></td>
                                    <td style="text-align:center"><?php echo $row['nis']?></td>
                                    <td><?php echo $row['nama']?></td>
                                    <td style="text-align:center"><?php echo $row['jk']?></td>
                                    <td style="text-align:center"><?php echo $row['nama_kelas']?></td>
                                    <td style="text-align:center">
                                        <a href="menu.php?page=edit_siswa&id=<?php echo $row['id_siswa'] ?>" type="button" class="btn btn-success btn-sm">
                                            <i class="fas fa-edit"></i>     
                                        </a>
                                        <a href="hapus_siswa.php?id=<?php echo $row['id_siswa'] ?>" type="button" class="btn btn-dark btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </a>
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
