<?php
include_once('koneksi.php');
$kd_barang = $_GET["kd_barang"];
?>

<?php

$x          = $mysqli->real_escape_string($_POST['kd_barang']);
$nama_brang          = $mysqli->real_escape_string($_POST['nama_brang']);

//proses simpan ke database
$mysqli->query("UPDATE barang set kd_barang	= '$x', nama_barang = '$nama_barang',	where kd_barang='$kd_barang'");

//cek hasil update
if ($mysqli->affected_rows > 0) {
  echo '<p>Data barang berhasil diubah...</p>';
  header('location:_.php');
} else {
  echo '<p>Data barang gagal diubah. Silahkan coba lagi!</p>';
}

?>

