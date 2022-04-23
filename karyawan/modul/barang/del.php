<?php
$id = $_GET['kd_barang'];
$del = mysqli_query($con, "DELETE FROM `barang` WHERE `barang`.`kd_barang` = '$id'");
var_dump($del);
if ($del) {
	echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=barang';
		</script>";
}
