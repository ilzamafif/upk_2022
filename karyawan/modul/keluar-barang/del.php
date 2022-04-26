<?php
$id = $_GET['kd_keluar_barang'];
$del = mysqli_query($con, "DELETE FROM `keluar_barang` WHERE `keluar_barang`.`kd_keluar_barang` = '$id'");
var_dump($del);
if ($del) {
	echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=keluar-barang';
		</script>";
}
