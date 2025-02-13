<?php

$con = mysqli_connect("localhost", "root", "", "vertex-ms");
// $con = mysqli_connect("localhost", "ideazshuttle_ideazs", "ideazshuttle_ideazs", "ideazshuttle_restaurant");

// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
