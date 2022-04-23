<?php

if (isset($_POST['saveBarang'])) {
	$nggolekkode = mysqli_query($con, "SELECT kd_barang from barang");
	$datakode = mysqli_fetch_array($nggolekkode);
	$jumlah_data = mysqli_num_rows($nggolekkode);
	if ($datakode) {
		$nilaikode = substr($jumlah_data[0], 1);
		$kode = (int) $nilaikode;
		$kode = $jumlah_data + 1;
		$kd_barang = "B" . str_pad($kode, 4, "0", STR_PAD_LEFT);
	} else {
		$kd_barang = "B0001";
	}
	$save = mysqli_query($con, "INSERT INTO barang VALUES('$kd_barang','$_POST[nama_barang]') ");
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
				window.location.replace('?page=barang');
				} ,3000);   
				</script>";
		// }
	}
} elseif (isset($_POST['editBarang'])) {

	$sql = "UPDATE `barang` SET nama_barang='$_POST[nama_barang]',`kd_barang` = '$_POST[kd_barang]' WHERE `barang`.`kd_barang`='$_GET[id]' ";
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
				window.location.replace('?page=barang');
				} ,3000);   
				</script>";
	}
}
