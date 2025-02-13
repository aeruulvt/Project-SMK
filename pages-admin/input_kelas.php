<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right" style="font-size: 14px;">
                <li class="breadcrumb-item active"><a href="#">Kelas</a></li>
                <li class="breadcrumb-item">Input Data</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

<div class="row">
    <div class="container">
        <div class="col-12" >
            <div class="card">
                <div class="card-body">
                    <form action="rekam_kelas.php" method="post">
                    <div class="form-group">
                        <label for="">Nama Kelas</label>
                        <input type="text" class="form-control" name="txtNama">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm">Kirim</button>
                        <a href="menu.php?page=view_kelas" type="button" class="btn btn-dark btn-sm" >Batal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>