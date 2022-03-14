<?php

if (isset($_POST['saveBarang'])) {
	$nggolekkode = mysqli_query($con, "SELECT kd_masuk_barang from masuk_barang");
	$datakode = mysqli_fetch_array($nggolekkode);
	$jumlah_data = mysqli_num_rows($nggolekkode);
	if ($datakode) {
		$nilaikode = substr($jumlah_data[0], 1);
		$kode = (int) $nilaikode;
		$kode = $jumlah_data + 1;
		$kd_masuk_barang = "MSK" . str_pad($kode, 4, "0", STR_PAD_LEFT);
	} else {
		$kd_masuk_barang = "MSK0001";
	}
	$save = mysqli_query($con, "INSERT INTO masuk_barang VALUES('$kd_masuk_barang','$_POST[kd_barang]', '$_POST[nama_barang]','$_POST[tgl_masuk]','$_POST[jumlah_masuk_barang]','$_POST[kondisi]') ");
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
				window.location.replace('?page=masuk-barang');
				} ,3000);   
				</script>";
	}
} elseif (isset($_POST['editBarang'])) {
	$sql = "UPDATE `masuk_barang` SET kd_masuk_barang='$_POST[kd_masuk_barang]', kd_barang='$_POST[kd_barang]', nama_barang='$_POST[nama_barang]', tgl_masuk='$_POST[tgl_masuk]', jumlah_masuk_barang='$_POST[jumlah_masuk_barang]', `kondisi` = '$_POST[kondisi]' WHERE `masuk_barang`.`kd_masuk_barang`='$_GET[id]' ";
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
				window.location.replace('?page=masuk-barang');
				} ,3000);   
				</script>";
	}
}
