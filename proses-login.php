<?php
session_start();
include "koneksi.php";

$username = $_POST["username"];
$password = $_POST["password"];
$level = $_POST["level"];

$sql = "SELECT * FROM user WHERE username='$username' AND password = '$password'";

// untuk menjalankan perintah sql
$result = $mysqli->query($sql);

// untuk mendaptkan jumlah baris dari tabel
$numResult = $result->num_rows;

// jika login berhasil
if ($numResult > 0) {
    $row = $result->fetch_assoc();
    extract($row);
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
    $_SESSION["level"] = $level;

    header("location: admin.php");
} else {
    echo "gagal";
}

// menutup koneksi database 
// $result->free();
// $result->close();
