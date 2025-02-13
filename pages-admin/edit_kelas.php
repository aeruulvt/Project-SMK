<?php 
include '../config/koneksi.php';
$id=$_GET['id'];
$sql=mysqli_query($connect_db,"select * from tbl_kelas where id_kelas='$id'");
$row=mysqli_fetch_assoc($sql);
?>

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right" style="font-size: 14px;">
                <li class="breadcrumb-item active"><a href="#">Kelas</a></li>
                <li class="breadcrumb-item">Edit Data</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

<div class="row">
    <div class="container">
        <div class="col-12" >
            <div class="card">
                <div class="card-body">
                    <form action="update_kelas.php" method="post">
                    <div class="form-group">
                        <label for="">Nama Kelas</label>
                        <input type="text" class="form-control" name="txtNama"
                        value="<?php echo $row ['nama_kelas']?>">
                        <input type="hidden" class="form-control" name="txtID"
                        value="<?php echo $row ['id_kelas']?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm">Update</button>
                        <a href="menu.php?page=view_kelas" type="button" class="btn btn-dark btn-sm" >Batal</a>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
</form>