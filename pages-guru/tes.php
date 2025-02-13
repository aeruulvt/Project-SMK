<?php
    include '../config/koneksi.php';
    $sqlsiswa=mysqli_query($connect_db,"select * from tbl_siswa where id_kelas='3'");
                                while($rowsiswa=mysqli_fetch_assoc($sqlsiswa))
                                {
                                    echo $rowsiswa['nis'];
                                }
?>