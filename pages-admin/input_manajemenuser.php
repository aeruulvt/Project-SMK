<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right" style="font-size: 14px;">
                <li class="breadcrumb-item"><a href="#">Masukkan User</a></li>
                <li class="breadcrumb-item active">Input</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

<div class="row">
    <div class="container">
        <div class="col-12" >
            <div class="card">
                <div class="card-body">
                    <form action="rekam-manajemenuser.php" method="post">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="txtNama">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="txtEmail">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="txtPassword">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm">Rekam</button>
                        <a href="menu.php?page=view_manajemenuser" type="button" class="btn btn-dark btn-sm" >Batal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>