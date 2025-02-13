<?php
include '../config/koneksi.php';
include 'fungsi_haritanggal.php';
$idmapel=$_GET['idmapel'];
$idkelas=$_GET['idkelas'];
$sql= mysqli_query($connect_db,"SELECT * FROM view_jadwal
            WHERE id_mapel='$idmapel' and id_kelas='$idkelas'");
$row=mysqli_fetch_assoc($sql);
?>

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right" style="font-size: 14px;">
                <li class="breadcrumb-item"><a href="#">Jurnal Mengajar</a></li>
                <li class="breadcrumb-item active">Input</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>

<div class="row">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <form action="rekamdata-jurnal.php" method="POST">
                    <input type="hidden" name="txtIDKelas" value="<?php echo $idkelas ?>" />
                    <input type="hidden" name="txtIDGuru" value="<?php echo $row['id_guru']?>" />
                    <input type="hidden" name="txtIDMapel" value="<?php echo $row['id_mapel']?>">
                <div class="card-header">
                    <table>
                        <tr>
                            <td>Hari/Tanggal</td>
                            <td> : </td>
                            <td style="font-weight: bold;"><?php echo $tanggal ?></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td> : </td>
                            <td style="font-weight: bold;"><?php echo $row['nama_kelas'] ?></td>
                        </tr>    
                        <tr>
                            <td>Mata Pelajaran</td>
                            <td> : </td>
                            <td style="font-weight: bold;"><?php echo $row['nama_mapel'] ?></td>
                        </tr>
                    </table>
                    
                </div>
                <div class="card-body">
                    <div class="form-group">
                        
                        <label>Bahasan Materi</label><br>
                        <textarea  name="txtBahasan" rows="3" cols="50" class="form-control" autofocus>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>Hambatan</label><br>
                        <textarea  name="txtHambatan" rows="3" cols="50" class="form-control" autofocus>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>Pemecahan</label><br>
                        <textarea  name="txtPemecahan" rows="3" cols="50" class="form-control" autofocus>
                        </textarea>
                    </div>
                    <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm">Rekam</button>
                            <a href="menu.php?page=view_jurnal" class="btn btn-dark btn-sm">Kembali</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>