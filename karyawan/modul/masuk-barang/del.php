<?php
$id = $_GET['kd_masuk_barang'];
$del = mysqli_query($con, "DELETE FROM `masuk_barang` WHERE `masuk_barang`.`kd_masuk_barang` = '$id'");
var_dump($del);
if ($del) {
	echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=masuk-barang';
		</script>";
}
