<?php 

$host = "localhost";
$username = "root";
$password = "";
$database = "upk_2022_afif";

$mysqli = new mysqli($host, $username, $password, $database);
if (mysqli_connect_errno()) {
    echo "Error: could not connect to database";
    exit;
}

?>