<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right" style="font-size: 14px;">
                <li class="breadcrumb-item active"><a href="#">Guru</a></li>
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
                    <form action="rekam_guru.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nama Guru</label>
                        <input type="text" class="form-control" name="txtNama">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label> <label style="font-size: 12px; font-weight:lighter"> * Hanya untuk Login</label>
                        <input type="email" class="form-control" name="txtEmail">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label> <label style="font-size: 12px; font-weight:lighter"> * Hanya untuk Login</label>
                        <input type="text" class="form-control" name="txtPass">
                    </div>
                    <div class="form-group">
                        <label for="">Masukkan Foto</label>
                        <input type="file" class="form-control" name="txtfile">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm">Kirim</button>
                        <a href="menu.php?page=view_guru" type="button" class="btn btn-dark btn-sm" >Batal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>