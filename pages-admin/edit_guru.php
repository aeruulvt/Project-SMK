<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$sql = mysqli_query($connect_db, "select * from tbl_guru where id_guru='$id'");
$row = mysqli_fetch_assoc($sql);
?>

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right" style="font-size: 14px;">
                <li class="breadcrumb-item active"><a href="#">Guru</a></li>
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
                    <form action="update_guru.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Nama Guru</label>
                            <input type="text" class="form-control" name="txtNama" value="<?php echo $row['nama_guru'] ?>">
                            <input type="hidden" class="form-control" name="txtID" value="<?php echo $row['id_guru'] ?>">
                            <input type="hidden" class="form-control" name="txtFilefoto" value="<?php echo $row['nama_file'] ?>">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Masukkan Foto Yang Akan Di-upload </label>
                                    <input type="file" name="txtFile" class="form-control   ">
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="card">
                                    <div class="card-body" style="text-align: center;">
                                        <img src="upload/<?php echo $row['nama_file'] ?>" width="150" height="150">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm">Update</button>
                            <a href="menu.php?page=view_guru" type="button" class="btn btn-dark btn-sm">Batal</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</form>