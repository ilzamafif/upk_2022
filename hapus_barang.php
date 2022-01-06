<?php

//buka koneksi dengan MySQL
include("koneksi.php");

//mengecek apakah di URL ada GET id
if (isset($_GET["kd_barang"])) {

  //menyimpan variabel id dari url ke dalam variabel $id_petugas
  $kd_barang = $_GET["kd_barang"];

  //menjalankan query delete untuk menghapus data
  $query = "DELETE FROM barang WHERE kd_barang='$kd_barang'";
  $hasil_query = mysqli_query($mysqli, $query);

  //periksa query, apakah ada kesalahan
  if (!$hasil_query) {
    die("Gagal menghapus data:" . mysqli_errno($mysqli) . "-" . mysqli_error($mysqli));
  }
}

//melakukan redirect ke halaman index.php
header("location:admin.php");
