<?php
    $server   = "localhost"; //server database
    $username = "root";      //username database
    $password = "";
    $database="db_jurnalguru_3rpl2";
    $connect_db = mysqli_connect($server, $username, $password, $database);
    if (! $connect_db)
    {
        die("Koneksi database gagal:" . mysqli_connect_error());
    }
?>