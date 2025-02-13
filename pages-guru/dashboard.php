<?php
include '../config/koneksi.php';
$email=$_SESSION['email'];
$sql = mysqli_query($connect_db,"SELECT * FROM tbl_users 
    WHERE user_email='$email'");
    $rowuser=mysqli_fetch_assoc($sql);
    $nama=$rowuser['user_name'];
?>

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right" style="font-size: 14px;">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="container-fluid">
    <?php
        $sqlguru = mysqli_query($connect_db,"SELECT * FROM tbl_guru 
        WHERE nama_guru='$nama'");
        $rowguru=mysqli_fetch_assoc($sqlguru);
        
    ?>
        <div class="row mx-2">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <center>
                        <img class="img-fluid" src="../pages-admin/upload/<?php echo $rowguru['nama_file'] ?>">
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <p style="font-weight: bold">Biodata Guru</p>                        
                        <p>
                            Nama : <?php echo $nama ?> 
                        </p>
                        <p>
                            Mata Pelajaran yang diampuh :<br>
                            <?php
                            $no=1;
                            $sqlmapel = mysqli_query($connect_db,"SELECT * FROM view_mapel 
                            WHERE id_guru='$rowguru[id_guru]'");
                            while ($rowmapel=mysqli_fetch_assoc($sqlmapel))
                            {
                                echo $no++ . " . ".$rowmapel['nama_mapel'] .'<br>'; 
                            }
                            ?>     
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
