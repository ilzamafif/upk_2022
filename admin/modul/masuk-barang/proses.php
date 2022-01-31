<?php

if (isset($_POST['saveBarang'])) {

	$save = mysqli_query($con, "INSERT INTO masuk_barang VALUES('$_POST[kd_masuk_barang]','$_POST[kd_barang]', '$_POST[nama_barang]','$_POST[tgl_masuk]','$_POST[jumlah_masuk_barang]','$_POST[kondisi]') ");
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
