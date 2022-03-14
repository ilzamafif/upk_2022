<?php

if (isset($_POST['saveBarang'])) {
	$nggolekkode = mysqli_query($con, "SELECT kd_keluar_barang from keluar_barang");
	$datakode = mysqli_fetch_array($nggolekkode);
	$jumlah_data = mysqli_num_rows($nggolekkode);
	if ($datakode) {
		$nilaikode = substr($jumlah_data[0], 1);
		$kode = (int) $nilaikode;
		$kode = $jumlah_data + 1;
		$kd_keluar_barang = "KLR" . str_pad($kode, 4, "0", STR_PAD_LEFT);
	} else {
		$kd_keluar_barang = "KLR0001";
	}

	$save = mysqli_query($con, "INSERT INTO `keluar_barang` VALUES('$kd_keluar_barang','$_POST[kd_barang]', '$_POST[nama_barang]','$_POST[tgl_keluar]','$_POST[jumlah_keluar_barang]','$_POST[keperluan]') ");
	if ($save) {
		echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('($_POST[nama_barang]) ', 'Berhasil disimpan', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=keluar-barang');
				} ,3000);   
				</script>";
	}
} elseif (isset($_POST['editBarang'])) {
	$sql = "UPDATE `keluar_barang` SET kd_keluar_barang='$_POST[kd_keluar_barang]', kd_barang='$_POST[kd_barang]', nama_barang='$_POST[nama_barang]', tgl_keluar='$_POST[tgl_keluar]', jumlah_keluar_barang='$_POST[jumlah_keluar_barang]', `keperluan` = '$_POST[keperluan]' WHERE `kd_keluar_barang`='$_GET[id]' ";
	$editBarang = mysqli_query($con, $sql);

	if ($editBarang) {
		echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('($_POST[nama_barang]) ', 'Berhasil diubah', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=keluar-barang');
				} ,3000);   
				</script>";
	}
}
