<?php

$servername = "localhost";
$username = "root";
$password = "";
// $passw = password_hash($pass, PASSWORD_BCRYPT);
$database = "jobin";
$con = mysqli_connect($servername, $username, $password, $database);
if(!$con){
die("Failed to connect". mysqli_connect_error($con));
}


?>